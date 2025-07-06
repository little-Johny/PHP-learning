<?php
$valorA = 5;
$valorB = 2;

function calculate ($operation) {
  switch ($operation) {
    case 'subtraction':
      return function($num1, $num2) {
        return $num1 - $num2;
      };
      break;
    case 'multiplication':
      return function($num1, $num2) {
        return $num1 * $num2;
      };
      break;
    case 'division':
      return function($num1, $num2) {
        return $num1 / $num2;
      };
      break;
    case 'potentiation':
      return function($num1, $num2,) {
        return $num1 **$num2;
      };
      break;
    case 'module':
      return function($num1, $num2,) {
        return $num1 % $num2;
      };
      break;
    default:
      return function($num1, $num2) {
        return $num1 + $num2;
      };
      break;
  };
};

var_dump(calculate('substraction')(3,3));
var_dump(calculate('module')($valorA, $valorB));
/* echo calculate('substraction')(3,3); */

?>