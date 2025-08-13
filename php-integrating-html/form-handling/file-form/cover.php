<?php

$song = [
  "name" => $_POST["name"] ?? null,
  "album" => $_POST["album"] ?? null,
  "singer" => $_POST["singer"] ?? null,
  "cover" => $_GET["cover"] ?? null,
  "audio" => $_GET["audio"] ?? null,
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cover</title>
</head>

<body>
  <div class="player">
    <img src="<?= htmlspecialchars($song["cover"]) ?>" alt="">
    <div class="info">
      <h4><?= $song["name"] . " - " . $song["album"] ?></h4>
      <p><?= $song["singer"] ?></p>
    </div>
    <div class="bar-section">
      <div class="progress-container">
        <div class="progress"></div>
      </div>
    </div>
    <audio src="<?= htmlspecialchars($song["audio"]) ?>"></audio>
    <div class="controls"></div>
  </div>
</body>

</html>