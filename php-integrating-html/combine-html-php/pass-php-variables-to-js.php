<?php
$users = array(
  array(
    "id" => 0,
    "username" => "little-Johny",
  ),
  array(
    "id" => 1,
    "username" => "Mr.Incredible",
  ),
  array(
    "id" => 2,
    "username" => "Gabriel Mora",
  ),
);

$bestSoccerPlayer = "CR7";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pass PHP variables to JS</title>
</head>

<body>
  <h1>Passing PHP variables to JS</h1>

  <p>The best soccer player in the world is... <span></span></p>

  <div id="container">

  </div>
  <script>
    const $container = document.getElementById("container");
    const $span = document.querySelector("span");

    let bestSoccerPlayer = '<?= $bestSoccerPlayer ?>';
    let users = <?= json_encode($users) ?>;
    console.log(bestSoccerPlayer);
    console.log(users);

    //Render on the DOM
    $container.innerHTML = users.map((user) => `<p>User Id: ${user.id} - Username: ${user.username}
    </p>`).join(``);

    $span.textContent += bestSoccerPlayer;
  </script>
</body>

</html>