<?php

/* echo "<pre>";
var_dump($_POST);
echo "</pre>"; */

$user = [
  "name" => htmlentities($_POST["name"]),
  "username" => addslashes($_POST["username"]),
  "email" => preg_replace("/\d/", "🔥", filter_var($_POST["email"], FILTER_SANITIZE_EMAIL)),
  "age" => filter_var($_POST["age"], FILTER_SANITIZE_NUMBER_INT),
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data User</title>
</head>

<body>
  <p>Name:</p>
  <?= $user["name"] ?>
  <p>Username:</p>
  <?= $user["username"] ?>
  <p>Email:</p>
  <?= $user["email"] ?>

</body>

</html>