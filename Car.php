<?php

class Car {
    public $brand;
    private $milage;
    static $describe = "I mostly have 4 wheels and im made out of metal and also got a color";

    public function __construct() {
        $this->brand = $brand;
        $this->milage = $milage;
    }

    public function __destruct() {
    echo $this->brand ."is dead at milage" . $this->milage;
    }

    public function increaseMilage($amount) {
        $this->milage = $amount + $this->milage;
    }

    static function makeNoise(){
        echo "Beep, beep, badum pow cow!";
    }


}