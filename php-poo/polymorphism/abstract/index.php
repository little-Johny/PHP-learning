<?php

require_once "Invitado.php";
require_once "Usuario.php";
require_once "Administrador.php";


abstract class Basic{

  protected $name;

  private function getClassName()
  {
    return get_called_class();
  }

  public function login()
  {
    return "My name is $this->name from the class {$this->getClassName()}";
  }
}





$guest = new Invitado();
echo $guest->login();

$user = new Usuario("Johny");
echo $user->login();

$admin = new Administrador("Molano");
echo $admin->login();