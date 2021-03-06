<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design.pro</title>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
        <nav>
            <div class="header_logo"><a href="#"><img src="logo/FSTOP.svg" alt="logo"></a></div>
            <ul class="header_nav">
                <li class="header_nav_item"><a href="#aboutUs">О нас</a></li>
                <li class="header_nav_item"><a href="#bids">Заявки</a></li>
                <li class="header_nav_item"><a href="#makeBid">Создать заявку</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <div class="abouUs" id="aboutUs">
        <div class="container">
            <h2>О нас</h2>
            <h1>Студия дизайна Design.pro</h1>
            <div class="aboutUs_wrapper">
            <div class="aboutUs_item">
                <div class="aboutUs_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores unde blanditiis quasi accusamus debitis possimus. Delectus pariatur minima possimus! Ab animi sapiente suscipit optio praesentium possimus nesciunt repellendus cupiditate neque. <br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Error blanditiis, repellendus ex quae vel laudantium aperiam, iure fuga explicabo distinctio architecto perferendis consequuntur veniam fugit? Impedit qui provident laboriosam labore!</div>
                <img src="img/main.jpg" alt="">
            </div>
        </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="bids" id="bids">
        <div class="container">
            <h2>Заявки</h2>
            <div class="quantity">
                <?php
                    require 'php/config.php';
                    $sql = "SELECT * FROM `bids` WHERE `id_status` = 2";
                    $rez = mysqli_query($conn, $sql);
                    $number = mysqli_num_rows($rez);
                    echo "Количество заявок в статусе 'Принято в работу': <span id='quantityNumber'>".$number."</span>";
                ?>
            </div>
            <div class="bids_wrapper">
                <!-- add php scripts and js scripts -->
                <?php
                    require 'php/config.php';
                    $sql = "SELECT * FROM `bids` WHERE `id_status` = 3 ORDER BY `id` DESC LIMIT 4";
                    $rez = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($rez)){
                        echo "<div class='bids_item'><img src='bidsimg/".$row['image']."'></div>";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="makeBid" id="makeBid">
        <div class="container">
            <h2>Хотите также?</h2>
            <button class="button">Войти/Зарегистрироваться</button>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer_wrapper">
        <nav>
            <ul class="footer_nav">
                <li class="footer_nav_item"><a href="#aboutUs">О нас</a></li>
                <li class="footer_nav_item"><a href="#bids">Заявки</a></li>
                <li class="footer_nav_item"><a href="#makeBid">Создать заявку</a></li>
            </ul>
        </nav>
        <div class="footer_info">
            <div class="address">
                <h3>Адресс:</h3>
                <div class="address_text">г. Ставрополь <br> ул. Народная 5</div>
            </div>
            <div class="phone">
                <h3>Телефон:</h3>
                <div class="phone_text"><a href="tel:89624436582">8 (962) 443-65-82</a></div>
            </div>
        </div>
        </div>
        </div>
    </footer>
    <div class="overlay">
        <div class="container">
            <div class="modalLogin" id="modalLogin">
                <form action="php/login.php" class="loginForm" method="POST">
                    <input name="login" required type="text" placeholder="Введите ваш логин">
                    <input name="pass" required type="password" placeholder="Введите ваш пароль">
                    <button class="login_submit">Войти</button>
                </form>
                <div class="login_text"><a href="" id="forReg">Регистрация</a></div>
                <div class="close">&times;</div>
            </div>
            <div class="modalReg" id="modalReg">
                <form action="php/reg.php" class="regForm" method="POST">
                    <input class="fio" name="fio" required type="text" placeholder="Введите ваше ФИО" pattern="^[А-Яа-яЁё\s]+$">
                    <input class="login" name="login" required type="text" placeholder="Введите логин" pattern="^[a-zA-Z]+$">
                    <input class="e-mail" name="mail" required type="email" placeholder="Введите ваш E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    <input class="pass" name="pass" required type="password" placeholder="Введите пароль">
                    <input class="passtwo" name="passtwo" required type="password" placeholder="Повторите пароль">
                    <div class="passnot">Пароли не совпадают!</div>
                    <label class="labelAdd" for="add">Согласие на обработку персональных данных</label>
                    <input required class="add" type="checkbox" required name="add">
                    <button class="reg_submit">Зарегистрироваться</button>
                </form>
                <div class="close">&times;</div>
            </div>
        </div>
    </div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>