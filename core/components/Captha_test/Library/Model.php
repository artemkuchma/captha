<?php


class Model
{

    public static function rewrite_file($file_path, $mode, $data)
    {
       
        $f = fopen($file_path, $mode);
        fwrite($f, $data);
        fclose($f);
    }

    public function rewrite_config($key_conf = null, $val_conf = null)
    {
        require "/conf_array.php";
       

        $data = '<?php' . PHP_EOL . '$config = array(' . PHP_EOL;
        foreach ($config as $k => $v) {
            if (!is_array($v['value'])) {
                if ($k != $key_conf) {
                    $data .= '      "' . $k . '" => array('. PHP_EOL;
                    $data .= '           "value" => '.$v['value'].','. PHP_EOL;
                    $data .= '           "text" => "'.$v['text'].'",'.PHP_EOL;
                    $data .= '           "key" => "'.$v['key'].'"'.PHP_EOL;
                    $data .= '             ),'.PHP_EOL;
                } else {
                    $data .= '      "' . $k . '" => array('. PHP_EOL;
                    $data .= '           "value" => '.$val_conf.','. PHP_EOL;
                    $data .= '           "text" => "'.$v['text'].'",'.PHP_EOL;
                    $data .= '           "key" => "'.$v['key'].'"'.PHP_EOL;
                    $data .= '             ),'.PHP_EOL;
                }
            } else {
                $data .= '      "' . $k . '" => array('. PHP_EOL;
                $data .= '            "value" => array(';
                if ($k != $key_conf) {
                    foreach ($v['value'] as $key => $val) {
                        $data .= '"' . $val . '", ';
                    }
                }else{
                    //foreach ($val_conf as $key => $val) {
                      //  $data .= '"' . $val . '", ';
                   // }


                    $data .= $val_conf;
                }
                $data .= '),' . PHP_EOL . '';
                $data .= '            "text" => "'.$v['text'].'",'.PHP_EOL;
                $data .= '           "key" => "'.$v['key'].'"'.PHP_EOL;
                $data .= '),' . PHP_EOL . '';
            }
        }
        $data .= ');';


        self::rewrite_file(dirname(dirname(dirname(dirname(dirname(__FILE__))))).'\conf_array.php', 'w', $data);
    }
    
    public function modxWriteResult($result){

        $sTable = 'modx_captha_resalts';
        $aData = array(
            'data' => $result,
            'date' => time(), //Текущая дата
        );
        $sql = "INSERT
INTO modx_captha_resalts (data, date)
VALUES (:data, :date);";
        $query = new xPDOCriteria($modx, $sql, array(
            ':data' => $aData['data'],
            ':date' => $aData['date'],
        ));
        if ($query->prepare() && $query->stmt->execute()){
            echo 'Данные сохранены';
        }
    }

    public function db_writr_rezults($result, $equation, $level){
        $session = new Session();
        global $modx_data;
        $modx= new modX();
        $myPackage = 'capthapackage';
        $myPrefix = 'modx_custom_';
        $path = MODX_CORE_PATH . 'components/' . $myPackage . '/';
        $modx->addPackage($myPackage, $path . 'model/', $myPrefix);

        $row = $modx->newObject('CaptchaRezalts');
        $row->fromArray(array(
             'result' => $result,
             'date' => time(),
             'equation' => $equation,
             'level' => $level,
             'cost'  => Config::get("cost_level_$level"),
             'user_name' => $modx_data['user_name'];//$session ->get('user_name'),
             'user_id' => $modx_data['user_id'];//$session ->get('user_id'),
              )); 
        $row->save();
    }

    public function db_list_result()
    {
        $session = new Session();
        $modx= new modX();
        $myPackage = 'capthapackage';
        $myPrefix = 'modx_custom_';
        $path = MODX_CORE_PATH . 'components/' . $myPackage . '/';
        $modx->addPackage($myPackage, $path . 'model/', $myPrefix);

        $data = array();

        $result = $modx->query("SELECT  sum(cost) AS total_many, user_id, user_name FROM modx_custom_captcha_rezalts GROUP BY user_id"); //SELECT user_id, user_name sum(cost) AS total_many FROM modx_custom_captcha_rezalts GROUP BY user_id
        
        
            if (!is_object($result)) {
            return $data;
            }
            else {
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
           
            return $data;
            }

        return $data;
    }

     public function db_list_result_details($user_id)
    {
        $session = new Session();
        $modx= new modX();
        $myPackage = 'capthapackage';
        $myPrefix = 'modx_custom_';
        $path = MODX_CORE_PATH . 'components/' . $myPackage . '/';
        $modx->addPackage($myPackage, $path . 'model/', $myPrefix);

        $data = array();

        $result = $modx->query("SELECT * FROM modx_custom_captcha_rezalts WHERE user_id = $user_id"); //SELECT user_id, user_name sum(cost) AS total_many FROM modx_custom_captcha_rezalts GROUP BY user_id
        
        
            if (!is_object($result)) {
            return $data;
            }
            else {
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
           
            return $data;
            }

        return $data;
    }

    public function db_user_delete($user_id) 
    {
        $session = new Session();
        $modx= new modX();
        $myPackage = 'capthapackage';
        $myPrefix = 'modx_custom_';
        $path = MODX_CORE_PATH . 'components/' . $myPackage . '/';
        $modx->addPackage($myPackage, $path . 'model/', $myPrefix);

        $modx->query("DELETE FROM modx_custom_captcha_rezalts WHERE user_id = $user_id");
    }

}