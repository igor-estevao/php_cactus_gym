<?php

include 'db.php';

$exercise_name = $_POST['exercise_name'];
$time_to_perform = $_POST['time_to_perform'];

$insert_query = "INSERT INTO exercises(name, time_to_perform) VALUES ('$exercise_name',
$time_to_perform)";
$result = mysqli_query($conexao, $insert_query);
header('location:index.php?page_to=exercises');

if($result) {
  header('location:index.php?page_to=exercises');
}else{
  header('location:index.php?page_to=new_exercise');
}
