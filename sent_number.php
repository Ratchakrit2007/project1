<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bustime.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="#">Logo</a>
        <ul>   
            <li><a href="index.php">หน้าหลัก</a></li>
            <li><a href="#">ซื้อตั๋ว</a></li>
            <li><a href="register.php">เข้าสู่ระบบ/สมัครสมาชิก</a></li>
        </ul>
    </nav><br><br><br>

    <div class="top-con"> 
        <span>&#8226 ค้นหา</span> -------- <span>&#8226 เที่ยวรถ</span> -------- 
        <span>&#8226 ที่นั่ง</span> -------- 
        <span>&#8226 ชำระเงิน</span> 
    </div><br><br>

    <div class="container">
    <form action="bustime2.php?ticket_id=<?= $_GET['ticket_id'] ?>" method="POST">
        <?php
            $stmt = $pdo->prepare("SELECT * FROM cars");
            $stmt->execute(); 
            while ($row = $stmt->fetch()) {
                echo " <p> RayongTransport </p>" ;
                echo " <p> เลขทะเบียน " . $row['license_plate'] . "</p>" ;
                echo " <p> เวลาออก " . $row['depart_time'] . "</p>" ;
                echo '<input type="hidden" name="depart_time" value="'.$row["depart_time"].'">';
                echo " <p> เวลาถึง " . $row['arrival_time'] . "</p>" ;
                echo '<input type="hidden" name="arrival_time" value="'.$row["arrival_time"].'">';
                echo '<input type="hidden" name="car_id" value="'.$row["car_id"].'">';
                echo " <p> 180$ </p>" ;
                
                echo "<input type='submit' value='เลือก'>";
            }
        ?>
    </form>    
        

    </div>
</body>
</html>