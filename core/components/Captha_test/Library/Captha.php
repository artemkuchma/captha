<?php


class Captha
{





    public function imageCreate($equation, $color = null)
    {


        $im = imagecreatetruecolor(140, 30);

        $white = imagecolorallocate($im, 255, 255, 255);
        $grey = imagecolorallocate($im, 128, 128, 128);
        $black = imagecolorallocate($im, 0, 0, 0);
        $rand_color = imagecolorallocate($im, 243, rand(1, 254), rand(1, 254));
        switch ($color) {
            case 1:
                $col = $rand_color;
                break;
            case 2:
                $col = $black;
                break;
            default:
                $col = $white;

        }
        imagefilledrectangle($im, 0, 0, 399, 29, $col);

//$text = 'Тест';
        $font = FONTS_DIR . "arial.ttf";

        imagettftext($im, 14, 0, 11, 21, $grey, $font, $equation);
        imagettftext($im, 14, 0, 10, 20, $black, $font, $equation);
        imagepng($im);
        imagedestroy($im);
    }

    public function createCaptcha($level)
    {
        header("Content-Type:image/png");
        $equationClass = new equation($level);
        $equation = $equationClass->createEquation();
        $eq = $equation;
        $solution = $equationClass->parsEquation($equation);


 


        $session = new Session();
        $session->start();

       
      

     //   $session->set('captcha', $solution);
    //    $session->set('time_session_start', time());
       // $session->destroy();

//$t = $arrayName = array('img' => $this->imageCreate($equation, 1), 's' => $solution );

        $this->imageCreate($equation, 1);
      FileWrite::rewrite_solution($solution, time(), $eq);  

//return $t;

        

    }

}