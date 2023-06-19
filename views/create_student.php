<?php

include '../db.php';

$student_name = $_POST['student_name'];

$insert_query = "INSERT INTO students(name) VALUES ('$student_name')";

$result = mysqli_query($conexao, $insert_query);

if($result) {
  header('location:../index.php?page_to=students');
}else{
  echo $result;
  // header('location:../index.php?page_to=new_student');
}
