<?php include "db.php" ?>
<?php
    $stmt = $pdo->prepare("INSERT INTO customers VALUES ('', ?, ?, ?, ?, ?)");

    $stmt->bindParam(1, $_GET["fname"]);
    $stmt->bindParam(2, $_GET["lname"]);
    $stmt->bindParam(3, $_GET["pass"]);
    $stmt->bindParam(4, $_GET["email"]);
    $stmt->bindParam(5, $_GET["phone"]);
    $stmt->execute(); // เริ่มเพิ่มข้อมูล
    $cus_id = $pdo->lastInsertId();
    header("location: login.php");
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
    
</body>
</html>