<?php 
session_start();
include "db.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tickets.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <a href="#" style="color: white;">RayongTransport</a>
        <ul>
            <li><a href="index.php?cus_id=<?= $_SESSION['cus_id'] ?>">หน้าหลัก</a></li>
            <li><a href="#">ซื้อตั๋ว</a></li>
            <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
    </nav><br><br><br>




    <?php
        $stmt = $pdo->prepare("SELECT * FROM cars");
        $stmt->execute();
       
    ?>


    <div class="container">
        <span style="color: white; background-color:red;border-radius:10px ;">เที่ยวรถ</span> <br><br>
        <?php 
        while($row = $stmt->fetch()):?>


        <form action="bustime2.php?ticket_id=<?= $_GET['ticket_id'] ?>" method="POST">

            <p> RayongTransport </p>
            <p> เลขทะเบียน <?=$row['license_plate']?></p>
            <input type='hidden' name='depart_time' value='<?=$row['depart_time']?>'>
            <p> เวลาออก <?=$row['depart_time']?></p>
            <p> เวลาถึง <?=$row['arrival_time']?></p>
            <input type='hidden' name='arrival_time' value='<?=$row['arrival_time']?>'>
            <input type='hidden' name='car_id' value='<?=$row['car_id']?>'>
            <p> 180$ </p>
            <input type='submit' value='เลือก'>

        </form><br>

        <?php endwhile?>
    </div>



</body>

</html>