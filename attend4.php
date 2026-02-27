<?php
$conn = mysqli_connect("localhost","root","root","college attendance");
$date_result = mysqli_query($conn,"SELECT DISTINCT att_date FROM attendance ORDER BY att_date");
$dates = [];
while($d = mysqli_fetch_assoc($date_result))
{
    $dates[] = $d['att_date'];
}
$students = mysqli_query($conn,"SELECT name FROM students");
?>
<h2>Attendance Records</h2>
<table border="4" cellpadding="12">
<tr>
<th>Name</th>
<?php
foreach($dates as $date)
{
    echo "<th>".date("d/m/y",strtotime($date))."</th>";
}
?>
</tr>
<?php
while($stu = mysqli_fetch_assoc($students))
{
    echo "<tr>";
    echo "<td>".$stu['name']."</td>";
    foreach($dates as $date)
    {
        $name = $stu['name'];
        $check = mysqli_query($conn,"SELECT status FROM attendance WHERE name='$name' AND att_date='$date'");
        if(mysqli_num_rows($check)>0)
        {
            $row = mysqli_fetch_assoc($check);
            echo "<td>".$row['status']."</td>";
        } else 
        {
            echo "<td>-</td>";
        }
    }
    echo "</tr>";
}
?>
</table>
