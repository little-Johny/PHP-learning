<?php
  
class Mom 
{

  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  // Agregarle el prefijo final hace que el metodo sea inmutable

  /* final */ public function getName()
  {
    return $this->name;
  }
}

class Son extends Mom
{

  // Polimorfismo en el metodo heredado
  public function getName()
  {
    return "My name is {$this->name}";
  }
  // Metodo propio del hijo
  public function message()
  {
    return "Hello, how are you {$this->name}";
  }
}

$catherine = new Mom("catherine");
$johny = new Son("Johny");

echo $catherine->getName(); 


echo $johny->getName(); // Metodo heredado
echo $johny->message();