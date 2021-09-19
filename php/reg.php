<?php
$fio = $_POST['fio'];
$login = $_POST['login'];
$mail = $_POST['e-mail'];
$pass = $_POST['passtwo'];
require 'config.php';
$sql = "INSERT INTO users (fio, login, e-mail, pass) VALUES ('$fio', '$login','$mail','$pass')";
$rez = mysqli_query($link, $sql);
header("Location: /");
?>