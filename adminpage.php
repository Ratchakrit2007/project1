<?php
session_start();
include("db2.php");
if (!isset($_SESSION['userid']  )) {
    header("location:login.php");
}else if ($_SESSION['userid'] == 15 || $_SESSION['userid'] == 78 || $_SESSION['userid'] == 79){  ;?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="admin.css">
    </head>

    <body>
        <h1><b>Admin</b></h1>
        <a href="addtime.php"><input type="submit" value="แก้ไขเวลารถแต่ละวัน"></a><br>
        <a href="query1.php"><input type="submit" value="query จำนวนที่รถถูกจองไปแล้วกี่ครั้ง (รถที่ถูกใช้งานมากที่สุด)"></a><br>
        <a href="query4.php"><input type="submit" value="query รายได้ในแต่ละเดือน"></a><br>
        <a href="test1.php"><input type="submit" value="รายชื่อ Admin"></a><br>
        <a href="login.php"><input type='submit' value="Exit"></a>
    </body>



    </html>
<?php } else if ($_SESSION['userid'] !== 15 || $_SESSION['userid'] !== 78 || $_SESSION['userid'] !== 79){ 
    header("location:index.php");
}


?>
 
    
    