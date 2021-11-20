<?php
        $prices_file = file_get_contents('prices.txt');
        $prices_explode = explode('/',$prices_file);

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
    <title>Граверная мастерская</title>
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
      <div class="parallax-container">
            <div class="text-parallax center">
                <h1>Оформление памятников вручную</h1>
            </div>
            <div class="parallax"><img src="img/3.jpg"></div>
      </div>

      <div class="content">
              <p class="text-content">Граверная мастерская, находящаяся на ул. Толстовская дом 15 в городе Александров, работает уже более двадцати пяти лет и занимается изготовлением памятников, плит из гранита, оград, цветников. Компания применяет только высококачественный карельский гранит (габбро-диабаз). Китайские и индийские камни в работе не применяются, оттого и долговечность всех изделий.Руководители компании с гордостью заявляют, что все работы производятся непосредственно в мастерской и цены, что немаловажно, конкуретноспособны. Более того специалисты компании могут изготовить любое художественное изображение
                </p>
              <img class="img_content" src="img/1 (31).jpg" alt="">
      </div>
      <div class="wrapper-card">
      <div class="center price-wrapper">
                <h1 class="price-h1">Услуги и цены</h1>
                <div class="img1"></div>

      </div>
      <div class="row first-card">
                <div class="col s12 m6 l3">
                  <div class="card grey darken-4 z-depth-5">
                    <div class="card-content white-text">
                      <span class="card-title">Изготовление портрета</span>
                      <p><?= $prices_explode[0] ?></p>
                    </div>
                  </div>
                </div>

                <div class="col s12 m6 l3">
                  <div class="card grey darken-4 z-depth-5">
                    <div class="card-content white-text">
                      <span class="card-title">Изготовление оград</span>
                      <p><?= $prices_explode[1] ?></p>
                    </div>
                  </div>
                </div>

                <div class="col s12 m6 l3">
                  <div class="card grey darken-4 z-depth-5">
                    <div class="card-content white-text">
                      <span class="card-title">Гравировка одного знака</span>
                      <p><?= $prices_explode[2] ?></p>
                    </div>
                  </div>
                </div>

                <div class="col s12 m6 l3">
                  <div class="card grey darken-4 z-depth-5">
                    <div class="card-content white-text">
                      <span class="card-title">Изготовление памятников из гранита + стелла </span>
                      <p><?= $prices_explode[3] ?></p>
                    </div>
                  </div>
                </div>               
              </div>
              
              <div class="row">
                <div class="col s12 m6 l3">
                        <div class="card grey darken-4 z-depth-5">
                        <div class="card-content white-text">
                        <span class="card-title">Цветы</span>
                        <p><?= $prices_explode[4] ?></p>
                        </div>
                        </div>
                </div>

                <div class="col s12 m6 l3">
                        <div class="card grey darken-4 z-depth-5">
                        <div class="card-content white-text">
                        <span class="card-title">Установка памятников</span>
                        <p><?= $prices_explode[5] ?></p>
                        </div>
                        </div>
                </div>

                <div class="col s12 m6 l3">
                        <div class="card grey darken-4 z-depth-5">
                        <div class="card-content white-text">
                        <span class="card-title">Установка оград</span>
                        <p><?= $prices_explode[6] ?></p>
                        </div>
                        </div>
                </div>

                <div class="col s12 m6 l3">
                        <div class="card grey darken-4 z-depth-5">
                        <div class="card-content white-text">
                        <span class="card-title">Укладка плитки </span>
                        <p><?= $prices_explode[7] ?></p>
                        </div>
                        </div>
                </div>               
                </div>
        </div>
        
        <!-- Слайдер -->

        <div class="carousel">

                <div class="carousel-my">
                        <h1 class="carousel-h1 center">Фотографии</h1>
                        <div class="img1"></div>
                
                </div>


                <a class="carousel-item" href="#"><img class="img_carousel" src="img/cimg1261.jpg"></a>
                <a class="carousel-item" href="#"><img class="img_carousel" src="img/cimg1032.jpg"></a>
                <a class="carousel-item" href="#"><img class="img_carousel" src="img/cimg1259.jpg"></a>
                <a class="carousel-item" href="#"><img class="img_carousel" src="img/sam_0304.jpg"></a>
                <a class="carousel-item" href="#"><img class="img_carousel" src="img/p1010031.jpg"></a>

        </div>

        <div class="center button-carousel"><a href="#modal1" class="waves-effect waves-light btn-large modal-trigger">Перейти в галерею</a></div>


        <div id="modal1" class="modal">
                <div class="modal-content">
                        <h4>Галерея</h4>
                        <div class="img1"></div>
                                <div class="button1" style="margin-left: 100px; margin-top: 40px;">
                                        <a class="left waves-effect waves-light btn-large" href="gallery_gotovie.php">Оформленные памятники</a>
                                </div>
                                <div class="button2" style="margin-right: 160px; margin-top: 41px">
                                        <a class="waves-effect waves-light btn-large right" href="gallery.php">Памятники</a>
                                </div>
                </div>
        </div>

        <div class="wrapper-contacts">
                <div class="center price-wrapper">
                        <h1 class="price-h1">Контакты</h1>
                        <div class="img1"></div>
                </div>

                <div class="row center" style="margin-top: 40px;">
                        <div class="col s12 m6">
                               <ul class="contacts">
                                       <li><b>Телефон:</b><span class="color-text"> +7 (49244)2-37-84 <br> +7(904) 859-24-77</span></li>
                                       <li><b>Адрес:</b><span class="color-text"> г. Александров, ул. Толстовская дом 15</span></li>
                                       <li><b>Режим работы:</b> <span class="color-text">Будни: с 9:00 до 16:00 <br> Суббота: с 9:00 до 14:00<br> Воскресенье: выходной</span></li>                              
                               </ul>
                        </div>
                        <div class="col s12 m6" style="margin-top: 30px;"> 
                                <div class="z-depth-5" id="map" style="width: 550px; height: 400px; border: 1px solid black;"></div>
                        </div>
                </div>
        </div>
        
        <footer class="page-footer">
                          <div class="container">
                                  <div class="center container">
                                        <a href="#" class="center"><img src="img/logo.png" alt=""></a>
                                  </div>
                          </div>
        </footer>
                          
        
        <!-- Конец слайдера -->        
<script src="https://api-maps.yandex.ru/2.1/?apikey=<9f879d00-0c58-42f7-87cd-7499c7298690>&lang=ru_RU" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>