<?php
$words = array('sun', 'moon', 'heaven');
$disordedWords = array();
$font = "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif";
$form = "<form action='analysis.php' style=\"display: flex; flex-direction: column; width: 300px;\">";
$span = "<span style=\" font-family: $font; \"> Write the words in the correct order</span>";
$closeForm = "</form>";
$button = "<button type='submit'>Send</button>";
$inputs = "";

for ($i = 0; $i < count($words); $i++) {
  $disordedWords[$i] = str_shuffle($words[$i]);
  $inputs .= "<input type='text' name='word0' placeholder='" . $i + 1 . "º" . " word'>";
}

?>

<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div style='display: flex; justify-content: space-between; width: 600px;'>
    <table>
      <caption style="font-family: <?= $font ?>;">words</caption>
      <tr>
        <td style="font-family: <?= $font ?>;">1</td>
        <th style="font-family: <?= $font ?>;">$disordedWords[0]</th>
      </tr>
      <tr>
        <td style="font-family: <?= $font ?>;">2</td>
        <th style="font-family: <?= $font ?>;">$disordedWords[1]</th>
      </tr>
      <tr>
        <td style="font-family: <?= $font ?>;">3</td>
        <th style="font-family: <?= $font ?>;">$disordedWords[2]</th>
      </tr>
    </table>
    $form.$span.$inputs.$button.$closeForm
  </div>
</div>