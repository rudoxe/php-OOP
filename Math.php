<?php

class Math {
    static function addTwo($a, $b){
        return $a+$b;
    }

    static function factorial($f){
        $factorial = 1;
        for ($i=$f; $i >= 1; $i--) {
            $factorial = $factorial * $i;
        }
        return "Faktorials no $f ir $factorial <br>";
    }

    static function sum($yes) {
        $sum = 0;
        foreach($yes as $i) {
            $sum = $sum + $i;
        }
        return $sum;
    }

    static function average($array){
        return array_sum($array)/count($array);
    }
}