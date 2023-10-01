<?php include "db.php" ?>
<?php

    $stmt = $pdo->prepare("INSERT INTO tickets(cus_id, des_id, location_id, depart_date) VALUES (?,?,?,?)");
    $stmt->bindParam(1, $_GET["cus_id"]);
    $stmt->bindParam(2, $_POST["des_id"]);
    $stmt->bindParam(3, $_POST["location_id"]);
    $stmt->bindParam(4, $_POST["depart_date"]);
    $stmt->execute(); // เริ่มเพิ่มข้อมูล
    $ticket_id = $pdo->lastInsertId();
    
    header("location: bustime.php?ticket_id=" . $ticket_id );
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
    
</body>
</html>