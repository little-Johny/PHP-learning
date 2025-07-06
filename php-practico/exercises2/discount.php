<?php

function clothesDiscount($price, $discount){
  $response = new stdClass();
  $response->original = $price;
  $response->new = $price * (1 - $discount / 100);
  return $response;
}

$finalPrice = clothesDiscount(1000, 35);

echo $finalPrice->original . PHP_EOL;
echo $finalPrice->new;
