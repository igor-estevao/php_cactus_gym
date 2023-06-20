<?php

include 'db.php';
session_start();
$username = addslashes($_POST['username']);
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1";
$stmt = mysqli_prepare($conexao, $query);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);

mysqli_stmt_store_result($stmt);

if(mysqli_stmt_num_rows($stmt) == 1) {
  mysqli_stmt_bind_result($stmt, $id, $dbUsername, $dbPassword);
  mysqli_stmt_fetch($stmt);

  $_SESSION['login'] = true;
  $_SESSION['user_id'] = $stmt->id;
  header('location:index.php');
} else {
  unset($_SESSION['login']);
  unset($_SESSION['user_id']);
  header('location:index.php?error=1');
}