<?php


class equation
{

    public $level;
    public $number_limit;
    public $operators;
    public $number_elements;

    public function __construct($level)
    {
        $this->level = $level;
        $this->number_limit = Config::get("number_limit_level_$level");
        $this->operators = Config::get("operators_level_$level");
        $this->number_elements = Config::get("number_elements_level_$level");
    }

    public function createEquation()
    {
        $number_first = rand(1, $this->number_limit);
        $segment_array = array();
        $number_operators = count($this->operators);
        for ($i = 1; $i <= $this->number_elements; $i++) {
            $operator = $this->operators[rand(0, ($number_operators - 1))];
            $number = rand(1, $this->number_limit);
            $segment_array[] = $operator . $number;
            $arr[] = array(
                'operator' => $operator,
                'number' => is_numeric($number)
            );
        }
        $equation = $number_first;
        foreach ($segment_array as $v) {
            $equation .= $v;
        }
        return $equation;
    }

    private function solution1($equation)
    {
        $pattern = "/[0-9\.]*\/[0-9\.]*/";
        if (preg_match($pattern, $equation, $matches)) {
            $matches_array = explode('/', $matches[0]);
            $rez = (int)$matches_array[0] / (int)$matches_array[1];
            $rez_format = round($rez);
             //  echo $rez.PHP_EOL;
           //   echo$matches[0].'  ';
            // Debugger::VarDamp($matches[0]);
            //  Debugger::VarDamp($equation);
            $eq = str_replace($matches[0], $rez_format, $equation);
            //  echo $eq.' ';


            return $this->solution1($eq);

        } else {

            return $equation;
        }

    }

    private function solution2($equation)
    {
        $pattern = "/[0-9\.]*\*[0-9\.]*/";
        if (preg_match($pattern, $equation, $matches)) {
            $matches_array = explode('*', $matches[0]);
            $rez = (int)$matches_array[0] * (int)$matches_array[1];
            //  echo $rez.PHP_EOL;
            //   echo$matches[0].'  ';
            // Debugger::VarDamp($matches[0]);
            //  Debugger::VarDamp($equation);
            $eq = str_replace($matches[0], $rez, $equation);
            //  echo $eq.' ';

            return $this->solution2($eq);

        } else {

            return $equation;
        }

    }

    private function solution3($equation)
    {
        $pattern = "/[0-9\.]*\+[0-9\.]*/";
        if (preg_match($pattern, $equation, $matches)) {
            $matches_array = explode('+', $matches[0]);
            $rez = (int)$matches_array[0] + (int)$matches_array[1];
            //  echo $rez.PHP_EOL;
            //   echo$matches[0].'  ';
            // Debugger::VarDamp($matches[0]);
            //  Debugger::VarDamp($equation);
            $eq = str_replace($matches[0], $rez, $equation);
            //  echo $eq.' ';

            return $this->solution3($eq);

        } else {

            return $equation;
        }

    }

    private function solution4($equation)
    {
        $pattern = "/[0-9\.]*\-[0-9\.]*/";
        $pattern_2 = "/^\-[0-9\.]*$/";
        if (preg_match($pattern, $equation, $matches) && !preg_match($pattern_2, $equation, $matches_2) ) {
            $matches_array = explode('-', $matches[0]);
           // echo $matches_array[0].PHP_EOL;
          //  echo $matches_array[1].PHP_EOL;
            if(empty($matches_array[0])){
                unset($matches_array[0]);
                $matches_array = array_values($matches_array);
            }

            $rez = $matches_array[0] - (isset($matches_array[1]) ? $matches_array[1] : 0) ;
            //  echo $rez.PHP_EOL;
            //   echo$matches[0].'  ';
            // Debugger::VarDamp($matches[0]);
            //  Debugger::VarDamp($equation);
           // echo$matches[0].'mat ';
            $eq = str_replace($matches[0], $rez, $equation);
             // echo $eq.'eq ';

            return $this->solution4($eq);

        } else {

            return $equation;
        }

    }


    public function parsEquation($equation)
    {
        $rez1 = $this->solution1($equation);

        $rez2 = $this->solution2($rez1);

        $rez3 = $this->solution3($rez2);

        $rez4 = $this->solution4($rez3);

        return $rez4;
    }


}