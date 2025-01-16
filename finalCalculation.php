<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the requested function exists
    if (isset($_POST['function_name']) && function_exists($_POST['function_name'])) {
        $functionName = $_POST['function_name'];
        $params = $_POST['params'] ?? [];

        // Call the PHP function and return the result
        $result = call_user_func_array($functionName, $params);
        echo json_encode(['status' => 'success', 'data' => $result]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Function not found or invalid request.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}

// Example function
function getAllCalculation($a) {
    include('db.php');
    $sql = "SELECT * FROM basic_info_calculator Where id = ".$a."";
$result = $conn->query($sql);

$bill = '';
$capacityRequired = 0;
if ($result->num_rows > 0) {
    // Loop through the rows of data
    while($row = $result->fetch_assoc()) {
        if($row['monthly_bill_range'] && $row['monthly_bill_range']!=''){
        $bill = (float)$row['monthly_bill_range']/2;
        
    }else{
        $bill =  $row['monthly_bill'];
    }

        $value1 = $bill/9;
        if($row['property_type'] == 'Residential'){
            $value1 = $bill/6;
        }
        $value2 = $value1/30;
        $capacityRequired = $value2/4;
}
}

// $sql = "SELECT orders.order_id, orders.order_date, customers.name, customers.city
// FROM orders
// JOIN customers
// ON orders.customer_id = customers.customer_id
// WHERE target_value BETWEEN 
//       CAST(SUBSTRING_INDEX(range_column, '-', 1) AS DECIMAL(10,2)) 
//       AND CAST(SUBSTRING_INDEX(range_column, '-', -1) AS DECIMAL(10,2))";

    $sql = "SELECT *
FROM cash_calculation
WHERE $capacityRequired BETWEEN 
      CAST(SUBSTRING_INDEX(kw_range, '-', 1) AS DECIMAL(10,2)) 
      AND CAST(SUBSTRING_INDEX(kw_range, '-', -1) AS DECIMAL(10,2))";

$results = $conn->query($sql);
while($row = $results->fetch_assoc()) {
    $row['capacityRequired'] = $capacityRequired;
    $row['bill'] = $bill;
    $row['solar_bill'] = 0.20*$bill;
   return $row;
}
    return $a;
}
