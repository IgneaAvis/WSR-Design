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
            <h2>Гребенкин Константин Викторович</h2>
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
    <form action="" method="POST">
        <input maxlength="500" required type="text" class="bidname" placeholder="Введите название">
        <textarea maxlength="10000" name="" id="" cols="30" rows="10" placeholder="Введите описание"></textarea>
        <label class="categ_labl" for="categ">Выберите категорию</label>
        <select id="categ">
            <option>3D</option>
            <option>2D</option> 
        </select>
        <input type="file" name="image" accept="image/*" class="filein"/>
        <button type="submit" class="newbid_btn">Отправить</button>
    </form>
    </div>
</div>
<?php
    else: echo "<h2 style='color:red; text-align:center; margin-top:24px;'>Вы ввели неверные данные или </h2>"."<h2 style='color:red;text-align:center;'>Нет такого пользователя!</h2>"."<a href='/'><button class='btn'>Вернуться</button></a>"
?>
<?php endif;?>
<script src="js/script.js"></script>
</body>
</html>