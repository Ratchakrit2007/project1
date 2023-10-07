<?php include "db.php";?>

<?php


        $stmt = $pdo->prepare("SELECT customers.fname AS des, COUNT(tickets.cus_id) AS count 
        FROM tickets 
        LEFT JOIN customers ON customers.cus_id = tickets.cus_id GROUP BY customers.cus_id ,tickets.cus_id");

        $stmt->execute();



        while ($row = $stmt->fetch()) {
            $name= $row['des'];
            $count = $row['count'];



            echo "ชื่อลูกค้า: $name<br>";
            echo "<b>จำนวน: $count</b><br>";

            echo "<hr>";

        }
       
    ?><a href="adminpage.php"><input type='submit' value="ย้อนกลับ"></a>