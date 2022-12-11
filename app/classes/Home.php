<?php
namespace App\classes;

class Home
{
  //properties
  public function __construct()
  {
    //
  }

  public function index()
  {
    header('Location: action.php?page=home');
  }
}