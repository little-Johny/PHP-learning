<?php

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


class Admin extends Basic
{

  public function __construct($name)
  {
    $this->name = $name;
  }

}
class User extends Basic
{

  public function __construct($name)
  {
    $this->name = $name;
  }

}
class Guest extends Basic
{

  protected $name ="Guest";
}

$guest = new Guest();
echo $guest->login();

$user = new User("Johny");
echo $user->login();

$admin = new Admin("Molano");
echo $admin->login();