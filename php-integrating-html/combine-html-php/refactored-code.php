<?php

$nineTable = [];

for ($i = 1; $i <= 10; $i++) {
  $result = ["factor" => $i, "result" => 9 * $i];
  array_push($nineTable, $result);
}


/* echo "<pre>";
var_dump($nineTable);
echo "</pre>";

print_r($nineTable);
die(); */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do this</title>
</head>

<body>
  <h1>nine's table</h1>

  <ul>
    <?php foreach ($nineTable as $value): ?>
      <li> 9 * <?= $value['factor'] ?> = <?= $value['result'] ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>