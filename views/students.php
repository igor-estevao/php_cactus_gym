<a href="?page_to=new_student">New Student</a>
<table style="border:1px solid #ccc; width: 100%">
<tr>
<th>Student Name</th>
<th>Student Courses Counter</th>
<th>Edit/Delete</th>
</tr>
<?php
  while($row = mysqli_fetch_array($students_q)) {
    echo '<tr>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['qtd'] . '</td>';
      echo '<td>';
      echo "<a href='edit_student.php?student_id={$row['id']}'>Edit</a><br>";
      echo "<a href='delete_student.php?student_id={$row['id']}'>Delete</a>";
      echo '</td>';
    echo'</tr>';
  }
?>

</table>