<?php include "db.php";?>

<?php


        $stmt = $pdo->prepare("SELECT cars.car_id, cars.car_brand, cars.license_plate, COUNT(tickets.ticket_id) AS count 
        FROM  cars LEFT JOIN tickets ON cars.car_id = tickets.car_id
        GROUP BY cars.car_id, cars.car_brand"); //QUERY

        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $car_id = $row['car_id'];
            $car_brand = $row['car_brand'];
            $license_plate1 = $row['license_plate'];
            $ticket_count = $row['count'];


                    //SHOW IN WEB
            echo "car_id: $car_id<br>";
            echo "car_brand: $car_brand<br>"; 
            echo "license_plate: $license_plate1<br>";
            echo "<b>Ticket Count: $ticket_count</b><br>";

            echo "<hr>";

        }
       
    ?><a href="adminpage.php"><input type='submit' value="ย้อนกลับ"></a>