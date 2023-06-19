<?php

include '../db.php';

$student_id = $_POST['student_id'];
$exercise_id = $_POST['exercise_id'];

$insert_query = "INSERT INTO classes(student_id, exercise_id) VALUES ({$student_id}, {$exercise_id})";

$result = mysqli_query($conexao, $insert_query);

if($result) {
  header('location:../index.php?page_to=classes');
}else{
  header('location:../index.php?page_to=new_class');
}
