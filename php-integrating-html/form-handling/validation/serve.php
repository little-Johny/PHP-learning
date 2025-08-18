<?php

/* if (empty($_POST["name"])) {
  echo "name is set <br>";
} else {
  echo "Name is not set 😡 <br>";
}

die();

if (isset($_POST["name"])) {
  echo "name is set <br>";
  } else {
    echo "Name is not set 😡 <br>";
} */

/* if (isset($_POST["name"]) && !empty($_POST["name"])) {
  echo "name is set <br>";
} else {
  echo "Name is not set 😡 <br>";
} */
if (isset($_POST["form"]) && !empty($_POST["form"])) {
  echo "form is set <br>";
} else {
  echo "form is not set 😡 <br>";
}




var_dump($_POST["name"]);


?>