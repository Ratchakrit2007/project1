<?php 
session_start();
include ("db2.php");
if(!isset($_SESSION['userid'])){
    header("location:index.php");


    
}else{
?>
    <?php
    $sql = mysqli_query($dbcon,"DELETE FROM customers 
    WHERE cus_id='" . $_SESSION['userid'] . "'");  
        header("location: login.php");
    ?>
<?php } ?>