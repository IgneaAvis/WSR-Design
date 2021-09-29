<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
    if(@$_COOKIE['admin'] != ''):
    ?>
    <header class="lkheader">
        <div class="container">
            <div class="lkheader_wrap">
                <h2 class="lkheader_title">Панель администратора</h2>
                <?php
                require '../php/config.php';
                $id = @$_COOKIE['admin'];
                $sql = "SELECT * FROM `admin` WHERE `id` = '$id'";
                $rez = $conn->query($sql);
                $row = mysqli_fetch_assoc($rez);
                echo "<h2>".$row['adlogin']."</h2>"
                ?>
                <form action="../php/exitadmin.php">
                    <button class="exitbtn">Выход</button>
                </form>
            </div>
        </div>
    </header>
    <div class="allbids">
        <!-- php script -->
        <div class="container">
                <div class="allbids_item">
                    <div class="item_img">
                        <img src="../img/1.jpg" alt="img">
                    </div>
                    <div class="item_text">
                        <div class="item_title">Lorem, ipsum dolor</div>
                        <div class="item_decr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, exercitationem quibusdam veritatis omnis mollitia non facilis necessitatibus ullam, at, inventore laudantium numquam voluptates reiciendis quis debitis natus molestias repellendus ducimus?</div>
                        <div class="item_status">Новая</div>
                        <div class="item_time">12.02.2002/12:02</div>
                    </div>
                    <div class="allbids_item_buttons">
                        <form action="">
                            <button type="submit" class="allbids_item_btn_ch">Сменить статус</button>
                        </form>
                        <form action="">
                            <button type="submit" class="allbids_item_btn_del">Удалить заявку</button>
                        </form>
                    </div>
                </div>
                <div class="allbids_item">
                    <div class="item_img">
                        <img src="../img/1.jpg" alt="img">
                    </div>
                    <div class="item_text">
                        <div class="item_title">Lorem, ipsum dolor</div>
                        <div class="item_decr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, exercitationem quibusdam veritatis omnis mollitia non facilis necessitatibus ullam, at, inventore laudantium numquam voluptates reiciendis quis debitis natus molestias repellendus ducimus?</div>
                        <div class="item_status">Новая</div>
                        <div class="item_time">12.02.2002/12:02</div>
                    </div>
                    <div class="allbids_item_buttons">
                        <form action="">
                            <button type="submit" class="allbids_item_btn_ch">Сменить статус</button>
                        </form>
                        <form action="">
                            <button type="submit" class="allbids_item_btn_del">Удалить заявку</button>
                        </form>
                    </div>
                </div>
                <div class="allbids_item">
                    <div class="item_img">
                        <img src="../img/1.jpg" alt="img">
                    </div>
                    <div class="item_text">
                        <div class="item_title">Lorem, ipsum dolor</div>
                        <div class="item_decr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, exercitationem quibusdam veritatis omnis mollitia non facilis necessitatibus ullam, at, inventore laudantium numquam voluptates reiciendis quis debitis natus molestias repellendus ducimus?</div>
                        <div class="item_status">Новая</div>
                        <div class="item_time">12.02.2002/12:02</div>
                    </div>
                    <div class="allbids_item_buttons">
                        <form action="">
                            <button type="submit" class="allbids_item_btn_ch">Сменить статус</button>
                        </form>
                        <form action="">
                            <button type="submit" class="allbids_item_btn_del">Удалить заявку</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>  
    <?php
    else: echo "<h2 style='color:red; text-align:center; margin-top:24px;'>Вы ввели неверные данные или </h2>"."<h2 style='color:red;text-align:center;'>Нет такого пользователя!</h2>"."<a href='/'><button class='btn' style='display:block; margin: 0 auto; margin-top: 10px; width: 200px; height: 50px; font-size:24px;'>Вернуться</button></a>"
    ?>
<?php endif;?>
</body>
</html>