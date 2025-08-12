<?php
$talksAboutBruno = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditionals</title>
</head>

<body>

  <!-- Incorrect way to use if/else -->
  <?php if ($talksAboutBruno) {
    echo "<h1>This conditional is true.</h1>";
  } else {
    echo "<h2>🔊</h2>";
  } ?>

  <!-- Acceptable  way to use if/else -->
  <?php
  if ($talksAboutBruno) {
    ?>
    <h1>Any one can talks about bruno</h1>
    <?php
  } else {
    ?>
    <h1>Thats ok</h1>
    <?php
  }
  ?>

  <!-- Correct way to use if/else  -->
  <?php if ($talksAboutBruno): ?>
    <h1>This is the correct way to use if/else</h1>
  <?php else: ?>
    <h3>And can use else</h3>
  <?php endif; ?>
</body>

</html>