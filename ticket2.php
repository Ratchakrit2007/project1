<?php
ob_start();
session_start();
include ("db2.php");
if(!isset($_SESSION['userid'])){
    header("Location:login.php"); //ถ้าเข้าแบบ pathname จะเด้งไปหน้า login.php
}else{
    $sql = mysqli_query($dbcon,"SELECT * FROM customers WHERE cus_id='" . $_SESSION['userid'] . "'");
    $row = mysqli_fetch_array($sql);
    // เช็คว่า form ได้ กด summit ไหม
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // เอา user's ID ได้มาจาก session
        $userId = $_SESSION['userid'];

         // รับค่าจากฟอร์มหลัก
        $locationId = $_POST['location_id'];
        $desId = $_POST['des_id'];
        $departDate = $_POST['depart_date'];
        
        
        // เก็บค่าใน $_SESSION
        $_SESSION['location_id'] = $locationId;
        $_SESSION['des_id'] = $desId;
        $_SESSION['depart_date'] = $departDate;

        // echo $_SESSION['userid'] . '<br>';
        // echo $_POST['location_id']. '<br>';
        // echo $_POST['des_id']. '<br>';
        // echo $_POST['depart_date']. '<br>';



    // Insert the data 
    //     $Query = "INSERT INTO tickets (cus_id, des_id, location_id, depart_date) 
    //                     VALUES ('$userId', '$locationId', '$desId', '$departDate')";

    //     if (mysqli_query($dbcon, $Query)) {
    //         echo "";
    //         header("location:bustime.php");
    //     } else {
    //         echo "Error: " . mysqli_error($dbcon);
    //     }
        }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT CARS</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

        <nav>
            <a href="index.php" style="color: white;">RayongTransport</a>
            <ul>
                User : <?= $row['fname']; ?>
                <li><a href="index.php">หน้าหลัก</a></li>
                <li class="li2"><a href="#">ซื้อตั๋ว</a></li>
                <li><a href="logout.php">ออกจากระบบ</a></li>
            </ul>
        </nav><br>




    <section>
        <h1>Detail : </h1>
        <?php
            echo "ชื่อ :" . $row['fname'] . "<br>";
        $sql = mysqli_query($dbcon,"SELECT * FROM pickuplocation WHERE location_id='" . $_POST['location_id'] . "'");
        if ($sql) {
            $row = mysqli_fetch_assoc($sql);
            if ($row) {
                // แสดงค่าที่ query มา
                //echo "LocationID: " . $row['location_id'] . "<br>";
                echo "จาก: " . $row['location_name'] . "<br>";
                // แสดงค่าอื่นๆ ตามคอลัมน์ที่ต้องการ
            } else {
                echo "ไม่พบข้อมูลที่ตรงกับคำค้นหา";
            }
        } else {
            echo "เกิดข้อผิดพลาดในการค้นหา";
        }?>
        <?php
        $sql = mysqli_query($dbcon,"SELECT * FROM destinations WHERE des_id='" . $_POST['des_id'] . "'");
        if ($sql) {
            $row = mysqli_fetch_assoc($sql);
            if ($row) {
                // แสดงค่าที่ query มา
                //echo "DestinationID: " . $row['des_id'] . "<br>";
                echo "ถึง: " . $row['des_name'] . "<br>";
                // แสดงค่าอื่นๆ ตามคอลัมน์ที่ต้องการ
            } else {
                echo "ไม่พบข้อมูลที่ตรงกับคำค้นหา";
            }
        } else {
            echo "เกิดข้อผิดพลาดในการค้นหา";
        }?>
        Departure Date: <?= $departDate; ?><br><br>
        <hr>
        <h1>เลือกรถ : </h1>
        <?php 
        

        $sql = mysqli_query($dbcon,"SELECT cars.car_id AS car_id, 
                                        cars.license_plate AS license_plate, 
                                        cars.depart_time AS depart_time, 
                                        cars.arrival_time AS arrival_time, 
                                        cars.price AS price, 
                                        COUNT(tickets.car_id) AS count 
                                        FROM cars 
                                        LEFT JOIN tickets 
                                        ON cars.car_id = tickets.car_id AND tickets.depart_date = '$departDate' 
                                        WHERE cars.group = $locationId 
                                        GROUP BY cars.car_id, cars.license_plate, cars.depart_time, cars.arrival_time, cars.price");
                                                                        
            while ($row = mysqli_fetch_array($sql)):?>
        <form action="insert-data.php" method="POST"><?php
                    $count = $row['count'];
                    $car_id = $row['car_id']; 
                    $depart_time = $row['depart_time']; 
                    $arrival_time = $row['arrival_time']; 
                    $price = $row['price'];
                    if($count!=10){
                        echo "<p> RayongTransport </p>";
                        echo "เลขรถ : " . $row['car_id'] . "<br>";
                        echo "ทะเบียนรถ : " . $row['license_plate']. "<br>";
                        echo "เวลาขึ้นรถ : " . $row['depart_time']. "<br>";
                        echo "เวลาถึง : " . $row['arrival_time']. "<br>";
                        echo "<b>เหลือที่นั่งอยู่: $count /10</b><br>";
                        echo $row['price']. "<br>";
                        
                        echo "<input type='hidden' name='car_id' value='$car_id'>";
                        echo "<input type='hidden' name='depart_time' value='$depart_time'>";
                        echo "<input type='hidden' name='arrival_time' value='$arrival_time'>";
                        echo "<input type='hidden' name='price' value='$price'>";
                        echo "<input type='hidden' name='location_id' value='" . $_SESSION['location_id'] . "'>";
                        echo "<input type='hidden' name='des_id' value='" . $_SESSION['des_id'] . "'>";
                        echo "<input type='hidden' name='depart_date' value='" . $_SESSION['depart_date'] . "'>";
                        echo "<input type='submit' value='เลือก'><br><br>";
                        echo "<hr>";  
                       
                    }
                    
                    ?>

            
        </form>
        <?php endwhile ?>
    </section>

</body>


</html>

<?php } 
ob_end_flush();

?>