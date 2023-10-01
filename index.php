<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Rayongtransport</title>
</head>
<body>

        <nav>
            <a href="#">Logo</a>
            <ul id="u">   
                <li><a href="#">หน้าแรก</a></li>
                <li><a href="#">จุดจอดรับส่ง</a></li>
                <li><a href="contact.php">ติดต่อเรา</a></li>
                <li><a href="tickets.php?cus_id=<?= $_GET['cus_id'] ?>">จองตั๋ว</a></li>
            </ul>
        </nav>
<script>
        window.onload =  function add() {
            var id = <?=$_GET['cus_id']?>;
            var u = document.getElementById("u");
            var li = document.createElement("li");
            var a = document.createElement("a");

            a.href = 'register.php'; // กำหนด href สำหรับลิงก์
            a.textContent = 'admin'; // กำหนดข้อความของลิงก์

            li.appendChild(a); // เพิ่มอีลิเมนต์ <a> เข้าไปใน <li>
            
            if (id === 15) {
                u.appendChild(li); // เพิ่ม <li> เข้าไปใน <ul>
            }
        }
        
    </script>
        <div class="container">
            <div class="con-layer">
                <div class="con-pic"></div>
                <div class="con-but">
                    <a href="tickets.php?cus_id=<?= $_GET['cus_id'] ?>"><button>จองตั๋ว คลิ้กเลย</button></a><br>
                    <button><a href="#">จุดจอด คลิ้กเลย</a></button>
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
            <p><br><i class="fa-solid fa-bus fa-4x"></i><br><b><br>MINIBUS</b><br><p><p><br>
            รถมินิบัสปรับอากาศที่ได้มาตราฐานความปลอดภัย 
              คนขับรถที่ผ่านการอบรม มีประสบการณ์ 
              ชำนาญเส้นทางและมีใบอนุญาติขับขี่ มีระบบ GPS ควบคุมความเร็ว 
              จึงมั่นใจได้ว่าผู้โดยสารทุกท่านจะถึงที่หมายอย่างปลอดภัยแน่นอน</p>
            </div>
            

          </div>
        


        
</body>
</html>