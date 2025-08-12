<?php

$name = "Mr.Incredible";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print text and label with PHP</title>
</head>

<body>
  <!-- First form to print HTML labels-->
  <?php echo '<b>Hello, Im learning how implement HTML labels with PHP</b><br>'; ?>
  
  <!-- Second form to print HTML labels -->
  <?= '<i>This is another form to print HTML labels with PHP</i>'?>

  <!-- Third form to prin HTML labels -->
  <h1>This is another form to print HTML with PHP => <?= $name ?></h1>
</body>

</html>