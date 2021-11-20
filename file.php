<?php
$prices_file = file_get_contents('prices.txt');
extract($_POST);
$text_one .= " / "; 
$text_two .= " / ";
$text_three .= " / ";
$text_four .= " / ";
$text_five .= " / ";
$text_six .= " / ";
$text_seven .= " / ";
$text_nine .= " / ";
/*echo $text_one;
echo $text_two;
echo $text_three;
echo $text_four;
echo $text_five;
echo $text_six;
echo $text_seven;
echo $text_nine;*/
//$prices_explode = explode('/',$prices);
file_put_contents('prices.txt', [$text_one, $text_two, $text_three, $text_four, $text_five, $text_six, $text_seven, $text_nine]);
header('Location: https://гравировка33.рф/index.php');