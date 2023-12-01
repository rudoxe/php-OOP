<?php
include_once "Vehicle.php";
class Car extends Vehicle {
    static $describe = "I mostly have 4 wheels and im made out of metal and also got a color";


    static function makeNoise(){
        echo "Beep, beep, badum pow cow!";
    }


}