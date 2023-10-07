<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['phone']);
session_destroy();
header("location:login.php");

?>