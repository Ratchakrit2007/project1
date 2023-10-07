<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASS','');
define('DB_NAME','rayongtransport');

$dbcon = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASS, DB_NAME);

if(mysqli_connect_error()){
    echo "Failed to connect to MySQL : " .mysqli_connect_error();
}
if (!mysqli_set_charset($dbcon, "utf8")) {
    exit();
}

// $pdo = new PDO("mysql:host=localhost; dbname=rayongtransport; charset=utf8", "root", "");
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 //session_start();
?>