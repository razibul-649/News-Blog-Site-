<?php

require_once 'vendor/autoload.php';
use App\classes\Category;

$category = new Category();
$categories = $category->getAllCategory();

// echo "<pre>";
// print_r($categories);
// echo "</pre>";

if(isset($_GET['page']))
{
  if($_GET['page'] == 'home')
  {
    include 'pages/home.php';
  }
}
