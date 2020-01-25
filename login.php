<!DOCTYPE html>
<html lang= "en">
	
	<head> 
		<title> Log In </title> 
		<meta charset= "utf-8">
		<meta name= "viewport" content= "width=device-width", initial-scale= 1">
		<link rel= "stylesheet" type= "text/css" href= "bootstrap.min.css">
		<link rel= "stylesheet" type= "text/css" href= "css/effect.css">
		<link rel="stylesheet" type ="text/css" href="css/style.css">	

		<script src= "jquery.min.js"> </script> 
		<script src= "bootstrap.min.js"> 	</script>


				<style> 
						#a-color
						{
							color: black;
						}
						
					body{
                        background-image: url('images/bg_3.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: cover;
                        text-align: center;
                        background-color: transparent;
                    }
				#form_field{
                    border-style:solid;

                }	
					
				</style>

	</head>

	<body> 

<?php include('subhead.php'); ?>
<?php include('header.php'); ?>

		<div class= "container-fluid bg"> 
			<div class= "row"> 
				<div class= "col-md-4 col-sm-4 col-xs-12"> </div>
				<div class= "col-md-4 col-sm-4 col-xs-12"> 
				
					<!-- form start -->
							
								<form action= "login_validation.php" method= "post" class= "form-container">
											
											<div id= "form_field"> 
											
													<h1> Login Form </h1>
													<div class="form-group">
														<label> <strong> username </strong> </label>
															<input type="text" name= "username" class="form-control"  placeholder="username">
													</div>
													<div class="form-group">
														<label> <strong> Password </strong> </label>
														<input type="password" name= "password" class="form-control" placeholder="Password" >
													</div>
										
									
									
													<div> 
														<button  type= "submit" class="btn btn-success btn-block"> Submit </button>
													</div>
													
													<h4 align= "center" style= "line-height: 20px;">  <br> <ins> <strong> <span style= "color: white;  text-shadow: 2px 2px 5px blue;"> <a href= "Final_sign_up_page.php" id= "a-color"> Create An Account </a> </span> </center> </ins> </h4>
											</div> 
									
								</form>
				
	
					<!-- form end 	--> 
				</div>
				<div class= "col-md-sm-4 col-xs-12"> </div> 
			</div>
			
		</div>


	</body>

</html> 