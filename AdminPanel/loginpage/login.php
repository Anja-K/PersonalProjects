<?php 

session_start();
//if(isset($_SESSION['logged_in'])) {
    //header("Location: ../home.php");exit;
//}
//var_dump($_SESSION);
$errors = (isset($_SESSION['errors'])) ? $_SESSION['errors'] : [];
$values = (isset($_SESSION['values'])) ? $_SESSION['values'] : [];
unset($_SESSION['errors'], $_SESSION['values']);


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Log In pages</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

	 <!-- Font awesome -->
           <link rel="stylesheet" type="text/css" href="CSS/font-awesome.css">

	 <!-- Style Css -->
           <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<div id="container">
	<div class="content">
		
		<!-- LogIn Form -->            
        <div class ="formContainer">
        	<div class ="LogIn">
	        	<div class="loginHeader">
	        		<img src="Images/ryan.jpg" />
	        	</div>
	        	<h2>Log in</h2>
	        
	        	<form action="validate_user.php" method="POST">

	                <!-- Username -->
	                <div class="formElement">
		                <label class="srOnly" for="Username" value="<?php echo isset($values['username']) ? $values['username'] : ''; ?>" >Your username:</label><br />
		                <div class="icon">
		                	<i class="fa fa-user" aria-hidden="true"></i> <input type="text" name="username" id="Username"  placeholder="Username " />
		                </div> 
		                <p class="control-element">
		                	<?php echo isset($errors['username']) ? $errors['username'] : ''; ?>
		                </p>
	                </div>

	                <!-- Password -->
	                <div class="formElement">
	                  	<label class="srOnly" for="Password">Your password:</label><br />
	                  	<div class="icon">
	                    	<i class="fa fa-lock" aria-hidden="true"></i> <input type="password" name="password" id="Password" placeholder="Password" />
	                    </div>
	                    <p class="control-element">
	                    	<?php echo isset($errors['password']) ? $errors['password'] : ''; ?>
	                    </p>
	                </div>

	                <!-- LogIn Button -->
	                <div class="formElement">
	                 	<input type="submit" class="submitButton" value="Log in" />
	               	</div>

	               	<!-- Forgot password -->
	                <div class="forgotPassword">
	                 	<a href=""><p>Forgot your password ?</p></a>
	               	</div>

	        	</form>
	        </div>
   		</div>
 	</div>
</div>


</body>
</html>