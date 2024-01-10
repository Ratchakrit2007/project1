<?php
session_start();
include("db2.php");
if (!isset($_SESSION['userid'])) {
    header("location:login.php");
} else {
    $sql = mysqli_query($dbcon, "SELECT * FROM customers WHERE cus_id='" . $_SESSION['userid'] . "'");
    $row = mysqli_fetch_array($sql);
    //echo $row['cus_id'];
    //echo $row['phone'];
    //echo $row['cus_id'];
    //echo $row['fname'];
    //echo $_SESSION['userid'];



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="firstpage.css">
    <title>Rayongtransport</title>

    <script>
    function delete1() {
        var ans = confirm("ต้องการลบ ");
        if (ans == true)
            document.location = "delete.php";
    }
    </script>

</head>

<body>

    <nav>
        <a href="index.php" style="color: white;">RayongTransport</a>

        <ul id="u">
            User : <?= $row['fname']; ?>
            <li class="li1"><a href="index.php">หน้าแรก</a></li>
            <li><a href="bus_stop.php">จุดจอดรับส่ง</a></li>
            <li><a href="history.php">ประวัติการจอง</a></li>
            <!--<li><a href="contact.php">ติดต่อเรา</a></li> -->
            <li><a href="tickets.php">จองตั๋ว</a></li>
            <li class="li1"><a href='#' onclick='delete1()'>ลบบัญชี</a></li>
            <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
    </nav><br>

    <!-- <script>
            window.onload = function add() {
                var id = <?= $row['cus_id'] ?>;
                var u = document.getElementById("u");
                var li = document.createElement("li");
                var a = document.createElement("a");

                a.href = 'adminpage.php'; // กำหนด href สำหรับลิงก์
                a.textContent = 'admin'; // กำหนดข้อความของลิงก์

                li.appendChild(a); // เพิ่มอีลิเมนต์ <a> เข้าไปใน <li>

                if (id === 15) {
                    u.appendChild(li); // เพิ่ม <li> เข้าไปใน <ul>
                }
            }
        </script> -->
    <script>
    window.onload = async function getDataFromAPI() {
        var id = <?= $row['cus_id'] ?>;
        let response = await fetch('data.json'); // แก้ไฟล์ JSON ให้ตรงกับชื่อไฟล์ข้อมูลของคุณ
        let objectData = await response.json();
        var u = document.getElementById("u");
        var li = document.createElement("li");
        var a = document.createElement("a");
        a.href = 'adminpage.php'; // กำหนด href สำหรับลิงก์
        a.textContent = 'admin'; // กำหนดข้อความของลิงก์
        li.appendChild(a); // เพิ่มอีลิเมนต์ <a> เข้าไปใน <li>
            if (id === 15 ) {
                u.appendChild(li); // เพิ่ม <li> เข้าไปใน <ul>
                for(let i = 0; i < objectData.user.length; i++){
                    let user = objectData.user[0];
                    alert('Admin name : '+user.name + "\nage : "+user.age+ "\naddress : "+user.address);exit;
                }
                
            }if(id === 78 ) {
                u.appendChild(li); // เพิ่ม <li> เข้าไปใน <ul>
                for(let i = 0; i < objectData.user.length; i++){
                    let user = objectData.user[1];
                    alert('Admin name : '+user.name+ "\nage : "+user.age+ "\naddress : "+user.address);exit;
                }
                
            }if(id === 79 ) {
                u.appendChild(li); // เพิ่ม <li> เข้าไปใน <ul>
                for(let i = 0; i < objectData.user.length; i++){
                    let user = objectData.user[2];
                    alert('Admin name : '+user.name+ "\nage : "+user.age+ "\naddress : "+user.address);exit;
                }
            }
        }
    </script>

    <div class="container">
        <div class="con-layer">
            <div class="con-pic"></div>
            <div class="con-but">
                <a href="tickets.php"><button>จองตั๋ว คลิ้กเลย</button></a><br>
                <a href="bus_stop.php"><button>จุดจอด คลิ้กเลย</button></a>
            </div>
        </div>
    </div>

    <div class='content'>
        <div class='c1'>
            <p><br><i class="fa-solid fa-car fa-4x"></i><br><b><br>TOUR & TRAVEL</b><br><br>
                มีรถบัสปรับอากาศชั้นเยี่ยมให้เช่าบริการแบบเหมารายวันเพื่อเติมเต็มความต้องการของลูกค้า
                จะใช้เป็นรถเพื่อนำเที่ยวหรือจะพาพนักงานไปทำกิจกรรมต่างๆ นอกสถานที่
                มั่นใจปลอดภัยสะดวกสบายแน่นอน</p>
        </div>
        <div class='c1'>
            <p><br><i class="fa-solid fa-bus fa-4x"></i><br><b><br>MINIBUS</b><br>
            <p>
            <p><br>
                รถมินิบัสปรับอากาศที่ได้มาตราฐานความปลอดภัย
                คนขับรถที่ผ่านการอบรม มีประสบการณ์
                ชำนาญเส้นทางและมีใบอนุญาติขับขี่ มีระบบ GPS ควบคุมความเร็ว
                จึงมั่นใจได้ว่าผู้โดยสารทุกท่านจะถึงที่หมายอย่างปลอดภัยแน่นอน</p>
        </div>
    </div>
</body>

</html>

<?php } ?>