<a href="?page_to=new_class">New Class</a>

<table style="border:1px solid #ccc; width: 100%">
<tr>
<th>Course Name</th>
<th>Students on this course</th>
<th>Delete</th>
</tr>
<?php
  while($row = mysqli_fetch_array($classes_q)) {
    echo '<tr>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['qtd'] . '</td>';
      echo '<td>';
      echo "<a href='delete_class.php?class_id={$row['id']}'>Delete</a>";
      echo '</td>';
    echo '</tr>';
  }
?>

</table>