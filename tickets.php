<?php
session_start();
include("db2.php");
if (!isset($_SESSION['userid'])) {
    header("location:index.php");
} else {
    $sql = mysqli_query($dbcon, "SELECT * FROM customers WHERE cus_id='" . $_SESSION['userid'] . "'");
    $row = mysqli_fetch_array($sql);


    //echo $row['cus_id'];
    // echo $row['phone'];
    // echo $row['cus_id'];
    // echo $row['fname'];
    // echo $_SESSION['userid'];



?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="tickets.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <nav>
            <a href="index.php" style="color: white;">RayongTransport</a>
            <ul>
                User : <?= $row['fname']; ?>
                <li><a href="index.php">หน้าหลัก</a></li>
                <li><a href="#">ซื้อตั๋ว</a></li>
                <li><a href="logout.php">ออกจากระบบ</a></li>
            </ul>

        </nav><br>




        
        <section><br>
            <b style="color: white; background-color:red;border-radius:10px ;">ค้นหา</b> <br><br>

            <form action="ticket2.php" method="POST">
                <label for="picklocation">จาก:</label>
                <select id="picklocation" name="location_id">
                    <option value="">กรุณาเลือก</option>
                    <?php
                    $sql = mysqli_query($dbcon, "SELECT * FROM pickuplocation");
                    while ($row = mysqli_fetch_array($sql)) {
                        echo '<option value="' . $row['location_id'] . '">' . $row['location_name'] . '</option>';
                    }
                    ?>
                </select>

                <label for="deslocation">จุดขึ้นรถ:</label>
                <select id="deslocation" name="des_id">
                    <option value="">กรุณาเลือก</option>
                </select><br><br>

                <script>
                    document.getElementById('picklocation').addEventListener('change', function() {
                        var pickLocationId = this.value;
                        var desLocationSelect = document.getElementById('deslocation');

                        // รีเซ็ต option
                        desLocationSelect.innerHTML = '<option value="">กรุณาเลือก</option>';

                        if (pickLocationId === '1') {
                            // ถ้า picklocation เท่ากับ 1
                            <?php
                            $sql1 = mysqli_query($dbcon, "SELECT * FROM destinations WHERE des_id = 4");
                            while ($row = mysqli_fetch_array($sql1)) {
                                echo 'desLocationSelect.innerHTML += \'<option value="' . $row['des_id'] . '">' . $row['des_name'] . '</option>\';';
                            }
                            ?>
                        } else { //ถ้าไม่ใช่ 1 
                            <?php
                            $sql1 = mysqli_query($dbcon, "SELECT * FROM destinations WHERE des_id IN(1,2,3)"); //แสดง location ที่เหลือ
                            while ($row = mysqli_fetch_array($sql1)) {
                                echo 'desLocationSelect.innerHTML += \'<option value="' . $row['des_id'] . '">' . $row['des_name'] . '</option>\';';
                            }
                            ?>

                        }

                    });
                </script>





                <label for="des">ถึง:</label>
                <select id="des" name="deslocation_id">
                    <option value="">กรุณาเลือก</option>

                </select>
                <script>
                    document.getElementById('picklocation').addEventListener('change', function() {
                        var pickLocationId = this.value;
                        var desLocationSelect = document.getElementById('des');

                        // รีเซ็ต option
                        desLocationSelect.innerHTML = '<option value="">กรุณาเลือก</option>';

                        if (pickLocationId === '1') {
                            // ถ้า picklocation เท่ากับ 1
                            <?php
                            $sql1 = mysqli_query($dbcon, "SELECT * FROM pickuplocation WHERE location_id = 2");
                            while ($row = mysqli_fetch_array($sql1)) {
                                echo 'desLocationSelect.innerHTML += \'<option value="' . $row['location_id'] . '">' . $row['location_name'] . '</option>\';';
                            }
                            ?>
                        } else { //ถ้าไม่ใช่ 1 
                            <?php
                            $sql1 = mysqli_query($dbcon, "SELECT * FROM pickuplocation WHERE location_id =1");
                            while ($row = mysqli_fetch_array($sql1)) {
                                echo 'desLocationSelect.innerHTML += \'<option value="' . $row['location_id'] . '">' . $row['location_name'] . '</option>\';';
                            }
                            ?>

                        }

                    });
                </script>

                <label for="deslocation2">จุดลงรถ:</label>
                <select id="deslocation2" name="des_id">
                    <option value="">กรุณาเลือก</option>
                </select><br><br>
                <script>
                    document.getElementById('picklocation').addEventListener('change', function() {
                        var pickLocationId = this.value;
                        var desLocationSelect = document.getElementById('deslocation2');

                        // รีเซ็ต option
                        desLocationSelect.innerHTML = '<option value="">กรุณาเลือก</option>';

                        if (pickLocationId === '1') {
                            // ถ้า picklocation เท่ากับ 1
                            <?php
                            $sql1 = mysqli_query($dbcon, "SELECT * FROM destinations WHERE des_id IN(1,2,3)");
                            while ($row = mysqli_fetch_array($sql1)) {
                                echo 'desLocationSelect.innerHTML += \'<option value="' . $row['des_id'] . '">' . $row['des_name'] . '</option>\';';
                            }
                            ?>
                        } else { //ถ้าไม่ใช่ 1 
                            <?php
                            $sql1 = mysqli_query($dbcon, "SELECT * FROM destinations WHERE des_id = 4 ");
                            while ($row = mysqli_fetch_array($sql1)) {
                                echo 'desLocationSelect.innerHTML += \'<option value="' . $row['des_id'] . '">' . $row['des_name'] . '</option>\';';
                            }
                            ?>

                        }

                    });
                </script>

                <label for="time">เที่ยวไป:</label>
                <input type="date" id="time" name="depart_date"></input>



                <br><br><input type="submit" value="ค้นหา">
            </form><br>
        </section>




    </body>

    </html>
<?php } ?>