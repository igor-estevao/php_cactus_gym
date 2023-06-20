<?php 

include 'db.php';

$class_id = $_GET['class_id'];

$delete_query = "DELETE FROM `class` WHERE `class`.`id` = {$class_id}";

$result = mysqli_query($conexao, $delete_query);

header('location:index.php?page_to=class');