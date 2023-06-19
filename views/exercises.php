<a href="?page_to=new_exercise">New Exercise</a>
<table style="border:1px solid #ccc; width: 100%">
<tr>
<th>Exercise Name</th>
<th>Time required to Perform</th>
<th>Edit/Delete</th>
</tr>
<?php
  while($row = mysqli_fetch_array($exercises_q)) {
    echo '<tr>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['time_to_perform'].'</td>';
      echo '<td>';
      echo "<a href='views/edit_exercise.php?exercise_id={$row['id']}'>Edit</a><br>";
      echo "<a href='views/delete_exercise.php?exercise_id={$row['id']}'>Delete</a>";
      echo '</td>';
    echo'</tr>';
  }
?>

</table>