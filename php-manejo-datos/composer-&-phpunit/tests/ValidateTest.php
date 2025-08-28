<?php  

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
  public function  test_email() {
    $email = Validate::email('molanix@gmail.com');
    $this->assertTrue($email);;

    $email = Validate::email('33123312');
    $this->assertFalse($email);
  }
}


?>