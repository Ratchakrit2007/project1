<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ticket Confirmation</title>
    </head>

    <body>
        <h1>กรอกลง sql แล้ว</h1>
        <p>ขอบคุณที่ใช้บริการ</p>
        <p>รายละเอียด:</p>
        <ul>
            <li>User ID: <?= $_SESSION['userid']; ?></li>
            <?php
            $sql = mysqli_query($dbcon,"SELECT * FROM customers WHERE cus_id='" . $_SESSION['userid'] . "'");
            $row = mysqli_fetch_array($sql);
            ?>
            <li>Name: <?= $row['fname'] .'&nbsp'. $row['lname']; ?></li>

            <?php
            $sql = mysqli_query($dbcon,"SELECT * FROM pickuplocation ");
            $row = mysqli_fetch_array($sql);
            ?>
            <li>Location: <?= "ID ".$locationId."&nbsp".$row['location_name'] ; ?></li>
            
            <?php
            $sql = mysqli_query($dbcon,"SELECT * FROM destinations ");
            $row = mysqli_fetch_array($sql);
            ?>
            <li>Destination: <?= "ID ".$desId."&nbsp".$row['des_name'] ; ?></li>
  
            <li>Departure Date: <?= $departDate; ?></li>
        </ul><a href="index.php"><button>หน้าหลัก</button></a></li>
    
    </body>

    </html>