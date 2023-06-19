<?php
  include 'db.php';
  include 'header.php';  
  
  $page_to = isset($_GET['page_to']) ? $_GET['page_to'] : 'home';
  
  include "views/{$page_to}.php";

  include 'footer.php';