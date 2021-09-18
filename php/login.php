<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
require 'config.php';
$sql = ("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$rez = mysqli_query($link, $sql);
$user = $rez->fetch_assoc();
setcookie('user', $user['id'], time() + 3600, "/cabinet");
header("Location: /cabinet/index.html");
?>