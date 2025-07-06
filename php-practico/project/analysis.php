<?php
require "data.php";
print_r($_REQUEST);
echo "<br>";



for ($i=0; $i < count($words); $i++) { 
  if ($_REQUEST["word$i"] === $words[$i]) {
  echo "The word $i entered is correct <br>";
} else {
  echo "The word $i entered is incorrect, the correct word is: " . $words[$i]. "<br>";
}
}