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
  <link rel="stylesheet" href="./style.css">
</head>

<body>


  <form action="./" method="post" enctype="multipart/form-data">
    <h1>Schedule your event</h1>

    <section class="first-container">
      <div class="personal">
        <h3>personal data</h3>
        <div class="input-container ">
          <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
          </div>
          <div class="input-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone">
          </div>
          <div class="input-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
          </div>
        </div>
      </div>

      <div class="preferences">
        <h3>Preferences</h3>
        <div class="input-container">
          <div class="input-group">
            <label for="color">Color</label>
            <input type="color" name="color" id="color">
          </div>
          <div class="input-group">
            <p>Country</p>

            <label for="colombia">
              <input type="radio" name="country" id="colombia" value="colombia">
              Colombia 🇨🇴
            </label>

            <label for="mexico">
              <input type="radio" name="country" id="mexico" value="mexico">
              Mexico 🇲🇽
            </label>

            <label for="venezuela">
              <input type="radio" name="country" id="venezuela" value="venezuela">
              Venezuela 🇻🇪
            </label>

            <label for="brazil">
              <input type="radio" name="country" id="brazil" value="brazil">
              Brazil 🇧🇷
            </label>
          </div>

          <div class="checkboxes">
            <h4>Topics of interest</h4>
            <label for="ia">
              <input type="checkbox" name="topics[]" id="ia" value="ia">
              IA
            </label>
            <label for="backend">
              <input type="checkbox" name="topics[]" id="backend" value="backend">
              Backend
            </label>

            <label for="cloud">
              <input type="checkbox" name="topics[]" id="cloud" value="cloud">
              Cloud
            </label>

            <label for="devops">
              <input type="checkbox" name="topics[]" id="devops" value="devops">
              Devops
            </label>

            <label for="frontend">
              <input type="checkbox" name="topics[]" id="frontend" value="frontend">
              Frontend
            </label>

            <label for="segurity">
              <input type="checkbox" name="topics[]" id="segurity" value="segurity">
              Segurity
            </label>
          </div>
        </div>
      </div>
    </section>

    <h3>Additional information</h3>
    <div class="input-container">
      <div class="input-group">
        <label>Main guests</label>
        <label for="guest1">
          1st Guest:
          <input type="text" name="guests[]" id="guests1">
        </label>
        <label for="guest2">
          2nd Guest:
          <input type="text" name="guests[]" id="guests2">
        </label>
        <label for="guest3">
          3rd Guest:
          <input type="text" name="guests[]" id="guests3">
        </label>
      </div>
      <div class="input-group">
        <label for="company">Company data</label>
        <label for="company-name">
          company name
          <input type="text" name="company[name]" id="company-name">
        </label>
        <label for="company-website">
          company website
          <input type="text" name="company[website]" id="company-website">
        </label>
        <label for="company-email">
          company email
          <input type="email" name="company[email]" id="company-email">
        </label>
        <label for="company-field">
          company field
          <select name="company[field]" id="company-field">
            <option value="" selected disabled>Choose an option</option>
            <option value="audiovisual">Audiovisual Production & Entertainment</option>
            <option value="technology">Technology & Software Development</option>
            <option value="renewables">Renewable Energy & Sustainability</option>
            <option value="health">Healthcare & Biotechnology</option>
            <option value="agroindustry">Agroindustry & Food Production</option>
          </select>
        </label>
      </div>
    </div>

    <h3>Files</h3>
    <div class="input-container">
      <div class="input-group">
        <label for="docs">Docs</label>
        <input type="file" multiple name="docs[]" id="docs" accept="image/*">
      </div>
      <div class="preview-container" id="preview">
      </div>
    </div>

    <h3>Comments</h3>
    <div class="input-container">
      <div class="input-group">
        <label for="comments">Comments</label>
        <textarea name="comments" id="comments"></textarea>
      </div>
    </div>

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

    <button name="form" type="submit">Send</button>

    <div class="contact-info">
      <div class="info"><span>Address: calle 69 a bis sur #79b - 35 </span></div>
      <div class="info"><span>email: molano.johny721@gmail.com</span></div>
      <div class="info"><span>phone number: +57 314 309 4657</span></div>
    </div>
  </form>
  <script>
    const $imgInput = document.getElementById("docs");
    const $preview = document.getElementById("preview");

    $imgInput.addEventListener("change", function() {
      $preview.innerHTML = "";
      const files = this.files;

      for (const file of files) {
        if (file.type.startsWith("image/")) {
          const reader = new FileReader();

          reader.onload = function (e) {
            const img = document.createElement("img");
            img.src = e.target.result;
            img.style.width = "120px";
            img.style.height = "120px";
            img.style.objectFit = "cover";
            img.style.margin = "5px";
            img.style.borderRadius = "8px";
            $preview.appendChild(img);
          };
          reader.readAsDataURL(file);
        }
      }
    });
  </script>
</body>

</html>