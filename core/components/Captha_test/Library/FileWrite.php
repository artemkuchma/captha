<?php


class FileWrite
{

    public static function rewrite_file($file_path, $mode, $date)
    {
        $f = fopen($file_path, $mode);
        if($f) {
            fwrite($f, $date);
            fclose($f);
        }else{
            Session::setFlash('Ошибка открытия файла');
        }

    }

     public static function rewrite_solution($solution, $start_time, $equation)
     {
        $data = '<?php' . PHP_EOL . '$data_solution_r = array(' . PHP_EOL .'"solution" => '.$solution. ','. PHP_EOL ;
        $data .= '"equation" => "'.$equation.'",'. PHP_EOL ;
        $data .= '"start_time" => '.$start_time. PHP_EOL. ');';

        self::rewrite_file(dirname(dirname(dirname(dirname(__FILE__)))).'\8E8v4er8st.php', 'w', $data);
    }

    public static function file_delete($file_path){
        
       if(file_exists($file_path)){
           unlink($file_path);
            }
        

    }


}