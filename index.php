<?php
  session_start();
  include 'db.php';
  include 'header.php';
  // echo $_SESSION['login'];
  // echo "<br>";
  // echo $_SESSION['user_id'];
  // echo "<br>";
  if(isset($_SESSION['login'])){
    $page_to = isset($_GET['page_to']) ? $_GET['page_to'] : 'exercises';
  }
  else{
    $page_to = 'home';
  }

  include "views/{$page_to}.php";

  include 'footer.php';