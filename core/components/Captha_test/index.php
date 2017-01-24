<?php

// require_once ("C:/OpenServer/domains/cp.ua/core/model/modx/modx.class.php");
      //  $modx = new modX();
        //$currentResource = $modx->resource;
//$currentUser = $modx->user->get('id');





require_once 'init.php';
require_once 'global_conf.php';
//$user_t = $modx->user;
//Debugger::PrintR($modx->resource);
//echo $modx->user->get('username');





//require_once ("C:/OpenServer/domains/cp.ua/model/modx/modx.class.php");
//$captcha = new Captha();
//$captcha->imageCreate("Уравнение");

$request = new Request();
$controller = new Controller();
$session = new Session();
$url_array = explode('?',$request->server('REQUEST_URI') );
$session->set('user_name', $modx->user->get('username'));
$session->set('user_id', $modx->user->get('id'));

//global $test_user; 
//$test_user = $modx->user->get('username');
if ($url_array[0] != '/') {
    if($modx_data['is_member_admin_group'] || $modx_data['is_member_manager_group']){
            switch ($url_array[0]) {
    case("/admin/captcha-admin"):
   
        echo $controller->ListAdminAction();
        break;
    case("/admin/edit-admin"):
   
        echo $controller->EditAdminAction();
        break;
    case("/admin"):
        echo $controller->OptionsAdminAction();
        break;
    case("/admin/users-result-admin"):
        echo $controller->UsersResultAdminAction();
        break;
    case("/admin/user-result-details-admin"):
        echo $controller->UsersResultDetailsAdminAction();
        break;
    case("/admin/user-delete-admin"):
        echo $controller->UserDeleteAdminAction();
        break;
      }
    }else{
       // $controller->redirect('/');
        return;
    }

   
}elseif($url_array[0] == '/'){
    echo $controller->indexAction();
}




/*
// Тип содержимого
header('Content-Type: image/png');

// Создание изображения
$im = imagecreatetruecolor(400, 30);

// Создание цветов
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $white);

// Текст надписи
$text = 'Тест...';
// Замена пути к шрифту на пользовательский
$font = "arial.ttf";

// Тень
imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);

// Текст
imagettftext($im, 20, 0, 10, 20, $black, $font, $text);

imagepng($im);
imagedestroy($im);

*/