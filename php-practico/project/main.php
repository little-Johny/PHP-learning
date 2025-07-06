<?php

require "data.php";

$disordedWords = [];
$form = "<form action='analysis.php' style=\"display: flex; flex-direction: column; width: 300px;\">";
$span = "<span style=\" font-family: $font; \"> Write the words in the correct order</span>";
$closeForm = "</form>";
$button = "<button type='submit'>Send</button>";
$inputs = "";
$rows = "";

for ($i = 0; $i < count($words); $i++) {
  $disordedWords[$i] = str_shuffle($words[$i]);
  $inputs .= "<input type='text' name='word$i' placeholder='" . $i + 1 . "º" . " word'>";
  $rows .= "<tr>
              <td style=\"font-family: $font;\">". $i + 1 ."</td>
              <th style=\"font-family: $font;\">$disordedWords[$i]</th>
            </tr>";
}

// print_r($disordedWords);
echo "
<div style=\"display: flex; justify-content: center; align-items: center; height: 100vh;\">
  <div style='display: flex; justify-content: space-between; width: 600px;'>
    <table>
    <caption style=\"font-family: $font;\">words</caption>
    $rows
    </table>
    $form.$span.$inputs.$button.$closeForm
  </div>
</div>
";

echo "
";
?>