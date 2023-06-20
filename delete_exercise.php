<?php 

include 'db.php';

$exercise_id = $_GET['exercise_id'];

$delete_query = "DELETE FROM `exercises` WHERE `exercises`.`id` = {$exercise_id}";

$result = mysqli_query($conexao, $delete_query);

header('location:index.php?page_to=exercises');