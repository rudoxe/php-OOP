<?php

class Train {

    function __construct(
        public $brand,
        public $trackGauge,
        private $mileage
    ){}
    
    function __destruct(){
        echo $this->brand. " is dead at ". $this->mileage."<br>";
    }

    public function increaseMileage($amount){
        $this->mileage = $this->mileage + $amount;
    }


}