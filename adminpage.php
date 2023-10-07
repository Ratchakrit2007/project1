<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#DAFFFB;
            text-align:center;
        }
        input{
            background-color: #64CCC5; 
            border: 1px solid black;
            color: white;
            padding: 15px 32px;
            margin:10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
        h1{
            color:#176B87;
        }
    </style>
</head>
<body>
    <h1><b>admin</b></h1>
    <a href="addtime.php"><input type="submit" value="แก้ไขเวลารถแต่ละวัน"></a><br>
    <a href="query1.php"><input type="submit" value="query จำนวนที่รถถูกจองไปแล้วกี่ครั้ง (รถที่ถูกใช้งานมากที่สุด)"></a><br> 
    <a href="query2.php"><input type="submit" value="query จำนวนจุดที่ลูกค้าลงไป ทั้งหมดกี่ครั้ง ?"></a><br>
    <a href="query3.php"><input type="submit" value="query รายการลูกค้าคนไหนที่ทำรายการไปแล้วทั้งหมดกี่ครั้ง "></a><br>
    <a href="login.php"><input type='submit' value="exit"></a>
</body>
</html>