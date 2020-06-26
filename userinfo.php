<?php

$con =mysqli_connect('localhost','root');

if($con){
	echo "Conenction successful";
}else {
	 echo "No connection";
}

mysqli_select_db($con, 'tourmaldives');

$username=$_POST['username'];
$email=$_POST['email'];



$query="insert into userinfodata(user,email) values('$user','$email')";


echo "$query";

mysqli_query($con, $query);

header('location:index.php');

?>