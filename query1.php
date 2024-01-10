<?php include "db.php";?>
<html>
<head>
    <link rel="stylesheet" href="query1.css">
</head>

<table border='1'>
    <tr>
        <th>Car Number</th>
        <th>Car Brand</th>
        <th>License Plate</th>
    </tr>
    <?php
    $stmt = $pdo->prepare("SELECT cars.group, cars.car_id, cars.car_brand, cars.license_plate, COUNT(tickets.ticket_id) AS count 
        FROM cars LEFT JOIN tickets ON cars.car_id = tickets.car_id
        GROUP BY cars.car_id, cars.car_brand"); //QUERY

    $stmt->execute();

    while ($row = $stmt->fetch()) :
        $car_id = $row['car_id'];
        $car_brand = $row['car_brand'];
        $license_plate1 = $row['license_plate'];
        $ticket_count = $row['count'];
        $group = $row['group'];
    ?>
    <tr>
        <td><?= $car_id ?></td>
        <td><?= $car_brand ?></td>
        <td><?= $license_plate1 ?></td>
    </tr>
    <tr>
        <td colspan="3" class="<?= $group == 2 ? 'green' : 'blue' ?>">
            รถจาก <?= $group == 2 ? 'ระยอง' : 'กรุงเทพ' ?>
        </td>
    </tr>
  
    <tr>
        <td colspan="3" class="ticket-count">ถูกใช้งาน: <?= $ticket_count ?> รอบ</td>
    </tr>
    <?php endwhile ?>
</table><br><br>
<a href="adminpage.php" class="back">ย้อนกลับ</a>
