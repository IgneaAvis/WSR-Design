<?php
$fio = $_POST['fio'];
$login = $_POST['login'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
include 'config.php';
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "INSERT INTO users (fio, login, mail, pass) VALUES ('$fio', '$login','$mail','$pass')";
if($conn->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>