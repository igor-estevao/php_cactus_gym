<?php
// mysqli
error_reporting(E_ALL);
ini_set('display_errors', 1);
mysqli_report(MYSQLI_REPORT_OFF);
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$database = "cactus_gym";
$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query = "SELECT * FROM exercises";
$exercises_q = mysqli_query($conexao, $query);


$query = "SELECT s.*, c.qtd as qtd
FROM students AS s
LEFT OUTER JOIN (
  SELECT student_id, COUNT(student_id) AS qtd
  FROM classes
  GROUP BY student_id
) AS c ON s.id = c.student_id;";
$students_q = mysqli_query($conexao, $query);

$query = "SELECT ex.*, c.qtd as qtd
FROM exercises AS ex
LEFT OUTER JOIN (
  SELECT exercise_id, COUNT(exercise_id) AS qtd
  FROM classes
  GROUP BY exercise_id
) AS c ON ex.id = c.exercise_id;";
$classes_q = mysqli_query($conexao, $query);


// function get_student_by_id($id){
//   $query = "SELECT * FROM students WHERE `students`.`id` = {$id} LIMIT 1";
//   return mysqli_query($conexao, $query);
// }



// $query_1 = "CREATE DATABASE cactus_gym;";
// $query_2 = "CREATE TABLE exercises (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50), time_to_perform INT);";
// $query_3 = "CREATE TABLE students (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50));";
// $query_4 = "CREATE TABLE classes (id INT PRIMARY KEY AUTO_INCREMENT,student_id INT,exercise_id INT);";

// mysqli_query($conexao, $query_1);
// $conexao = mysqli_connect($servidor, $usuario, $senha, $database);
// mysqli_query($conexao, $query_2);
// mysqli_query($conexao, $query_3);
// mysqli_query($conexao, $query_4);

// // Inserting the exercises
// for($i = 0; $i < 4; $i ++){
//   $exercise_name = "Lifting - " . ($i + 1);
//   $insert_query = "INSERT INTO exercises(name, time_to_perform) VALUES('" . $exercise_name . "', " . $i + 1 . ")";
//   $executed = mysqli_query($conexao, $insert_query);
//   echo "<br>";
//   if($executed) {
//     echo $exercise_name . " inserted.";
//   }else {
//     echo "Error inserting " . $exercise_name;
//   }
// }


// // Inserting the students
// $student_names = ["Jose Almeida", "Maria das Dores", "Juan Gonzales", "Selmira Silva"];
// for($i = 0; $i < 4; $i ++){
//   $student_name = $student_names[$i];
//   $insert_query = "INSERT INTO students(name) VALUES('" . $student_name . "')";
//   $executed = mysqli_query($conexao, $insert_query);
//   echo "<br>";
//   if($executed) {
//     echo $student_name . " inserted.";
//   }else {
//     echo "Error inserting " . $student_name;
//   }
// }

// // Inserting the classes that has the students and the exercises

// for($i = 0; $i < 4; $i ++){
//   for($j = 0; $j < 4; $j ++) {
//     $student_id = $i+1;
//     $exercise_id = $j+1;
//     $insert_query = "INSERT INTO classes(student_id, exercise_id) VALUES({$student_id}, {$exercise_id})";
//     $executed = mysqli_query($conexao, $insert_query);
//     echo "<br>";
//     if($executed) {
//       echo  "exercise {$exercise_id} inserted with student {$student_id}";
//     }else {
//       echo "Error inserting {$exercise_id} with student {$student_id}";
//     }
//   }
// }
