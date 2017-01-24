<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__) . DS);
define('CONF_DIR', ROOT . 'Config' . DS);
define('LIB_DIR', ROOT . 'Library' . DS);
define('VIEW_DIR', ROOT . 'View' . DS);
define('FONTS_DIR', ROOT . 'Fonts' . DS);
define('IMAGE_DIR', ROOT . 'Image' . DS);




require_once CONF_DIR.'conf.php';



//require_once '/config.core.php'; // путь от вашего скрипта до файла конфига
//require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
//require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

//$modx = new modX();
//$modx->initialize('web');






function __autoload($classname)
{
    $file = "{$classname}.php";
    if(file_exists(CONF_DIR . $file)){
        require_once CONF_DIR . $file;
    } elseif (file_exists(LIB_DIR . $file)){
        require_once LIB_DIR .$file;
    }  elseif (file_exists(VIEW_DIR . $file)){
        require_once VIEW_DIR . $file;
    }else{
        echo 'error';
    }
}