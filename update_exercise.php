<?php

include 'db.php';

$exercise_id = $_POST['exercise_id'];
$exercise_name = $_POST['exercise_name'];

$update_query = "UPDATE exercises SET name = '{$exercise_name}' WHERE id = {$exercise_id}";

$result = mysqli_query($conexao, $update_query);

if($result) {
  header('location:index.php?page_to=exercises');
}else{
  echo $result;
  // header('location:index.php?page_to=new_exercise');
}
