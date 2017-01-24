<?php
require_once 'init.php';

//$equationClass = new equation(3);
//$equation = $equationClass->createEquation();

//$solution = $equationClass->parsEquation($equation);


//header("Content-Type:image/png");




/*
function test()
{
    header("Content-Type:image/png");
    $equationClass = new equation(3);
    $equation = $equationClass->createEquation();
    $solution = $equationClass->parsEquation($equation);
   // echo $solution;

$im = imagecreatetruecolor(140, 30);

$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $white);

//$text = 'Тест';
$font = FONTS_DIR."arial.ttf";

    imagettftext($im, 14, 0, 11, 21, $grey, $font, $equation);
imagettftext($im, 14, 0, 10, 20, $black, $font, $equation);
imagepng($im);
imagedestroy($im);

//$color = imagecolorallocate($im, 19, 158, 118);


//imagettftext($im,15,8,10,10,$color,$font,'test');
//imagepng($img_empty);
//ImageDestroy($img_empty);
}
test();

*/


$Captcha = new Captha();
$Captcha->createCaptcha(3);