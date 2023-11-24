<?php

include "Dog.php";
include "Cat.php";
include "Bird.php";
include "Car.php";

$myBird = new Bird("Black", 541);
echo $myBird->color . "<br>";
$myBird->fly();

$myBird2 = new Bird("Blue", 0.5);
$myBird2->fly();

$myDog = new Dog;
$myDog2 = new Dog;
$myDog->color = "Black";

$car1 = new Car("Audi", 15000);
$car2 = new Car("BMW", 20000);

$car1->increaseMilage(240);


$cats = [];
for ($i = 0; $i < 21; $i++) {
  array_push($cats, new Cat);
}


