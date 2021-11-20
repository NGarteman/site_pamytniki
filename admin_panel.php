<?php
if($_POST['password'] != 'надо придумать'){
    echo "Пароль неверный" . "<br>";
    echo "<a href='login.php'>Назад</a>";
        die();
    }else{
        $connect = mysqli_connect('localhost', 'cd91613_graverny', 'lesha200260', 'cd91613_graverny');
        $path = 'img/';
        $imagename = $_FILES["picture"]["name"];
    };

//SQL запрос для удаления фотографий
$query = mysqli_query($connect, "SELECT * FROM `img`"); 
$query_2 = mysqli_query($connect, "SELECT * FROM `img_gotovie`"); 

//Работа с ценами
$prices_file = file_get_contents('prices.txt');
$pr_explode = explode('/', $prices_file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/e8ef7051e6.js" crossorigin="anonymous"></script>
    <title>Панель администратора</title>
</head>
<body>
    <nav class="z-depth-5">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo left" style="margin-top: 30px;">Панель администратора</a>
            <ul id="nav-mobile" class="hide-on-med-and-down">
                            <li class="right"><a href="index.php">Главная</a></li>
            </ul>    
        </div>
    </nav>
    <h3 class="carousel-h1" style="margin-left: 30px;">Загрузка фотографии</h3>
    <hr style="width: 60%; margin-right: 570px;">
    <div class="upload-wrapper">
        <p class="upload"><?php
        if(!empty($_FILES['picture']['name'])){
        if(!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name'])){
            echo 'Ошибка загрузки';
        
        }else{
            echo 'Загрузка удачна';
            if($_POST['img'] == "pamatnik"){
            mysqli_query($connect, "INSERT INTO `img` VALUES (NULL, 'img/$imagename')");
            }else{
            mysqli_query($connect, "INSERT INTO `img_gotovie` VALUES (NULL, 'img/$imagename')");  
            }

        };
    }else{
        echo "";
    }

        ?></p>
    </div>
    <!-- Форма загрузки -->
    <div class="upload-wrapper">
        <form enctype="multipart/form-data" method="post">
        <label>
            <input name="img" type="radio" value="pamatnik"/>
            <span>Памятник</span>
        </label><br>
        <label>
            <input name="img" type="radio" value="gotovoe" />
            <span>Готовое</span>
        </label><br><br>
        <input type="hidden" name="password" value="lGv41231">
        <input name="picture" type="file" style="color:white; font-size: 21px;" /><br><br>
        <input type="hidden" value="333111" name="idd">
        <button type="submit" class="waves-effect waves-light btn-large">Загрузка</button>
        </form>
    </div>
    <!-- Услуги и цены -->
    <div class="all-images">
        <h3 class="carousel-h1" style="margin-left: 30px;">Раздел "Услуги и цены"</h3>
        <hr style="width: 60%; margin-right: 570px;"><br>
        <form method="post" action="file.php" style="margin-left: 30px;">
            <div class="row">
                <div class="col s4 m4">
                    <span style="color: white;">Изготовление портрета: </span><input class="input" name="text_one" type="text" value="<?= $pr_explode[0] ?>">
                        <span style="color: white;">Изготовление оград: </span><input class="input" name="text_two" type="text" value="<?= ltrim($pr_explode[1]) ?>">
                            <span style="color: white;">Гравировка одного знака: </span><input class="input" name="text_three" type="text" value="<?= ltrim($pr_explode[2]) ?>">
                                <span style="color: white;">Изготовление памятников из гранита + стелла: </span><input class="input" name="text_four" type="text" value="<?= ltrim($pr_explode[3]) ?>">
                                    <span style="color: white;">Цветы: </span><input class="input" name="text_five" type="text" value="<?= ltrim($pr_explode[4]) ?>">
                                <span style="color: white;">Установка памятников: </span><input class="input" name="text_six" type="text" value="<?= ltrim($pr_explode[5]) ?>">
                            <span style="color: white;">Установка оград: </span><input class="input" name="text_seven" type="text" value="<?= ltrim($pr_explode[6]) ?>">
                        <span style="color: white;">Укладка плитки : </span><input class="input" name="text_nine" type="text" value="<?= ltrim($pr_explode[7]) ?>">
                    <button type="submit" class="waves-effect waves-light btn-large" style="margin-top: 10px;"> Изменить </button>
                </div>
            </div>
        </form>
    </div>
    <!-- Удаление фотографий -->

    <div class="container">
        <div class="row center">
            <h3 class="carousel-h1" style="margin-left: 30px;">Удаление фотографий памятников</h3>
            <div class="img1"></div>
            <br><br>

            <?php while($row = mysqli_fetch_assoc($query)): ?>
            <div class="col s12 m4 l4">
                        <img style="width: 200px; height: 200px;" src="<?= $row['img']; ?>">
                        <form action="img_delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="hidden" value="333111" name="idd">
                            <input type="hidden" value="pamatnik" name="form">
                            <input type="hidden" value="<?= $row['img'] ?>" name="imgname">
                            <button type="submit" style="margin-bottom: 30px; margin-top: 30px;" class="btn-small">Удалить</button>
                        </form>

            </div>
            <?php endwhile ?>
            </div>

            <div class="row center">
            <h3 class="carousel-h1" style="margin-left: 30px;">Удаление оформленных памятников</h3>
            <div class="img1"></div>
            <br><br>

            <?php while($row = mysqli_fetch_assoc($query_2)): ?>
            <div class="col s12 m4 l4">
                        <img style="width: 200px; height: 200px;" src="<?= $row['img']; ?>">
                        <form action="img_delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="hidden" value="333111" name="idd">
                            <input type="hidden" value="gotovoe" name="form">
                            <input type="hidden" value="<?= $row['img'] ?>" name="imgname">
                            <button type="submit" style="margin-bottom: 30px; margin-top: 30px;" class="btn-small">Удалить</button>
                        </form>

            </div>
            <?php endwhile ?>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>