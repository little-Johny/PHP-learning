<?php
require "mail.php";

function validate($name, $email, $comments)
{
  return !empty($name) && !empty($email) && !empty($comments);
}

$status = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (validate($_POST["name"] ?? null, $_POST["email"] ?? null, $_POST["comments"] ?? null)) {

    $data = [
      "name" => $_POST["name"] ?? null,
      "email" => $_POST["email"] ?? null,
      "phone" => $_POST["phone"] ?? null,
      "age" => $_POST["age"] ?? null,
      "preferences" => [
        "color" => $_POST["color"] ?? null,
        "country" => $_POST["country"] ?? null,
        "topics" => $_POST["topics"] ?? [],
      ],
      "addInfo" => [
        "guests" => $_POST["guests"] ?? [],
        "company" => $_POST["company"] ?? [],
        "comments" => $_POST["comments"] ?? null,
      ],
      "documents" => $_FILES["docs"] ?? [],
    ];


    $body = "This client {$data["addInfo"]["company"]["name"]} sent an email. <br><br> {$data["addInfo"]["comments"]}";

    // send mail
    sendMail("New Event", $body, $data["email"], $data["name"], true);

    $status = "success";

  } else {
    $status = "error";
  }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event request</title>
</head>

<body>
  <?php if ($status == "success"): ?>
    <div class="alert success" style="display: block;">
      <h3>Email sent successfully</h3>
    </div>
  <?php endif; ?>

  <?php if ($status == "error"): ?>
    <div class="alert error" style="display: block;">
      <h3>something went wrong</h3>
    </div>
  <?php endif; ?>

  <form action="./" method="post" enctype="multipart/form-data" id="data-form">
    <h1>Schedule your event</h1>
    <h3>personal data</h3>
    <div class="input-container personal">
      <div class="input-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
      </div>
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
      </div>
      <div class="input-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">
      </div>
      <div class="input-group">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
      </div>
    </div>

    <h3>Preferences</h3>
    <div class="input-container perferences">
      <div class="input-group">
        <label for="color">Color:</label>
        <input type="color" name="color" id="color">
      </div>
      <div class="input-group">
        <label for="">Country:</label>
        <input type="radio" name="country" id="colombia" value="colombia">
        <input type="radio" name="country" id="mexico" value="mexico">
        <input type="radio" name="country" id="venezuela" value="venezuela">
        <input type="radio" name="country" id="brazil" value="brazil">
      </div>
      <div class="input-group">
        <label for="">Topics of interest:</label>
        <input type="checkbox" name="topics[]" id="ia" value="ia">
        <input type="checkbox" name="topics[]" id="backend" value="backend">
        <input type="checkbox" name="topics[]" id="cloud" value="cloud">
        <input type="checkbox" name="topics[]" id="devops" value="devops">
        <input type="checkbox" name="topics[]" id="frontend" value="frontend">
        <input type="checkbox" name="topics[]" id="segurity" value="segurity">
      </div>
    </div>

    <h3>Additional information</h3>
    <div class="input-container">
      <div class="input-group">
        <label for="guests">Main guests</label>
        <input type="text" name="guests[]" id="guests1">
        <input type="text" name="guests[]" id="guests2">
        <input type="text" name="guests[]" id="guests3">
      </div>
      <div class="input-group">
        <label for="company">Company data:</label>
        <input type="text" name="company[name]" id="company-name">
        <input type="text" name="company[website]" id="company-website">
        <input type="email" name="company[email]" id="company-email">
        <input type="text" name="company[field]" id="company-field">
      </div>
    </div>

    <h3>Files</h3>
    <div class="input-container">
      <div class="input-group">
        <label for="docs">Docs:</label>
        <input type="file" multiple name="docs[]" id="docs">
      </div>
    </div>

    <h3>Comments</h3>
    <div class="input-container">
      <div class="input-group">
        <label for="comments">Comments</label>
        <textarea name="comments" id="comments"></textarea>
      </div>
    </div>

    <button name="form" type="submit">Send</button>

    <div class="contact-info">
      <div class="info"><span>Direction</span></div>
      <div class="info"><span>email</span></div>
      <div class="info"><span>phone number</span></div>
    </div>
  </form>
  <script></script>
</body>

</html>