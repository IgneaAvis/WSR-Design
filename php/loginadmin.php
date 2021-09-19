<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
require 'config.php';
$sql = ("SELECT * FROM `admin` WHERE `adlogin` = '$login' AND `adpass` = '$pass'");
$rez = mysqli_query($link, $sql);
$admin = $rez->fetch_assoc();
setcookie('admin', $admin['id'], time() + 3600, "/");
header("Location: /superadmin/index.html");
?>