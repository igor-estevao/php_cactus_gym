<h1>New Student</h1>
<?php 
  include 'db.php';
  $student = mysqli_fetch_array(mysqli_query($conexao, "SELECT * FROM students WHERE `students`.`id` = {$_GET['student_id']} LIMIT 1"));
?>
<br>
<form method='POST' action='update_student.php'>
  <label>Student Name:</label><br>
  <?php
    echo "<input type='text' name='student_id' value='{$student['id']}' hidden>";
    echo "<input type='text' name='student_name' placeholder='Student name' value='{$student['name']}'>"
  ?>
  <br>
  <input type='submit' value='Update Student'>
</form>