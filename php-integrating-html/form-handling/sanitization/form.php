<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanitization forms</title>
</head>

<body>
  <form action="serve.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <label for="username">Username:</label>
    <input type="text" name="username" id="username">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email">

    <label for="age">Age:</label>
    <input type="number" name="age" id="age">


    <button type="submit">Send</button>
  </form>
</body>

</html>