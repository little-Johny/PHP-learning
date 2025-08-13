<?php


/* var_dump($_POST);
var_dump($_FILES);

die(); */

// Data reception
if ($_SERVER["method"] === "POST") {
  if ((isset($_FILES["album_pic"]) && $_FILES["album-pic"]["error"] === 0) || (isset($_FILES["song-audio"]) && $_FILES["song-audio"]["error"] === 0)) {
    $uploadsFolder = __DIR__ . "/uploads/"; //Absolute path

    // Make folder if doesn't exist
    if (!is_dir($uploadsFolder)) {
      mkdir($uploadsFolder, 0775, true);
    }


    // Save cover
    if (isset($_FILES['album-pic']) && $_FILES['album-pic']['error'] === UPLOAD_ERR_OK) {
      $imgName = basename($_FILES['album-pic']['name']);
      $imgPath = $uploadDir . $imgName;
      move_uploaded_file($_FILES['album-pic']['tmp_name'], $imgPath);
    }

    // Save audio
    if (isset($_FILES['song-audio']) && $_FILES['song-audio']['error'] === UPLOAD_ERR_OK) {
      $audioName = basename($_FILES['song-audio']['name']);
      $audioPath = $uploadDir . $audioName;
      move_uploaded_file($_FILES['song-audio']['tmp_name'], $audioPath);
    }

    // Redirect to the next page
    header("Location: cover.php?cover=" . urlencode($destinyPicPath) . "&audio=" . urlencode($destinyAudioPath));
    exit;
  }
}