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
$name=$_POST['name1'];
$email=$_POST['email1'];
$phoneno=$_POST['phoneno1'];
$address=$_POST['address1'];
$sql="INSERT INTO student_details(name,email,phoneno,address) VALUES('$name','$email','$phoneno','$address')";
mysqli_query($connection,$sql);
mysqli_close($connection); 
