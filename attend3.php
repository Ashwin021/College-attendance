<?php
$conn=mysqli_connect("localhost","root","root","college attendance");
$students = mysqli_query($conn,"SELECT * FROM students");
if(isset($_POST['save']))
{
    $date = $_POST['date'];
    foreach($_POST['status'] as $name => $status)
    {
        mysqli_query($conn,"INSERT INTO attendance (name,att_date,status)
        VALUES ('$name','$date','$status')");
    }
    echo "Attendance Saved Successfully";
}
?>
<h2>Mark Daily Attendance</h2>
<form method="post">
Date:<input type="date" name="date" required>
<br><br>
<table border="1">
<tr>
<th>Roll No</th>
<th>Name</th>
<th>Status</th>
</tr>
<?php while($row = mysqli_fetch_assoc($students))
{
?>
<tr>
<td><?php echo $row['roll_no']; ?></td>
<td><?php echo $row['name']; ?></td>
<td>
<input type="radio" name="status[<?php echo $row['name']; ?>]" value="Present" required>Present
<input type="radio" name="status[<?php echo $row['name']; ?>]" value="Absent"> Absent
</td>
</tr>
<?php 
} ?>
</table>
<br>
<input type="submit" name="save" value="Save Attendance">
</form>
<br><br>
<a href="attend1.php">Back</a>
