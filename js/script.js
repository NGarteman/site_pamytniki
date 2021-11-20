$(document).ready(function(){
  $('.tabs').tabs();
});
ymaps.ready(init);
function init(){ 
    // Создание карты.    
    var myMap = new ymaps.Map("map", {
        // Координаты центра карты.
        // Порядок по умолчанию: «широта, долгота».
        // Чтобы не определять координаты центра карты вручную,
        // воспользуйтесь инструментом Определение координат.
        center: [56.396513, 38.726605],
        // Уровень масштабирования. Допустимые значения:
        // от 0 (весь мир) до 19.
        zoom: 19
        
    });
   
    var placemark = new ymaps.Placemark([56.396513, 38.726605],{

    });
    myMap.geoObjects.add(placemark);
}
$(document).ready(function(){
  $('.materialboxed').materialbox();
});
$(document).ready(function(){
    $('.parallax').parallax();
});
$(document).ready(function(){
  $('.carousel').carousel();
});
setInterval(function(){
  $('.carousel').carousel('next');
}, 2500);
$(document).ready(function(){
  $('.modal').modal();
});
$(document).ready(function(){
  $('.tooltipped').tooltip();
});

     