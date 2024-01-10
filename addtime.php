<?php
include 'db.php';
?>
<head>
    <link rel="stylesheet" href="addtime.css">
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM cars");
    $stmt->execute();
    ?>

    <table border='1'>
        <tr>
            <th>CarNumber</th>
            <th>Car_Brand</th>
            <th>Year</th>
            <th>Available</th>
            <th>License_Plate</th>
            <th>Depart_Time</th>
            <th>Arrival_Time</th>
            <th>รถต้นทาง</th>
            <th>Edit</th>
        </tr>
        <?php while ($row = $stmt->fetch()) : ?>
        <form action="editcars.php" method="post">  
          <input type='hidden' name='car_id' value=' <?= $row['car_id'] ?>'>
            <tr>
                <td class="b-color"><?= $row['car_id'] ?></td>
                <td><?= $row['car_brand'] ?></td>
                <td><?= $row['year'] ?></td>
                <td><?= $row['available'] ?></td>
                <td><?= $row['license_plate'] ?></td>
                <td><input type='text' name='depart_time' value='<?= $row['depart_time'] ?>'></td>
                <td><input type='text' name='arrival_time' value='<?= $row['arrival_time'] ?>'></td>
                <td>
                    <?php
                    if ($row['group'] == 2) {
                        echo "<b>รถจาก ระยอง</b>";
                    } else {
                        echo "<b>รถจาก กรุงเทพ</b>";
                    }
                    ?>
                </td>
                <td><input type='submit' value="แก้ไข" class="edit"></td>
            </tr>
            </form>
        <?php endwhile ?>
    </table>

    <a href="adminpage.php" class="back">ย้อนกลับ</a>
</body>

