<?php include "db.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="seat.css">
    <title>Document</title>
    <script>
    function myFunction(event) {
        var btn = document.getElementById('btn');
        var btn1 = document.getElementById('btn1');
        var btn2 = document.getElementById('btn2');
        var btn3 = document.getElementById('btn3');
        var btn4 = document.getElementById('btn4');
        var btn5 = document.getElementById('btn5');
        var btn6 = document.getElementById('btn6');
        var btn7 = document.getElementById('btn7');
        var btn8 = document.getElementById('btn8');
        var btn9 = document.getElementById('btn9');
        var btn10 = document.getElementById('btn10');
        var btn11 = document.getElementById('btn11');
        var btn12 = document.getElementById('btn12');
        var btn13 = document.getElementById('btn13');
        var btn14 = document.getElementById('btn14');
        var btn15 = document.getElementById('btn15');
        var btn16 = document.getElementById('btn16');
        var btn17 = document.getElementById('btn17');
        var btn18 = document.getElementById('btn18');
        var btn19 = document.getElementById('btn19');

        btn.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn1.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn2.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn3.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn4.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn5.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn6.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn7.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn8.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn9.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn10.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn11.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn12.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn13.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn14.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn15.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn16.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn17.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn18.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
        btn19.addEventListener('click', function onClick(event) {
            let backgroundColor = event.target.style.backgroundColor;

            if (backgroundColor === 'white') {
                event.target.style.backgroundColor = 'green';
            } else {
                event.target.style.backgroundColor = 'white';
            }
        });
    }
    </script>
</head>

<body>
    <nav>
        <a href="#" style="color: white;">RayongTransport</a>
        <ul>
        <li><a href="index.php?cus_id=<?= $_SESSION['cus_id'] ?>">หน้าหลัก</a></li>
            <li><a href="#">ซื้อตั๋ว</a></li>
            <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
    </nav><br><br><br>




    <section>
        <div class="container">
            <div class="container-name">
                <br>
                <p>เที่ยวไป</p><br>
                <hr />
                <div style="background-color: bisque;">
                    <p style="padding-top: 5px;"><?= $_GET['username'] ?></p><br><br>
                    <hr />
                </div>
            </div>
            <div class="container-role">
                <div>
                    <p>ที่นั่งว่าง</p>
                    <div class="role" style="background-color: white;"></div>
                </div>
                <div>
                    <p>ที่นั่งไม่ว่าง</p>
                    <div class="role" style="background-color: grey;"></div>
                </div>
                <div>
                    <p>ที่นั่งที่เลือก</p>
                    <div class="role" style="background-color: green;"></div>
                </div>
            </div>
            <div class="container-seat">
                <div class="grid">
                    <table style="width: 80px;">
                        <tr>
                            <td id="btn" onclick="myFunction(event)">1A</td>
                        </tr>
                        <tr>
                            <td><img src="img/download.png"></td>
                        </tr>
                        <tr>
                            <td id="btn1" onclick="myFunction(event)">4A</td>
                        </tr>
                        <tr>
                            <td id="btn2" onclick="myFunction(event)">5A</td>
                        </tr>
                        <tr>
                            <td id="btn3" onclick="myFunction(event)">6A</td>
                        </tr>
                        <tr>
                            <td id="btn4" onclick="myFunction(event)">7A</td>
                        </tr>
                        <tr>
                            <td id="btn5" onclick="myFunction(event)">8A</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td colspan="2">driver</td>
                        </tr>
                        <tr>
                            <td id="btn6" onclick="myFunction()">2C</td>
                            <td id="btn7" onclick="myFunction()">2D</td>
                        </tr>
                        <tr>
                            <td id="btn8" onclick="myFunction()">3C</td>
                            <td id="btn9" onclick="myFunction()">3D</td>
                        </tr>
                        <tr>
                            <td id="btn10" onclick="myFunction()">4C</td>
                            <td id="btn11" onclick="myFunction()">4D</td>
                        </tr>
                        <tr>
                            <td id="btn12" onclick="myFunction()">5C</td>
                            <td id="btn13" onclick="myFunction()">5D</td>
                        </tr>
                        <tr>
                            <td id="btn14" onclick="myFunction()">6C</td>
                            <td id="btn15" onclick="myFunction()">6D</td>
                        </tr>
                        <tr>
                            <td id="btn16" onclick="myFunction()">7C</td>
                            <td id="btn17" onclick="myFunction()">7D</td>
                        </tr>
                        <tr>
                            <td id="btn18" onclick="myFunction()">8C</td>
                            <td id="btn19" onclick="myFunction()">8D</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="payment">
            <br>
            <h5>&nbsp;&nbsp;&nbsp;payment</h5><br>
            <hr />
            <div style="padding-left: 15px;padding-right: 15px;">
                <p>เที่ยวไป</p>
                <img src="img/tool.png" class="img_tool">
                <p>หมอชิต-ปั๊มเเก๊สPT-กม.10-บ้านฉาง-มาบตาพุด-ระยอง</p><br>
                <p>วันจันทร์ที่ 2 ตุลาคม ค.ศ. 2023</p><br>
                <p>04:00 สถานีเดินรถโดยสารขนาดเล็ก จตุจักร</p><br>
                <p>06:20 จุดจอดศาลาเเยกโป่ง</p>
                <p>Economy class(มินิบัส)</p><br>
                <p><button>เลื่อนตั๋ว</button>&nbsp;&nbsp;&nbsp;<button>คืนตั๋ว</button></p><br>
            </div>
            <br>
            <h5 style="background-color: lightgray;height:47px;border-radius: 0px 0px 15px 15px;
                            padding-top:18px;display:grid;grid-template-columns:  auto auto auto;">
                <p style="grid-column: 1;text-align: left;padding-left: 15px;">payment</p>
                <p style="grid-column: 3;text-align: right;padding-right: 15px;">฿180.00</p>
            </h5><br>
        </div>
    </section>
</body>

</html>