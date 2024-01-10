<html>

<head>
    <script>
    async function getDataFromAPI() {
        let response = await fetch('data.json'); // แก้ไฟล์ JSON ให้ตรงกับชื่อไฟล์ข้อมูลของคุณ
        let objectData = await response.json();
        let result = document.getElementById('result');

        for (let i = 0; i < objectData.user.length; i++) {
            let user = objectData.user[i];
            let li = document.createElement('li');
            li.innerHTML = "ชื่อ: " + user.name + "<br>username: " + user.username + "<br>password: " + user.password + "<hr>" ;
            
            result.appendChild(li);
        }
    }

    getDataFromAPI(); // เรียกฟังก์ชัน
    </script>
</head>

<body>
    <h1>รายชื่อแอดมิน</h1>
    <ol id="result">

    </ol>
    <a href="adminpage.php" class="back">ย้อนกลับ</a>
</body>

</html>