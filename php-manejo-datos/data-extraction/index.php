<?php 

/* $data = 'Study PHP';

echo $data[0]; //S
echo $data[1]; //t */


// String substraction
$post ="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor obcaecati enim aliquid dicta ipsam voluptatibus distinctio quasi tempora accusantium aliquam et corrupti maiores maxime exercitationem beatae, perferendis at nihil eius!";
$extract = substr($post, 0,  20);
echo $extract;

// String transformation to array
$data = 'js, php, laravel';
$tags = explode(',', $data);
var_dump($tags);


// Array transformation to string
$courses = ['js', 'php', 'laravel'];
echo implode(',', $courses);


// delete spaces
$course = " Php  Course   ";
echo trim($course);
echo ltrim($course);
echo rtrim($course);
?>