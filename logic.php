<?php 

include ('db_connect.php');

$username=$_POST['username'];
$password=$_POST['pass'];

$data=mysql_query("select * from users where username='$username' and password='$password' ");

if($data1=mysql_fetch_array($data))
{
	echo "<script>alert('login are succesful');window.location='profile.php';</script>";
}

else
{
	echo "<script>alert('login unsuccesful');window.location='form.php';</script>";
}

 ?>