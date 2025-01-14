<?php
date_default_timezone_set('Asia/Kolkata');
include('db.php');
 session_start();
 $timestamp = strtotime("now"); // Current time


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Retrieve form data
    // print_r($_POST);
    // die;
    if(!$_POST['mobile_number']){
        $data = json_encode(array('status'=>0,'message'=>"Please enter the mobile number"));
         echo $data;
         die;
    }

    if(strlen($_POST['mobile_number']) < 10 || strlen($_POST['mobile_number']) > 10){
        $data = json_encode(array('status'=>0,'message'=>"Please enter valid mobile number"));
         echo $data;
         die;
    }
    $fullname = null;
    if(empty($_POST['name'])){
        $fullname = $_POST['name'];
    }
    $formData = $_SESSION['basic_info_data'];

    
    $monthly_bill_exact = isset($formData['monthly_bill_exact']) && trim(!empty($formData['monthly_bill_exact']))?$formData['monthly_bill_exact']:null;

    $average_monthly_bill = $formData['average_monthly_bill'] && trim(empty($monthly_bill_exact))?$formData['average_monthly_bill'].'-'.$formData['average_monthly_bill']+500:null;

    $district = $formData['district'];
    $propertyType = $formData['propertyType'];
    $name = $_POST['name'];
    $mobile_number = $_POST['mobile_number'];
    $datetime = date("Y-m-d H:i:s", $timestamp);
    
     //SQL query to insert data into the database
     $sql = "INSERT INTO basic_info_calculator (district_id, monthly_bill, monthly_bill_range,property_type,name,mobile_number,date_time) VALUES ('$district', '$monthly_bill_exact', '$average_monthly_bill','$propertyType','$name','$mobile_number','$datetime')";

     // Execute the query and check if the insertion is successful
     if ($conn->query($sql) === false) {
         $data =  json_encode(array('status'=>0,'message'=>$conn->error));
         echo $data;
         die;
     }
   
     unset($_SESSION['basic_info_data']);
     $_SESSION['calculation_id'] = $conn->insert_id;
    $data =  json_encode(array('status'=>1));
    echo $data;
}
?>