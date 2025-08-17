<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inputs type</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      max-width: 600px;
      /* Para que funciona? */
      margin: auto;
      /* Como funciona */
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      /* Como funciona? */
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input {
      padding: 8px;
      width: 100%;
      box-sizing: border-box;
      /* Como funciona y para que sirve */
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="checkbox"],
    input[type-="radio"] {
      width: auto;
      margin-right: 5px;
    }

    .inline-group {
      display: flex;
      gap: 10px;
      /* Como funciona */
      margin-top: 5px;
    }

    button {
      background: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <h1>These are some types of input</h1>
  <form action="serve.php" method="post" enctype="multipart/form-data">

    <!-- Common input -->
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
    </div>

    <!-- Number input -->
    <div class="form-group">
      <label for="number">Phone number:</label>
      <input type="number" name="number" id="number">
    </div>

    <!-- Email input -->
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
    </div>

    <!-- Password input -->
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
    </div>

    <!-- Datetime input -->
    <div class="form-group">
      <label for="datetime">Date and time</label>
      <input type="datetime" name="datetime" id="datetime">
    </div>

    <!-- Color input -->
    <div class="form-group">
      <label for="color">Color:</label>
      <input type="color" name="color" id="color">
    </div>

    <div class="form-group">
      <label for="food">Food:</label>
      <select name="food" id="food">
        <option value="pizza">Pizza</option>
        <option value="spagetti">Spagetti</option>
        <option value="meat">Meat</option>
      </select>
    </div>

    <!-- Array input -->
    <div class="form-group">
      <div class="inline-group">
        <label for="person">Personas:</label>
        <input type="text" name="person[]" id="">
        <input type="text" name="person[]" id="">
        <input type="text" name="person[]" id="">
      </div>
    </div>

    <!-- Associative array input -->
    <div class="form-group">
      <div class="inline-group">
        <label for="pet">Pet:</label>
        <input type="text" name="pet[name]" id="">
        <input type="text" name="pet[specie]" id="">
        <input type="color" name="pet[color]" id="">
      </div>
    </div>

    <!-- Checkbox -->
    <div class="form-group">
      <div class="inline-group">
        <label for="">List:</label>
        <input type="checkbox" name="items[]" id="item1" value="one">
        <input type="checkbox" name="items[]" id="item2" value="two">
        <input type="checkbox" name="items[]" id="item3" value="trhee">
      </div>
    </div>

    <!-- Radio -->
    <div class="form-group">
      <div class="inline-group">
        <label for="">Country:</label>

        <label for="mexico">
          <input type="radio" name="country" id="mexico" value="mexico"> Mexico
        </label>

        <label for="colombia">
          <input type="radio" name="country" id="colombia" value="colombia"> Colombia
        </label>

        <label for="spain">
          <input type="radio" name="country" id="spain" value="spain"> Spain
        </label>
      </div>
    </div>

    <!-- Multiple File -->
    <div class="form-group">
      <label for="gallery">Upload your files:</label>
      <input type="file" multiple name="gallery[]" id="gallery">
    </div>

    <button type="submit">Send</button>
  </form>
</body>

</html>