<?php
$name = $_POST["newBidName"];
$descr = $_POST["newBidDescr"];
$opt = $_POST['opt'];
$file = $_FILES['myFile'];
$path =  '../bidsimg/';
$fileExt = end(explode('.', $file['name']));
$fileName = uniqid('image_') . "." . $fileExt;
$date = date('Y-m-d H:i:s',time());
$id = @$_COOKIE['user'];
require 'config.php';
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sqlForCat = "SELECT * FROM `categories` WHERE `name` = '$opt'";
$rez = $conn->query($sqlForCat);
$row = mysqli_fetch_assoc($rez);
$optfin = $row['id'];
$sqlForStatus = "SELECT * FROM `statuses` WHERE `id` = 1";
$rez1 = $conn->query($sqlForStatus);
$row1 = mysqli_fetch_assoc($rez1);
$cat = $row1['id'];
$sql = "INSERT INTO bids (id_users, id_category, id_status, name, descr, image, date) VALUES ('$id','$optfin','$cat', '$name', '$descr', '$fileName', '$date')";
if($conn->query($sql)){
    move_uploaded_file($file['tmp_name'], $path.$fileName);
    header("Location: /cabinet/");
}
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>