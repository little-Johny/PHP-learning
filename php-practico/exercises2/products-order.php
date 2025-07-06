<?php

$products = [
  ["name" => "Cuadro pequeño", "height" => 10, "width" => 15],
  ["name" => "Póster mediano", "height" => 20, "width" => 30],
  ["name" => "Lienzo grande", "height" => 40, "width" => 25],
  ["name" => "Fotografía", "height" => 12, "width" => 12],
  ["name" => "Cartel panorámico", "height" => 15, "width" => 50],
];


function orderProducts($products)
{
  foreach ($products as &$shape) {
    $shape["area"] = $shape["height"] * $shape["width"];
  }
  unset($shape);
  usort(
    $products,
    fn($a, $b) =>
    $a["area"] <=> $b["area"]
  );

  return $products;
};

$orderedProducts = orderProducts($products);
print_r($orderedProducts);