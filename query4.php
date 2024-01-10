<?php
session_start();
include("db2.php");
if (!isset($_SESSION['userid'])) {
    header("location:login.php");
} else {
?>

    <head>
        <link rel="stylesheet" href="query4.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <script>
            var httpRequest;

            function send() {
                httpRequest = new XMLHttpRequest();
                httpRequest.onreadystatechange = showResult;
                var a = document.getElementById("a").value;
                var b = document.getElementById("b").value;
                var url = "query4.1.php?a=" + a + "&b=" + b;
                httpRequest.open("GET", url);
                httpRequest.send();
            }


            function showResult() {
                if (httpRequest.readyState == 4 && httpRequest.status == 200) {
                    document.getElementById("result").innerHTML = httpRequest.responseText;
                }
            }
        </script>
    </head>

    <body>
        <section>
            <form>
                เดือน <input type="text" id="a"><br>
                &ensp;&ensp;&ensp;ปี <input type="text" id="b" onclick="send()">
                <!-- <span id="result"></span> เอาค่ามาใส่ -->
            </form><a href="adminpage.php"><button>ย้อนกลับ</button></a>
        </section>
        <article>
            <span id="result"></span>
            
        </article>
        
        <?php
    $items_per_page = 10; // จำนวนรายการต่อหน้า
    $page = isset($_GET['page']) ? $_GET['page'] : 1; // หน้าปัจจุบัน

    $sql = mysqli_query($dbcon, "SELECT ticket_id, depart_date, tprice FROM tickets");

    $total_items = mysqli_num_rows($sql);
    //print_r($total_items); //total_item คือ เรียก fuc เพื่อนับ จน. ข้อมูลทั้งหมด
    $total_pages = ceil($total_items / $items_per_page);
    
    $offset = ($page - 1) * $items_per_page;

    $sql = mysqli_query($dbcon, "SELECT ticket_id, depart_date, tprice FROM tickets LIMIT $offset, $items_per_page");

    echo "<table border='1'>รายการตั๋ว";
    echo "<tr><th>Ticket id</th><th>วัน-เดือน-ปี</th><th>รายได้</th></tr>";

    while ($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['ticket_id']."</td><td>".$row['depart_date']."</td><td>".$row['tprice']."</td></tr>";
    }

    echo "</table>";

    // สร้างลิงค์เพื่อเปลี่ยนหน้า
    echo "<div class='pagination'>";
    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a href='?page=$i'>$i</a> ";
    }
    echo "</div>";
?>

    


    </body>


<?php } ?>