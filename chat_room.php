<!DOCTYPE html>

<html> 
		<head> 
				<style> 
				body{
					background-image: url('images/chatbg.jpg');
					
				}
				
					*{
						
						margin: 0px; 
						padding: 0px;
					}
					#main
					{
						border: 1px solid black;
						width: 440px;
						height: 500px;
						margin: 24px auto;
					}
					
					#message-area
					{
						width: 98%;
						border: 1px solid orangered;
						height: 450px;
						padding: 0% 1%;
					}
					
				</style> 
		</head> 
		<body> 
				
					<?php
							
						session_start();
						if(isset($_SESSION['username']))
						{
					echo "Wellcome  ".$_SESSION['username']; 
							echo "<br> <br> <br> ";
							echo "     ".'<a href= "log_out.php"> Log out </a> ';
					
						}
						else
						{
							header('location: login.php');
						}
					 
					?>
				
					<div id= "main"> 
						<div id= "message-area">
								
								<?php
										include('connection.php');
										$q1= "SELECT * FROM message";
										$r1= mysqli_query($conn, $q1);
										while($row= mysqli_fetch_assoc($r1))
										{
											$message= $row['message'];
								     		$username= $row['username'];
											
											echo '<h4 style= "color: red;">'.$username.'</h4>';
											echo '<p>'.$message.'</p>';
											echo '<hr>';
										}
										
										
										if(isset($_POST['submit']))
										{ 
											
											$message= $_POST['message'];
											$q= 'INSERT INTO message(id, message, username)
											VALUES("", "'.$message.'", "'.$_SESSION['username'].'")
											';
											
											if(mysqli_query($conn, $q))
											{
												$message= $row['message'];
												$username= $row['username'];
												echo '<h4 style= "color: red">'.$username.'</h4>';
												echo '<p>'.$message.'</p>';
												echo '<hr>';
												echo "Hello!";
												header('location: chat_room.php');
											}
										}
									?>
								
						</div> 
						
						
					
					<form method= "post"> 
							<input type= "text" name= "message" placeholder= "...Type a msg here.." style= "width: 370px; height: 50px">
							<input type= "submit" name= "submit" style= "width: 60px; height: 50px;">
							
					</form> 
				
				</div> 
		
		</body> 
</html> 