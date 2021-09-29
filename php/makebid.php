<!-- <?php
$name = $_POST['bidname1'];
echo $name;
$descr = $_POST['biddecr'];
echo $decr;
$opt = $_POST['opt'];
$img = $_FILES['image']['name'];
echo $img;
$date = time();
require 'config.php';
$sql1 = "SELECT * FROM `categories` WHERE `name` = '$opt'";
$rez = $conn->query($sql1);
$row = mysqli_fetch_assoc($rez);
$optfin = $row['id'];
$sql2 = "SELECT * FROM `categories` WHERE `id` = 1";
$rez1 = $conn->query($sql2);
$row1 = mysqli_fetch_assoc($rez1);
$cat = $row1['id'];
$sql = "INSERT INTO bids (id_category, id_status, name, descr, image, date) VALUES ('$optfin','$cat', '$name', '$decr', '$img', '$date')";
if($conn->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> -->
<!-- php is not valid -->