<?php
$server = "127.0.0.1";
$user = "root";
$password = "";
$database = "cactus_gym";
$conexao = mysqli_connect($server, $user, $password);
$query_1 = "CREATE DATABASE cactus_gym;";
$query_2 = "CREATE TABLE exercises (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50), time_to_perform INT);";
$query_3 = "CREATE TABLE students (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50));";
$query_4 = "CREATE TABLE classes (id INT PRIMARY KEY AUTO_INCREMENT,student_id INT,exercise_id INT);";
$query_5 = "CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY,username VARCHAR(255) NOT NULL UNIQUE, password VARCHAR(255) NOT NULL);";
mysqli_query($conexao, $query_1);
$conexao = mysqli_connect($server, $user, $password, $database);
mysqli_query($conexao, $query_2);
mysqli_query($conexao, $query_3);
mysqli_query($conexao, $query_4);
mysqli_query($conexao, $query_5);

// Inserting the exercises
for($i = 0; $i < 4; $i ++){
  $exercise_name = "Lifting - " . ($i + 1);
  $insert_query = "INSERT INTO exercises(name, time_to_perform) VALUES('" . $exercise_name . "', " . $i + 1 . ")";
  $executed = mysqli_query($conexao, $insert_query);
  echo "<br>";
  if($executed) {
    echo $exercise_name . " inserted.";
  }else {
    echo "Error inserting " . $exercise_name;
  }
}


// Inserting the students
$student_names = ["Jose Almeida", "Maria das Dores", "Juan Gonzales", "Selmira Silva"];
for($i = 0; $i < 4; $i ++){
  $student_name = $student_names[$i];
  $insert_query = "INSERT INTO students(name) VALUES('" . $student_name . "')";
  $executed = mysqli_query($conexao, $insert_query);
  echo "<br>";
  if($executed) {
    echo $student_name . " inserted.";
  }else {
    echo "Error inserting " . $student_name;
  }
}

// Inserting the classes that has the students and the exercises

for($i = 0; $i < 4; $i ++){
  for($j = 0; $j < 4; $j ++) {
    $student_id = $i+1;
    $exercise_id = $j+1;
    $insert_query = "INSERT INTO classes(student_id, exercise_id) VALUES({$student_id}, {$exercise_id})";
    $executed = mysqli_query($conexao, $insert_query);
    echo "<br>";
    if($executed) {
      echo  "exercise {$exercise_id} inserted with student {$student_id}";
    }else {
      echo "Error inserting {$exercise_id} with student {$student_id}";
    }
  }
}
