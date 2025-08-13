<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoverMaker - Send files in forms</title>
</head>

<body>

  <h1>Welcome to CoverMaker </h1>
  <form action="./server.php" method="post" enctype="multipart/form-data">

    <label for="name">
      Song name
    </label>
    <input type="text" name="name" id="name">
    <label for="album">
      Song album
    </label>
    <input type="text" name="album" id="album">
    <label for="singer">
      Singer
    </label>
    <input type="text" name="singer" id="singer">

    <label for="album-pic">
      Almbum Cover
    </label>
    <input type="file" id="album-pic" name="album-pic" accept="image/*">
    <br><br>
    <img id="preview" src="" alt="album cover">

    <label for="song-audio">
      Single
    </label>
    <input type="file" name="song-audio" accept="audio/*" id="song-audio">
    <br><br>
    <audio id="audio-preview" controls style="display:none;"></audio>

    <br><br>
    <button>Generate</button>
  </form>
  <script>
    const $albumPic = document.getElementById("album-pic");
    const $preview = document.getElementById("preview");
    const $songAudio = document.getElementById("song-audio");
    const $audioPreview = document.getElementById("audio-preview");

    $albumPic.addEventListener("change", function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.addEventListener("load", function () {
          $preview.src = reader.result;
          $preview.style.display = "block";
        });

        reader.readAsDataURL(file);
      };
    });

    $songAudio.addEventListener("change", function () {
      const file = this.files[0];

      if (file) {
        const reader = new FileReader();
        reader.onload = function () {
          $audioPreview.src = reader.result;
          $audioPreview.style.display = "block"
        };

        reader.readAsDataURL(file);
      };
    });
  </script>
</body>

</html>