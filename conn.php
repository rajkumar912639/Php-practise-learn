<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "crud";

$conn=mysqli_connect("localhost", "root","" ,"crud") or die("connection is failed");
$sql = 'INSERT INTO student(sid,sname) VALUES (2,"deep" )';  

if(mysqli_query($conn, $sql))
{  

 echo "Record inserted successfully";  

}
else
{  

echo "Could not insert record: ". mysqli_error($conn);  

}  

mysqli_close($conn);  




?>