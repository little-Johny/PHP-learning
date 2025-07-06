<?php

function halfCrhistmasTree ($high) {
  for ($i=0; $i < $high; $i++) { 
    echo str_repeat("*", $i). "\n";
  }
};

halfCrhistmasTree(10);
?>