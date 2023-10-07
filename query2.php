<?php include "db.php";?>

<?php


        $stmt = $pdo->prepare("SELECT cars.car_id AS car_id, cars.license_plate 
        AS license_plate, cars.depart_time as depart_time,cars.arrival_time as arrival_time,COUNT(tickets.car_id) AS count 
        FROM tickets LEFT JOIN cars ON cars.car_id = tickets.car_id GROUP BY cars.car_id , tickets.car_id");

        $stmt->execute();



        while ($row = $stmt->fetch()) {
            $car_id= $row['car_id'];
            $license_plate = $row['license_plate'];
            $depart_time = $row['depart_time'];
            $arrival_time = $row['arrival_time'];
            $count = $row['count'];



            echo "จุดลง: $car_id<br>";
            echo "ทะเบียน: $license_plate<br>";
            echo "จำนวน: $depart_time<br>";
            echo "จำนวน: $arrival_time<br>";
            echo "<b>จำนวน: $count</b><br>";

            echo "<hr>";

        }
       
    ?><a href="adminpage.php"><input type='submit' value="ย้อนกลับ"></a>