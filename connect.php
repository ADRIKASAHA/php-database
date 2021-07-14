<?php


session_start();
header('location:login.php');

$con = mysql_connect('localhost','root','Adrika18373591SAHA');

mysql_select_db($con,'wtm');

$name=$_POST['username'];
$password =$_POST['password'];
$s ="select * from usertable where name ='$name'";
$result =mysql_query($con, $s);

$num= mysql_num_rows($result);
if($num == 1){
	echo"username alredy taken";
}
else{
	$reg="insert into usertable(name,password) values ('$name' ,'$password')";
	mysql_query($con,$reg);
	echo "registration successful";
}



?>