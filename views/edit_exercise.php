<h1>New exercise</h1>
<?php 
  include '../db.php';
  $exercise = mysqli_fetch_array(mysqli_query($conexao, "SELECT * FROM exercises WHERE `exercises`.`id` = {$_GET['exercise_id']} LIMIT 1"));
?>
<br>
<form method='POST' action='update_exercise.php'>
  <label>exercise Name:</label><br>
  <?php
    echo "<input type='text' name='exercise_id' value='{$exercise['id']}' hidden>";
    echo "<input type='text' name='exercise_name' placeholder='exercise name' value='{$exercise['name']}'>"
  ?>
  <br>
  <input type='submit' value='Update exercise'>
</form>