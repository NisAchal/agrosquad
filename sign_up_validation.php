<?php 

	session_start();	// we should start a session before connection to a database 


	$con = mysqli_connect('localhost','root'); 			// connecting to the mysql application
	if($con){
		echo" connection successful";
		echo  "<br><br>";
		
	}else{
		echo " no connection"; 
		echo "<br><br> ";
	}

	mysqli_select_db($con, 'session_part'); 		   //----------------->> selecting a database name called "session_part"


		$user= $_POST['username'];
		$pass= $_POST['password'];
		$email= $_POST['email'];
		$phone= $_POST['phone'];
		$add= $_POST['address'];

		$gender= $_POST['gender'];
		$district_name= $_POST['district_name'];
				
		$q = " select * from main_table  where username = '$user' && password = '$pass'";
		
		$result = mysqli_query($con, $q);  				 //---------------------------------| firing/executing query |------------------------------

				$count = mysqli_num_rows($result);    			//-----------------------------------| it will count no of rows that already contain values of name and passowrd in the table which gets matched with data entered while registration| -->

				if( $count > 0){
					echo "<br> <br>";
					echo "Sorry! username already reserved.";
					
					
				}	
				else{
					echo "<br> <br>";
					echo "account is successfully created.";
					$qy= " insert  into main_table(username, password, email, phone, address,  gender, district) values ('$user' , '$pass', '$email', '$phone', '$add', '$gender', '$district_name') ";	
					mysqli_query($con, $qy);
					header('location:login.php');
				}

?>