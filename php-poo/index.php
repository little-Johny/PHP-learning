<?php

// Molde
class User
{
  public $type;
}

// Typo del molde user
class Admin extends User
{
  public function greet() {
    return "Hello, Admin";
  }
}

// Relacionamieno de moldes y creacion de objetos
$user = new User;
$user->type = new Admin;
echo $user->type->greet();