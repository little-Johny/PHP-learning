<?php

$users = ["Mr.Increible", "little-Johny", "Gablriel Mora"];
$colors = [
  "Blue" => "#0000FF",
  "Green" => "#008000",
  "Red" => "#FF0000"
];
$numbers = [1, 2, 3, 4, 5];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cycles</title>
</head>

<body>
  <!-- For loop structure -->
  <ul>
    <?php for ($i = 0; $i < 10; $i++): ?>
      <li><?= $i ?></li>
    <?php endfor; ?>

  </ul>

  <!-- While loop structura  -->
  <ul>
    <?php

    while ($color = current($colors)): ?>
      <li style="color: <?= $color ?>">
        <?= key($colors) ?> (<?= $color ?>)
      </li>
      <?php
      next($colors);
    endwhile; ?>
  </ul>
  
  <!-- Do-While loop structure -->
  <ul>
    <?php
    $counter = 0;
    reset($numbers); // Ensures the pointer is at the beginning
    do {
      $num = current($numbers);
      if ($num === false)
        break; // End of loop
      ?>
      <li><?= $num ?></li>
      <?php
      $counter += $num;
      next($numbers);
      ?>
    <?php } while ($counter !== 15); ?>
  </ul>

  <!-- Foreach loop structure -->
  <h1>Users List</h1>
  <ul>
    <?php foreach ($users as $index => $user): ?>
      <li>#<?= $index ?>   <?= $user ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>