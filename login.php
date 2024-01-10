<?php 

session_start();
include ("db2.php"); 

if (isset($_POST['submit'])){  //เมื่อกด submit จะทำอะไร
    $user_phone =$_POST['phone'];
    $user_password =$_POST['password'];


    $sql = mysqli_query($dbcon,"SELECT * FROM customers where phone='$user_phone' AND pass='$user_password'");

    $row = mysqli_fetch_array($sql);

    if($row){
        $_SESSION['userid'] = $row['cus_id'];
        if(!empty($_POST['remember'])){    //เมื่อกด Remember Me
            setcookie('user_phone',$_POST['phone'],time() + 3600 * 24);
            setcookie('user_password',$_POST['password'],time() + 3600 * 24);
        }else{   //ไม่ได้เลือก Remember Me
            if(isset($_COOKIE['user_phone'])){  
                setcookie('user_phone','');
                if(isset($_COOKIE['user_password'])){
                    setcookie('user_password','');
                }
            }
        }
        header('location: index.php');
    }else{
        $msg = "Invalid Login" ;
    }

}
?>
<?php
// include 'db2.php';
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $phone = $_POST["phone"];
//         $pass = $_POST["password"];

//         $stmt = $pdo->prepare("SELECT * FROM customers where phone=? AND pass=?");
//             $stmt->bindParam(1, $phone);
//             $stmt->bindParam(2, $pass);
//             $stmt->execute(); // เริ่มค้นหา

//         while($row = $stmt->fetch()){
//             if($row){
//                     // ข้อมูลการเข้าสู่ระบบถูกต้อง กําหนดให้เปลี่ยนเส้นทางไปที่ tickets.php พร้อมพามี cus_id เป็นพารามิเตอร์ใน URL
//                 $cus_id = $row['cus_id'];
//                 $_SESSION['cus_id'] = $row['cus_id'];

//                     header("Location: index.php?cus_id=" . $cus_id);
//             }
//         }
               
//     }   
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="log">
        <form method="POST">

            เบอร์โทรศัพท์<input type="text"
                value="<?php if (isset($_COOKIE['user_phone'])){ echo $_COOKIE['user_phone'];}//ถ้ามี cookie ให้แสดงค่า cookie?>"
                name="phone"></input>
            รหัส<input type="password" name="password"
                value="<?php if (isset($_COOKIE['user_password'])){ echo $_COOKIE['user_password'];} //แสดงค่า cookie?>"></input>
            <input type="checkbox" <?php if(isset($_COOKIE['user_phone'])){ ?> checked <?php } //แสดงค่า cookie?>
                name="remember" id="remember">
            <label for="remember">Remember Me</label><br>
            <?php if (isset($msg)) { ?>

            <?php echo $msg ?>

            <?php } ?>
            <input type="submit" name="submit" value="login">
        </form>

        <a href="register.php"><input type="submit" value="register"></a>
    </div>


</body>

</html>