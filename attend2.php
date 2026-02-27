<?php
$conn = mysqli_connect("localhost","root","root","college attendance"); 
if(isset($_POST['add']))
{
    $roll = $_POST['roll_no'];
    $name = $_POST['name'];
    mysqli_query($conn,"INSERT INTO students (roll_no,name)VALUES ('$roll','$name')");
    echo "Student Added Successfully";
}
?>  
<h2>Add Student</h2>
<form method="post">
Roll No:<input type="text" name="roll_no" required>
<br><br>
Name:<input type="text" name="name" required>
<br><br>
<input type="submit" name="add" value="Add Student">
</form>
<br><br>
<a href="attend1.php">Back</a>

