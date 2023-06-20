<?php
include 'db.php';
session_start();
unset($_SESSION['login']);
unset($_SESSION['user_id']);
header('location:index.php');