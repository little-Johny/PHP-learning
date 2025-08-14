<?php


/* var_dump($_FILES["song-audio"]);
var_dump($_FILES["album-pic"]);

die(); */

// Data reception
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (
    (isset($_FILES["album-pic"]) && $_FILES["album-pic"]["error"] === 0) ||
    (isset($_FILES["song-audio"]) && $_FILES["song-audio"]["error"] === 0)
  ) {

    $uploadsFolder = __DIR__ . "/uploads/";
    $webPath = "uploads/"; // serving images on the web

    if (!is_dir($uploadsFolder)) {
      mkdir($uploadsFolder, 0775, true);
    }

    // Save cover
    if (isset($_FILES['album-pic']) && $_FILES['album-pic']['error'] === UPLOAD_ERR_OK) {
      $imgName = basename($_FILES['album-pic']['name']);
      if (file_exists($uploadsFolder . $imgName)) {
        echo "El archivo ya existe. Por favor cambia el nombre antes de subirlo.";
      } else {
        $imgPath = "$uploadsFolder$imgName";
        move_uploaded_file($_FILES['album-pic']['tmp_name'], $imgPath);
        $imgWebPath = "$webPath$imgName"; // public path for web
      }
    }

    // Save audio
    if (isset($_FILES['song-audio']) && $_FILES['song-audio']['error'] === UPLOAD_ERR_OK) {
      $audioName = basename($_FILES['song-audio']['name']);
      if (file_exists($uploadsFolder . $audioName)) {
        echo "El archivo ya existe. Por favor cambia el nombre antes de subirlo.";
      } else {
        $audioPath = "$uploadsFolder$audioName";
        move_uploaded_file($_FILES['song-audio']['tmp_name'], $audioPath);
        $audioWebPath = "$webPath$audioName";
      }
    }

    header("Location: cover.php?cover=" . urlencode($imgWebPath ?? '') .
      "&audio=" . urlencode($audioWebPath ?? '') .
      "&name=" . urlencode($_POST['name']) .
      "&album=" . urlencode($_POST['album']) .
      "&singer=" . urlencode($_POST['singer']));
    exit;
  }
}
