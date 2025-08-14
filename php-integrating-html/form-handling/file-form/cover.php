<?php

$song = [
  "name" => $_GET["name"] ?? null,
  "album" => $_GET["album"] ?? null,
  "singer" => $_GET["singer"] ?? null,
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
    <?php if (!empty($song["cover"])): ?>
      <img src="<?= htmlspecialchars($song["cover"]) ?>" alt="">
    <?php else: ?>
      <p>Doesn't have cover for this song</p>
    <?php endif; ?>

    <div class="info">
      <h4><?= $song["name"] . " - " . $song["album"] ?></h4>
      <p><?= $song["singer"] ?></p>
    </div>
    <div class="bar-section">
      <div class="progress-container">
        <div class="progress"></div>
      </div>
    </div>

    <?php if (!empty($song["audio"])): ?>
      <audio src="<?= htmlspecialchars($song["audio"]) ?>" controls></audio>
    <?php else: ?>
      <p>Doesn't have audio for this song</p>
    <?php endif; ?>
    <div class="controls"></div>
  </div>
  <script>
    console.log(<?= json_encode($song) ?>);
  </script>
</body>

</html>