<?php include "db.php" ?>
<?php

    $stmt = $pdo->prepare("UPDATE tickets SET `car_id`=?,`depart_time`=?,`arrival_time`=? WHERE ticket_id=?");
    $stmt->bindParam(1, $_POST["car_id"]);
    $stmt->bindParam(2, $_POST["depart_time"]);
    $stmt->bindParam(3, $_POST["arrival_time"]);
    $stmt->bindParam(4, $_GET["ticket_id"]);
    $stmt->execute(); // เริ่มเพิ่มข้อมูล
    
    
    header("location: seat.php?ticket_id=".$_GET["ticket_id"]);
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
    
</body>
</html>