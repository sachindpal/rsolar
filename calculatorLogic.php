<?php
include('db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Retrieve form data
    // print_r($_POST);
    // die;
    if(!$_POST['district']){
        $data = json_encode(array('status'=>0,'message'=>"Please select district"));
         echo $data;
         die;
    }

    if(empty($_POST['propertyType'])){
        $data =  json_encode(array('status'=>0,'message'=>"Please select property type"));
        echo $data;
        die;
    }
    $_SESSION['basic_info_data'] = $_POST;
    
     
    $data =  json_encode(array('status'=>1));
    echo $data;
}
?>