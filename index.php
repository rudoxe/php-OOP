<?php

include "Dog.php";
include "Cat.php";
include "Bird.php";
include "Car.php";
include "Tire.php";
include "Train.php";

// $myBird = new Bird("Black", 541);
// echo $myBird->color . "<br>";
// $myBird->fly();

// $myBird2 = new Bird("Blue", 0.5);
// $myBird2->fly();

// $myDog = new Dog;
// $myDog2 = new Dog;
// $myDog->color = "Black";

// $car1 = new Car("Audi", 15000);
// $car2 = new Car("BMW", 20000);

// $car1->increaseMilage(240);

$myTire1 = new Tire(30, "Winter", 420);

echo $myTire1->size."<br>";
echo $myTire1->type."<br>";

echo Car::$describe;
Car::makeNoise();

$train1 = new Train("Rudolfings", "9mm", 7500);
$train2 = new Train("gang", "99cm", 85);



// $cats = [];
// for ($i = 0; $i < 21; $i++) {
//   array_push($cats, new Cat);
// }




