

<?php 
$username= $_POST ['helloo1'];
$password= $_POST ['helloo2'];
$email=$_POST ['helloo3'];
include 'dbconn.php';
$sql = "INSERT INTO student(USERNAME,PASSWORD,EMAIL) VALUES('$username','$password','$email')";
$result =mysqli_query($conn,$sql);

if($result)
{
header('Location:krt.php');
}

?>