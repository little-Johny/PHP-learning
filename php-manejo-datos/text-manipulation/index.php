<?php

// Alter
$text = 'php iS A LaNgUaGe';
echo strtolower($text);
echo strtoupper($text);
echo ucfirst($text);
echo lcfirst($text);

// Replace
$slug = strtolower(str_replace(' ', '-', $text));
echo $slug;

//  Modify
$code = 39;
echo str_pad($code, 8, '#', STR_PAD_BOTH);

$html = "<h1>HELLO</h1>";
echo strip_tags($html);

// Monobyte and multibyte elements
$specialFormat = "año óptimo";
echo mb_strtoupper($specialFormat); 
echo strtoupper($specialFormat); 