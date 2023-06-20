<?php 

include 'db.php';

$student_id = $_GET['student_id'];

$delete_query = "DELETE FROM `students` WHERE `students`.`id` = {$student_id}";

$result = mysqli_query($conexao, $delete_query);

header('location:index.php?page_to=students');