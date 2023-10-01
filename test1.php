<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        เบอร์โทรศัพท์<input type="text" name="keyword1"></input>
        รหัส<input type="pass" name="keyword2"></input>
        <input type="submit" value="login">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $phone = $_POST["keyword1"];
        $pass = $_POST["keyword2"];

        $stmt = $pdo->prepare("SELECT * FROM customers where phone=? AND pass=?");
            $stmt->bindParam(1, $phone);
            $stmt->bindParam(2, $pass);
            $stmt->execute(); // เริ่มค้นหา

        while($row = $stmt->fetch()){
            if($row){
                    // ข้อมูลการเข้าสู่ระบบถูกต้อง กําหนดให้เปลี่ยนเส้นทางไปที่ tickets.php พร้อมพามี cus_id เป็นพารามิเตอร์ใน URL
                $cus_id = $row['cus_id'];
                    header("Location: tickets.php?cus_id=" . $cus_id);
            }
        }
               
    }   

    ?>
    
</body>
</html>