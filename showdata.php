<?php
session_start();
include("db2.php");
if (!isset($_SESSION['userid'])) {
    header("location:index.php");


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ticket Confirmation</title>
    <link rel="stylesheet" href="showdata.css">
</head>

<body>
    <!-- id <?= $_SESSION['userid']; ?><br>
        จาก <?= $_SESSION['location_id']; ?><br>
        ถึง <?= $_SESSION['des_id']; ?><br>
        วัน <?= $_SESSION['depart_date']; ?><br>
        id รถ <?= $_SESSION['car_id']; ?><br>
        เวลาขึ้นรถ <?= $_SESSION['depart_time']; ?><br>
        เวลาลงรถ<?= $_SESSION['arrival_time']; ?><br>
        ราคา <?= $_SESSION['price']; ?><br>
        <?php
        $sql = mysqli_query($dbcon, "SELECT * FROM tickets WHERE cus_id='" . $_SESSION['userid'] . "' AND depart_date='" . $_SESSION['depart_date'] . "'");
        $row = mysqli_fetch_array($sql);
        echo $row['depart_date'];
        ?><br><br><br><br> -->


    <?php
    $sql = mysqli_query($dbcon, "SELECT * FROM customers WHERE cus_id='" . $_SESSION['userid'] . "'");
    $row = mysqli_fetch_array($sql);
    ?>

    <nav>
        <a href="index.php" style="color: white;">RayongTransport</a>
        <ul>
            User : <?= $row['fname']; ?>
            <li><a href="index.php">หน้าหลัก</a></li>
            <!-- <li class="li2"><a href="#">ซื้อตั๋ว</a></li> -->
            <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
    </nav><br>



    <article>
        <section>
            <!-- แสดงชื่อ -->
            <?php
            $sql = mysqli_query($dbcon, "SELECT * FROM customers WHERE cus_id='" . $_SESSION['userid'] . "'");
            $row = mysqli_fetch_array($sql);
            echo "ชื่อ " . $row['fname'] . "_" . $row['lname'];

            ?><br>

            <!-- จาก -->
            <?php
            $sql = mysqli_query($dbcon, "SELECT * FROM pickuplocation WHERE location_id='" . $_SESSION['location_id'] . "'");
            $row = mysqli_fetch_array($sql);
            echo "จาก " . $row['location_name'];

            ?><br>

            <!-- ถึง -->
            <?php
            $sql = mysqli_query($dbcon, "SELECT * FROM destinations WHERE des_id='" . $_SESSION['des_id'] . "'");
            $row = mysqli_fetch_array($sql);
            echo "ถึง " . $row['des_name'];

            ?><br>

            <!-- วันที่ขึ้นรถ -->
            <?php
            $sql = mysqli_query($dbcon, "SELECT * FROM tickets WHERE depart_date='" . $_SESSION['depart_date'] . "'");
            $row = mysqli_fetch_array($sql);
            echo "วันที่ขึ้นรถ " . $row['depart_date'];

            ?><br>

            <!-- ทะเบียนรถ -->
            <?php
            $sql = mysqli_query($dbcon, "SELECT * FROM cars WHERE car_id='" . $_SESSION['car_id'] . "'");
            $row = mysqli_fetch_array($sql);
            echo "ทะเบียนรถ " . $row['license_plate'];

            ?><br>

            <!-- เวลาขึ้น -->
            <?php
            $sql = mysqli_query($dbcon, "SELECT * FROM cars WHERE depart_time='" . $_SESSION['depart_time'] . "'");
            $row = mysqli_fetch_array($sql);
            echo "เวลาขึ้น " . $row['depart_time'];

            ?><br>

            <!-- เวลาถึง -->
            <?php
            $sql = mysqli_query($dbcon, "SELECT * FROM cars WHERE arrival_time='" . $_SESSION['arrival_time'] . "'");
            $row = mysqli_fetch_array($sql);
            echo "เวลาถึง " . $row['arrival_time'];

            ?><br>


            <!-- ราคา -->
            <?php
            $sql = mysqli_query($dbcon, "SELECT * FROM cars WHERE car_id='" . $_SESSION['car_id'] . "'");
            $row = mysqli_fetch_array($sql);
            echo "ราคา " . $row['price'];

            ?><br>
        </section>

        <aside>
            <img src="image/prom.png" width="200px">
            <p> ธนาคารกรุงไทย </p>
            <p> หมายเลขบัญชี 494-0-35231-5 </p>
            <p> นายรัชกฤช ถิรสัตยาภิบาล</p>

            <a href="index.php"><button type="button" class="btn btn-outline-success">Success</button></a>
        </aside>

    </article>
</body>

</html>