<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
    if(@$_COOKIE['user'] != ''):
    ?>
<header class="lkheader">
    <div class="container">
        <div class="lkheader_wrap">
            <h2 class="lkheader_title">Личный кабинет</h2>
            <?php
                require '../php/config.php';
                $id = @$_COOKIE['user'];
                $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
                $rez = $conn->query($sql);
                $row = mysqli_fetch_assoc($rez);
                echo "<h2>".$row['fio']."</h2>"
                ?>
            <form action="../php/exit.php">
                <button class="exitbtn">Выход</button>
            </form>
        </div>
    </div>
</header>
<div class="mybids">
    <div class="container">
        <h2>Ваши заявки</h2>
         <!-- php script -->
        <div class="bids_wrapper">
            <div class="bids_item"><img src="../img/1.jpg" alt=""><button class="deleteButton">Удалить</button></div>
            <div class="bids_item"><img src="../img/2.jpg" alt=""><button class="deleteButton">Удалить</button></div>
            <div class="bids_item"><img src="../img/2.jpg" alt=""><button class="deleteButton">Удалить</button></div>
        </div>
    </div>
</div>
<div class="newbid">
    <div class="container">
        <h2>Создать новую заявку</h2>
    <form action="../php/makebid.php" method="POST">
        <input required type="text" name="bidname1" class="bidname" placeholder="Введите название">
        <textarea cols="30" rows="10" placeholder="Введите описание" name="biddecr"></textarea>
        <label class="categ_labl" for="categ">Выберите категорию</label>
        <select id="categ" name="opt">
        <?php
            require '../php/config.php';
            if($conn->connect_error){
                die("Ошибка: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM `categories`";
            $rez = $conn->query($sql);
            while ($row = mysqli_fetch_assoc($rez)) {
                echo "<option>".$row['name']."</option>";
            }  
        ?>
        </select>
        <input type="file" name="image" accept="image/*" class="filein"/>
        <button type="submit" class="newbid_btn">Отправить</button>
    </form>
    </div>
</div>
<?php
    else: echo "<h2 style='color:red; text-align:center; margin-top:24px;'>Вы ввели неверные данные или </h2>"."<h2 style='color:red;text-align:center;'>Нет такого пользователя!</h2>"."<a href='/'><button class='btn' style='display:block; margin: 0 auto; margin-top: 10px; width: 200px; height: 50px; font-size:24px;'>Вернуться</button></a>"
?>
<?php endif;?>
<script src="js/script.js"></script>
</body>
</html>