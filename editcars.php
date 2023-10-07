<?php
include "db.php";

$stmt = $pdo->prepare("UPDATE cars SET depart_time=?, arrival_time=? WHERE car_id=?");

$stmt->bindParam(1, $_POST["depart_time"]);
$stmt->bindParam(2, $_POST["arrival_time"]);
$stmt->bindParam(3, $_POST["car_id"]);

if ($stmt->execute()) {
    echo "แก้ไข " . $_POST["car_id"] . " สำเร็จ" . "<br>";
    echo '<a href="addtime.php">ย้อนกลับ</a>'; // Corrected this line
} else {
    echo "เกิดข้อผิดพลาดในการแก้ไข " . $_POST["car_id"];
}
?>