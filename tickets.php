<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="tickets.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="#">Logo</a>
        <ul>   
            <li><a href="index.php">หน้าหลัก</a></li>
            <li><a href="#">ซื้อตั๋ว</a></li>
            <li><a href="register.php">เข้าสู่ระบบ/สมัครสมาชิก</a></li>
        </ul>
    </nav><br><br><br>

    <div class="top-con"> 
        <span>&#8226 ค้นหา</span> -------- <span>&#8226 เที่ยวรถ</span> -------- 
        <span>&#8226 ที่นั่ง</span> -------- 
        <span>&#8226 ชำระเงิน</span> 
    </div><br><br>

    <div class="container"><br>
        <form action="ticket2.php?cus_id=<?= $_GET['cus_id'] ?>" method="POST">  
            <label for="picklocation">จาก:</label>
            <select id="picklocation" name="location_id">
                <option value="">กรุณาเลือก</option>
                <?php 
                $stmt = $pdo->prepare("SELECT * FROM pickuplocation");
                $stmt->execute();
                while ($row = $stmt->fetch()) { 
                    ?>
                    <option value="<?php echo $row['location_id']?>"><?php echo $row['location_name'] ?></option>
                    <?php
                } ?>
            </select>


            <label for="deslocation">จุดขึ้นรถ:</label>
            <select id="deslocation" name="des_id">
                <option value="">กรุณาเลือก</option>
            </select><br><br>


            <label for="des">ถึง:</label>
            <select id="des" name="location_id">
                <option value="">กรุณาเลือก</option>
            </select>

            <label for="deslocation2">จุดลงรถ:</label>
            <select id="deslocation2" name="des_id">
                <option value="">กรุณาเลือก</option>
            </select><br><br>

            <label for="time">เที่ยวไป:</label>
            <input type="date" id="time" name="depart_date"></input>
                


            <br><input type="submit" value="ค้นหา">
        </form><br>
    </div>

   
    <script> //for จุดขึ้นรถ
        document.getElementById('picklocation').addEventListener('change', function () {
            var pickLocationId = this.value;
            var desLocationSelect = document.getElementById('deslocation');
            console.log(pickLocationId); //ค่า id ที่เป็น 1 หรือ 2 
        
            // รีช่อง จุดขึ้นรถ
            desLocationSelect.innerHTML = '<option value="">กรุณาเลือก</option>';
            
            
            if (pickLocationId === '1') {
                // locationid = 1
                <?php
                $query1 = $pdo->prepare("SELECT * FROM destinations WHERE des_id = 4;");
                $query1->execute();
                while ($row = $query1->fetch()) {
                    echo 'desLocationSelect.innerHTML += \'<option value="' . $row['des_id'] . '">' . $row['des_name'] . '</option>\';';
                }
                ?>
            } else {
                //  locationid != 1
                <?php
                $query2 = $pdo->prepare("SELECT * FROM destinations WHERE des_id IN (1, 2, 3);");
                $query2->execute();
                while ($row = $query2->fetch()) {
                    echo 'desLocationSelect.innerHTML += \'<option value="' . $row['des_id'] . '">' . $row['des_name'] . '</option>\';';
                }
                ?>
            }
        });
    </script>


    <script> //for ถึง
        document.getElementById('picklocation').addEventListener('change', function () {
            var desLocationId = this.value;
            var des1 = document.getElementById('des');
            console.log(desLocationId); //ค่า id ที่เป็น 1 หรือ 2 
        
            // รีช่อง จุดขึ้นรถ
            des1.innerHTML = '<option value="">กรุณาเลือก</option>';
            
            
            if (desLocationId === '1') {
                // locationid= 1
                <?php
                $query1 = $pdo->prepare("SELECT * FROM pickuplocation WHERE location_id = 2;");
                $query1->execute();
                while ($row = $query1->fetch()) {
                    echo 'des1.innerHTML += \'<option value="' . $row['location_id'] . '">' . $row['location_name'] . '</option>\';';
                }
                ?>
            } else {
                //  locationid != 1
                <?php
                $query2 = $pdo->prepare("SELECT * FROM pickuplocation WHERE location_id = 1;");
                $query2->execute();
                while ($row = $query2->fetch()) {
                    echo 'des1.innerHTML += \'<option value="' . $row['location_id'] . '">' . $row['location_name'] . '</option>\';';
                }
                ?>
            }
        });
    </script>

<script> //for ถึง
        document.getElementById('picklocation').addEventListener('change', function () {
            var desLocationId2 = this.value;
            var des2 = document.getElementById('deslocation2');
            console.log(desLocationId2); //ค่า id ที่เป็น 1 หรือ 2 
        
            // รีช่อง จุดขึ้นรถ
            des2.innerHTML = '<option value="">กรุณาเลือก</option>';
            
            
            if (desLocationId2 === '1') {
                // locationid= 1
                <?php
                $query1 = $pdo->prepare("SELECT * FROM destinations WHERE des_id IN (1, 2, 3);");
                $query1->execute();
                while ($row = $query1->fetch()) {
                    echo 'des2.innerHTML += \'<option value="' . $row['des_id'] . '">' . $row['des_name'] . '</option>\';';
                }
                ?>
            } else {
                //  locationid != 1
                <?php
                $query2 = $pdo->prepare("SELECT * FROM destinations WHERE des_id =4;");
                $query2->execute();
                while ($row = $query2->fetch()) {
                    echo 'des2.innerHTML += \'<option value="' . $row['des_id'] . '">' . $row['des_name'] . '</option>\';';
                }
                ?>
            }
        });
    </script>

        



</body>
</html>
