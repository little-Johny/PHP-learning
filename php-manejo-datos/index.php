<?php

echo 'un texto de una o 
varias lineas, pero se renderiza en una sola \' backslash \\  <br>';

$name = 'Johny';

echo "Mi name is $name";

// When we use more complex data structure, we need to use brackets at start and the end

$courses = [
  "frontend" => "react",
  "backend" => [
    "php",
    "express",
  ],
];

echo "{$courses["backend"][0]} <br>";



// variables variables
$teacher = "italo";
$italo = "PHP teacher";

echo "$teacher is {$italo}";


function getTeacher() {
  return "teacher";
}

$teacher = "italo";


echo "{${getTeacher()}} is {$italo}";
class User
{
  public $name =  "Johny";
  public $lastName = "Doe";
  public $age = 30;
}

$user = new User();

echo "{$user->name} wants to learn {$courses["backend"][0]} after {$user->age} years<br>";
