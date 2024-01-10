<?php 
session_start();
include ("db2.php");
if(!isset($_SESSION['userid'])){
   header("location:login.php");
}else{


    $a = $_GET["a"];
    $b = $_GET["b"];
    $sql = mysqli_query($dbcon,"SELECT MONTH(depart_date) AS เดือน,YEAR(depart_date) AS ปี ,COUNT(depart_date) * 180 AS รายได้
    FROM tickets 
    WHERE MONTH(depart_date)  = '$a' and YEAR(depart_date) = '$b'");
  
        $row = mysqli_fetch_array($sql);

        $Month=$row['เดือน'];
        $Year=$row['ปี'];
        $Income=$row['รายได้'];

        echo "<br>เดือน " . $Month . " ปี " .$Year . "<br>";
        echo "รายได้ " . $Income;
   
        




} ?>