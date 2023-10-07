<?php
session_start();
include 'db2.php';

$car_id = $_POST['car_id'];
$depart_time = $_POST['depart_time']; 
$arrival_time = $_POST['arrival_time']; 
$price = $_POST['price'];

$_SESSION['car_id'] = $car_id;
$_SESSION['depart_time'] = $depart_time;
$_SESSION['arrival_time'] = $arrival_time;
$_SESSION['price'] = $price;

$locationId = $_SESSION['location_id']; 
$desId = $_SESSION['des_id'];
$departDate = $_SESSION['depart_date']; 
$userId = $_SESSION['userid'];

// echo $price;
// echo $car_id. '<br>';
// print_r($car_id);
// echo $departDate ;


//Insert the data 
$Query = "INSERT INTO tickets 
    (cus_id, des_id, location_id, depart_date, depart_time, arrival_time, car_id, tprice) 
    VALUES ('$userId', '$desId', '$locationId', '$departDate', '$depart_time', '$arrival_time', '$car_id' , '$price')";

if (mysqli_query($dbcon, $Query)) {
    header("location:showdata.php");
    exit();
} else {
    echo "Error: " . mysqli_error($dbcon);
}


?>