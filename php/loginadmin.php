<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
require 'config.php';
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = ("SELECT * FROM admin WHERE `adlogin` = '$login' AND `adpass` = '$pass'");
$rez = $conn->query($sql);
if($rez->num_rows > 0){
    $admin = $rez->fetch_assoc();
    setcookie('admin', $admin['id'], time() + 3600, "/");
    header("Location: ../superadmin/admin.php");
}else{
    echo "<h2 style='text-align:center;'>Такого пользователя нет! <br> Или вы ввели неверные данные.</h2>";
}
$conn->close();
?>