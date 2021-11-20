<?php
    $connect = mysqli_connect('localhost', 'cd91613_graverny', 'lesha200260', 'cd91613_graverny');
    $query = mysqli_query($connect, 'SELECT * FROM `img_gotovie`');
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
    <title>Галерея</title>
</head>
<body>
    <nav class="z-depth-5">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo center"><img src="img/logo.png" alt=""></a>
                  <ul id="nav-mobile" class="left hide-on-med-and-down">
                          <li><span class="text"><i class="fas fa-map-marker-alt fa-xs" style="margin-right: 10px;"></i> <span></span> г. Александров, ул.Толстовская дом 15 </span></li>
                  </ul>    
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                          <li><a href="tel:+78142332211" class="text"><i class="fas fa-phone-alt fa-xs" style="margin-right: 10px;"></i> <span></span> +7 (49244)2-37-84</a></li>
                  </ul>   
        </div>
      </nav>
      <div class="back-btn-g"  style="margin-top: 50px; margin-left: 30px; position: absolute;"><a href="index.php" class="tooltipped" data-position="bottom" data-tooltip="Вернуться на главную"><i style="color: #ecf0f1!important;" class="fas fa-arrow-left fa-3x"></i></a></div>
      <h1 class="carousel-h1 center-align">Оформленные работы</h1>
      <div class="img1"></div>

      <div class="row center-align" style="margin-top: 60px;">
        <?php  while($row = mysqli_fetch_assoc($query)): ?>
          <div class="col s12 m6 l4">
            <img class='img_gallery hoverable z-depth-5' src="<?php
                    echo $row['img'];    
            ?>">
          </div>
        <?php endwhile ?>
      </div>

      <footer class="page-footer">
              <div class="container">
                  <div class="center container">
                      <a href="#" class="center"><img src="img/logo.png" alt=""></a>
                  </div>
              </div>
      </footer>
<script src="https://api-maps.yandex.ru/2.1/?apikey=<9f879d00-0c58-42f7-87cd-7499c7298690>&lang=ru_RU" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>