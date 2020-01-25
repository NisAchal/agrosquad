<!DOCTYPE html>

<html> 
	<head> 
    <title>Saral&nbsp;Agro Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

			<link rel= "stylesheet" type= "text/css" href= "bootstrap.min.css">
			<link rel= "stylesheet" type= "text/css" href= "bootstrap.min.js">
			<link rel= "stylesheet" type= "text/css" href= "css/registration_form_effect.css">
			
	</head> 
	<body>
	<?php include('subhead.php'); ?>
	<?php include('header.php'); ?> 
			<div class= "container"> 
				<div class= "row"> 
					<div class= "col-md-7">
						
							<h1 class= "text-left"> Empowering Farmer together  </h1> 
							<p class= "text-left"> 
								
								
							
							</p> 

					</div>


					<div class= "col-md-5"> 
					
					
						<form action= "sign_up_validation.php" method= "post" onsubmit= "return validation();">
						<!-- first row of 2nd column -->
						<div class= "row">

								<div class= "col-md-8">  
										<h3 class= "text-left"  style="margin-left: 20px;"> <strong>  Registration Form </strong> </h3> 
								</div> 
								<div class= "col-md-4"> 
										 <img src= "images/regs.png" style= "width: 50px; height: 50px; margin-top: 10px;"> 
								</div> 
						</div>
						<!-- end of ist row -->
						<hr> 
						
						<!-- 2nd row of 2nd column -->
						<div class= "row"> 
							 
							 <label class= "label col-md-4 control-label"> <strong> username </strong> </label>
						
							<div class= "col-md-8"> <input type= "text" class= "form-control" name= "username" placeholder= "username" id="username"> </div> 
							<span id= "msg_username" style= "margin-left: 50px; color: #ff0000;"> </span>
							
						</div>
						<!-- close of 2nd column -->
						
						<!-- 3rd row of 2nd column -->
						<div class= "row"> 
							 
							 <label class= "label col-md-4 control-label"> <strong> password </strong> </label>
						
							<div class= "col-md-8"> <input type= "password" class= "form-control" name= "password" placeholder= "password" id="password">  </div> 
							<span id= "msg_password" style= "margin-left: 50px; color: #ff0000;"> </span>
							
						</div>
						<!-- close of 3rd column -->
						
						<!-- 4rd row -->
						<div class= "row"> 
							 <label class= "label col-md-4 control-label"> <strong> E-mail </strong> </label>
							<div class= "col-md-8"> 
								
								<input type= "email" name= "email" class= "form-control" id="email" placeholder= "enter a email">
							</div> 
							
						</div>
						<!-- close of 4rd row -->
	
						<!-- 5th row -->
						<div class= "row"> 
							 <label class= "label col-md-4 control-label" style= "margin-top: 18px;"> <strong> Phone </strong> </label>
							<div class= "col-md-8"> 
								
								<input type= "number" name= "phone" class= "form-control" placeholder= "contact number" id="phone" style= "margin-top: 13px;"> </div> 
								<span id= "msg_phone" style= "margin-left: 50px; color: #ff0000;"> </span>
							
						</div>
						<!-- close of 5rd column -->
						
						
						<!-- 6rd row of 2nd column -->
						<div class= "row"> 
							 
							 <label class= "label col-md-4 control-label"> <strong>  Address </strong> </label>
						
							<div class= "col-md-8"> <input type= "text" class= "form-control" name= "address" placeholder= "home town address" id="address"> </div> 
							<span id= "msg_address" style= "margin-left: 50px; color: #ff0000;"> </span>
							
						
						</div>
						<!-- close of 6rd column -->
						
						
						<!-- 7rd row of 2nd column -->
	
						<!-- close of 7rd column -->
						
						
	
						<!-- 8th row -->
						<div class= "row"> 
							 <label class= "label col-md-4 control-label" style= "margin-top: 10px;"> <strong>  Gender </strong> </label>
							<div class= "col-md-8" style= "margin-top: -5px;"> 
								<input type= "radio" name= "gender" value= "male"> <small> male </male>
								<input type= "radio" name= "gender" value= "female"> <small> female </male>
								<input type= "radio" name= "gender" value= "female"> <small> other </male>
							</div> 
						</div>
						<!-- close of 8rd row -->
						<!-- 9rd row -->
						<div class= "row"> 
							 <label class= "label col-md-4 control-label" style="margin-top: 5px;"> <strong> District </strong> </label>
							<div class= "col-md-8"> 
								<select name= "district_name" class= "form-control"> 
										<option value= "kathmandu"> Kathmandu </option>
										<option value= "Sankhuwa-sava"> Sankhuwa-sava </option>
										<option value= "Dharan"> Dharan </option>
										<option value= "khotang"> khotang </option>
										<option value= "Pokhara"> Pokhara </option>
										<option value= "Chitwan"> Chitwan </option>
										
								</select>
								
							</div> 
						</div>
						<!-- close of 9rd row -->
						
						
						<input type= "submit" class= "btn btn-info" value= "submit"> &nbsp &nbsp &nbsp
						<input type= "reset" class= "btn btn-warning" value= "clear" name= "reset">
						</form>
					</div>
					
				
				</div> 
			
			</div> 
			
			
			
			
		
		
		
		
		
		
	
	</body> 
	
		<!-- ======================================| Form Validation before inserting into database <<=========================================== -->
		<script> 
			
				function validation()
				{
					
						
						
						var username= document.getElementById('username').value;
						var password= document.getElementById('password').value;
						var phone= document.getElementById('phone').value;
						var address= document.getElementById('address').value;
					
						if(username== '' || password== '' || phone== '' || address== '')
						{
								if(username== '')
								{
									document.getElementById('msg_username').innerHTML= "<strong>***  username can't be blank ***</strong>";
								
								}
								if(password== '')
								{
									document.getElementById('msg_password').innerHTML= "<strong>***  password can't be blank ***</strong>";
								
								}
								if(phone== '')
								{
									document.getElementById('msg_phone').innerHTML= "<strong>***  Phone no can't be blank ***</strong>";
								
								}
								if(address== '')
								{
									document.getElementById('msg_address').innerHTML= "<strong>***  address can't be blank ***</strong>";
								
								
								}
					
								return false;
					
						}
						else
						{
							return true;
						}
						
				
			
				}
				
			
				
		</script>
	
</html>