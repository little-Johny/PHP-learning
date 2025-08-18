<?php

$is_float = filter_var(123.10, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

$is_int = filter_var("nolose", FILTER_SANITIZE_NUMBER_INT);

$is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP);

$is_url = filter_var("https://platzi.com", FILTER_VALIDATE_URL);

$is_email = filter_var("platzi@.com", FILTER_VALIDATE_EMAIL);




echo '<pre>';
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_url);
echo '</pre>';
?>