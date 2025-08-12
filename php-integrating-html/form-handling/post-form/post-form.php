<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form with POST</title>
</head>
<body>
  <form action="./server.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <label for="age">Age:</label>
    <input type="text" name="age" id="age">

    <button type="submit">Send Form</button>
  </form>
</body>
</html>