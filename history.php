<?php 
session_start();
include ("db2.php");
if(!isset($_SESSION['userid'])){
    header("location:index.php");


}else{




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ticket Confirmation</title>
    <link rel="stylesheet" href="showdata.css">
</head>

<body>
    <!-- id <?= $_SESSION['userid']; ?><br>
        จาก <?= $_SESSION['location_id']   ;?><br>
        ถึง <?= $_SESSION['des_id'] ;?><br>
        วัน <?= $_SESSION['depart_date']  ;?><br>
        id รถ <?= $_SESSION['car_id']  ;?><br>
        เวลาขึ้นรถ <?= $_SESSION['depart_time']  ;?><br>
        เวลาลงรถ<?= $_SESSION['arrival_time']  ;?><br>
        ราคา <?= $_SESSION['price']  ;?><br>
        <?php
        $sql = mysqli_query($dbcon,"SELECT * FROM tickets WHERE cus_id='" . $_SESSION['userid'] . "' AND depart_date='" . $_SESSION['depart_date'] . "'");
        $row = mysqli_fetch_array($sql); 
        //echo $row['depart_date'] ;
        ?><br><br><br><br> -->


    <?php 
            $sql = mysqli_query($dbcon,"SELECT * FROM customers WHERE cus_id='" . $_SESSION['userid'] . "'");
            $row = mysqli_fetch_array($sql)
                
            
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




    <?php 
    $sql1 = mysqli_query($dbcon, "SELECT * FROM tickets WHERE cus_id='" . $_SESSION['userid'] . "'");

    while ($row1 = mysqli_fetch_array($sql1)) {
    ?>
    <section>
        <!-- แสดงชื่อ -->
        <?php 
        $sql = mysqli_query($dbcon, "SELECT * FROM customers WHERE cus_id='" . $_SESSION['userid'] . "'");
        $row = mysqli_fetch_array($sql);
        echo "ชื่อ " . $row['fname'] . "" . $row['lname'];
        ?><br>

        <!-- จาก -->
        <?php 
        $sql = mysqli_query($dbcon, "SELECT * FROM pickuplocation WHERE location_id='" . $row1['location_id'] . "'");
        $pickup_location = mysqli_fetch_array($sql);
        echo "จาก " . $pickup_location['location_name'];
        ?><br>

        <!-- ถึง -->
        <?php 
        $sql = mysqli_query($dbcon, "SELECT * FROM destinations WHERE des_id='" . $row1['des_id'] . "'");
        $destination = mysqli_fetch_array($sql);
        echo "ถึง " . $destination['des_name'];
        ?><br>

        <!-- วันที่ขึ้นรถ -->
        <?php 
        echo "วันที่ขึ้นรถ " . $row1['depart_date'];
        ?><br>

        <!-- ทะเบียนรถ -->
        <?php 
        $sql = mysqli_query($dbcon, "SELECT * FROM cars WHERE car_id='" . $row1['car_id'] . "'");
        $car = mysqli_fetch_array($sql);
        echo "ทะเบียนรถ " . $car['license_plate'];
        ?><br>

        <!-- เวลาขึ้น -->
        <?php 
        echo "เวลาขึ้น " . $row1['depart_time'];
        ?><br>

        <!-- เวลาถึง -->
        <?php 
        echo "เวลาถึง " . $row1['arrival_time'];
        ?><br>

        <!-- ราคา -->
        <?php 
        echo "ราคา " . $car['price'];
        ?><br>
    </section>
    <?php } ?>

</body>

</html>
<?php }?>