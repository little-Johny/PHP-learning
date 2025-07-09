<?php

interface People
{
  public function getName();
}

class Senior implements People
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

$senior = new Senior("Jusepe");
echo $senior->getName();