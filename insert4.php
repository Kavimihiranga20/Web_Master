<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$name = $_POST['username'];
$email = $_POST['email'];
$issues = $_POST['issues'];

$con = mysqli_connect('localhost','root',"","database");

if(!$con)
{
echo 'Not Connected To Server';
}
if(!mysqli_select_db($con,'database'))
{
echo 'Database not Connected';
}


$sql = "INSERT INTO bootstrap_issues (name,email,issue) VALUES ('$name','$email','$issues')";

if(!mysqli_query($con,$sql))
{
echo 'Not Inserted';
}
else
{
echo 'Inserted';
}

//header("refresh:2; url=bootstrap_issues.html");

?>