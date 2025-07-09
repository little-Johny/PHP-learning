<?php

require_once "User.php";
require_once "Post.php";

interface Search
{
  public function all();
}

$user = new User();
echo $user->all();

$post = new Post();
echo $post->all();