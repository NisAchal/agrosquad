


<?php

session_start();



$con = mysqli_connect('localhost','root');

if($con){
	echo " connection successful";
}else{
	echo " no connection"; 
}


mysqli_select_db($con, 'session_part');

$name = $_POST['username'];
$pass = $_POST['password'];



$q = " select * from main_table  where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $q);   //--------------------------------| firing/executing query |------------------------------- -->

$num = mysqli_num_rows($result);    //-----------------------------------| it will count no of rows that already contain values of name and passowrd in the table which gets matched with data entered while registration| -->

if($num > 0){
	
	echo $name;
	echo $pass;
	$_SESSION['username']= $name;
	header('location: chat_room.php');
}else{

	
		echo "Sorry! incorrect password or username.";
		//header('location: login_form.php');
}


?>