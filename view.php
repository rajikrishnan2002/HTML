<?php
$servername="localhost";
$username="root";
$password="";
$database="stud";
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection)
{
    echo "connected successfully";
}
else
{
    die('not connected');
}
$sql="SELECT * FROM student_details";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0)
{
 echo "<table><tr><th>sl_no</th>";
 echo "<th>name</th>";
 echo "<th>email</th>";
 echo "<th>phoneno</th>";
 echo "<th>address</th></tr>";
 while($row=mysqli_fetch_assoc($result))
 {
    echo "<tr><td>$row[sl_no]</td>";
    echo "<td>$row[name]</td>";
    echo "<td>$row[email]</td>";
    echo "<td>$row[phoneno]</td>";
    echo "<td>$row[address]</td></tr>"; 
 }
 
}
