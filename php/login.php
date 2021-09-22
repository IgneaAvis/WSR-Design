<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
require 'config.php';
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = ("SELECT * FROM users WHERE `login` = '$login' AND `pass` = '$pass'");
$rez = $conn->query($sql);
if($rez->num_rows > 0){
    $user = $rez->fetch_assoc();
    setcookie('user', $user['id'], time() + 3600, "../cabinet");
    header("Location: ../cabinet/index.html");
}else{
    echo "Такого пользователя нет!";
}
$conn->close();
?>