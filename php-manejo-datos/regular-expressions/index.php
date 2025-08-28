<?php 

$password = '123456';
// Password of only numbers and length between 6 and 9
echo preg_match('/^[0-9]{6,9}$/', $password); 
// If is correct return 1
// If is not correct return 0

//transform to bool
var_dump((bool) preg_match('/^[0-9]{6,9}$/', $password));

?>