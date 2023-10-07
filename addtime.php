
<?php include "db.php";?>
<html>

<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM cars");
        $stmt->execute();
       
    ?>
    <?php 
    while($row = $stmt->fetch()):?>

    <form action="editcars.php" method="post">
        <input type='hidden' name='car_id' value=' <?=$row['car_id']?>'>
        car_id : <?=$row['car_id']?><br>
        car_brand :<?=$row['car_brand']?><br>
        year :<?=$row['year']?><br>
        available :<?=$row['available']?><br>
        license_plate :<?=$row['license_plate']?><br>
        depart_time : <input type='text' name='depart_time' value='<?=$row['depart_time']?>'><br>       
        arrival_time : <input type='text' name='arrival_time' value='<?=$row['arrival_time']?>'><br>
        <input type='submit' value="แก้ไข">

    <hr>
    </form>
    <?php endwhile?>
    <a href="adminpage.php"><input type='submit' value="ย้อนกลับ"></a>
</body>

</html>