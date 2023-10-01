<?php include "db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        fname :<input type="text" name="fname" id="fname"><br>
        lname :<input type="text" name="lname" id="lname"><br>
        pass :<input type="text" name="pass"><br>
        email :<input type="text" name="email"><br>
        phone :<input type="text" name="phone"><br>
        <input type='submit' value='สมัครสมาชิก'>
    </form>



    
    <?php
            

            // ตรวจสอบการส่งข้อมูลแบบ POST
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                // รับข้อมูลจากแบบฟอร์ม
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $pass = $_POST["pass"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];

                // เขียนคำสั่ง SQL เพื่อเพิ่มข้อมูลผู้ใช้
                $stmt = $pdo->prepare("SELECT * FROM customers where fname=? AND lname=? AND pass=? AND email=? AND phone=?");
                $stmt->bindParam(1, $fname);
                $stmt->bindParam(2, $lname);
                $stmt->bindParam(3, $pass);
                $stmt->bindParam(4, $email);
                $stmt->bindParam(5, $phone);
                $stmt->execute(); // เริ่มค้นหา
                
                
                    if($row = $stmt->fetch()){
                        // ข้อมูลซ้ำจะอยู่หน้าเดิม
                        echo "<script>alert('ข้อมูลซ้ำ')</script>";
                        // confirm("ข้อมูลซ้ำ");
                        // header("Location: register.php");
                    }else{
                        header("Location: insertuser.php?fname=".$fname."&lname=".$lname."&pass=".$pass."&email=".$email."&phone=".$phone);
                        
                    }
                

            }
            ?>
        


    <!-- <script>
    <?php
            

            // // ตรวจสอบการส่งข้อมูลแบบ POST
            // if ($_SERVER["REQUEST_METHOD"] === "POST") {
            //     // รับข้อมูลจากแบบฟอร์ม
            //     $fname = $_POST["fname"];
            //     $lname = $_POST["lname"];
            //     $pass = $_POST["pass"];
            //     $email = $_POST["email"];
            //     $phone = $_POST["phone"];

            //     // เขียนคำสั่ง SQL เพื่อเพิ่มข้อมูลผู้ใช้
            //     $stmt = $pdo->prepare("SELECT * FROM customers ");
            //     $stmt->execute(); // เริ่มค้นหา
                
            //     while($row = $stmt->fetch()){
            //         if($fname == $row['fname']&&
            //             $lname == $row['lname']&&
            //             $pass == $row['pass']&&
            //             $email == $row['email']&&
            //             $phone == $row['phone']){
            //             // echo "<input type='submit' value='สมัครสมาชิก'>";
            //             // echo "ชื่อสมาชิก: ".$row["fname"]."<br>";
            //             // header("Location: register.php");
            //             // alert("ข้อมูลซ้ำ");
                        
            //             var ans = confirm("ข้อมูลซ้ำ"); // แสดงกล่องถามผู้ใช ้
            //             if (ans == true) // ถ้าผู้ใชกด ้ OK จะเข ้าเงื่อนไขนี้
            //                 document.location = "register.php"; // สงรหัสส ่ นค ้าไปให ้ไฟล์ ิ delete.php
            //             // echo "<a href='#' onclick='confirmDelete(" . $row ["pid"] . ")'>ลบ</a>";
            //         }else{
            //             header("Location: insertuser.php?fname=".$fname."&lname=".$lname."&pass=".$pass."&email=".$email."&phone=".$phone);
            //         }
                    
                    
            //     }

            // }
            ?>
    </scrip> -->
</body>

</html>