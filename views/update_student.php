<?php

include '../db.php';

$student_id = $_POST['student_id'];
$student_name = $_POST['student_name'];

$update_query = "UPDATE students SET name = '{$student_name}' WHERE id = {$student_id}";

$result = mysqli_query($conexao, $update_query);

if($result) {
  header('location:../index.php?page_to=students');
}else{
  echo $result;
  // header('location:../index.php?page_to=new_student');
}
