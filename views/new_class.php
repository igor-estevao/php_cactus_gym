<h1>New Class</h1>
<form method="post" action="create_class.php">
  <select name="student_id">
    <option>Select a Student</option>
    <?php
      while($row = mysqli_fetch_array($students_q)) {
        echo "<option value='{$row['id']}'> {$row['name']} </option>";
      }
    ?>
  </select>
  <br>
  <select name="exercise_id">
    <option>Select an Exercise</option>
    <?php
    while($row = mysqli_fetch_array($exercises_q) ) {
      echo "<option value='{$row['id']}'> {$row['name']} </option>";
      }
    ?>
  </select>
  <br>
  <input type="submit" value="Sign this user to exercise">
</form>