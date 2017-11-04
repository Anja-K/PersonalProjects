<?php

	namespace TASKS;
	require_once 'db.php';

	if($_SERVER['REQUEST_METHOD'] == "POST") {
	    $email = trim($_POST['email']);
	    $password = trim($_POST['password']);
	    $errors = [];
	   	$users = new \TASKS\Users();
	   	$user = $users->fetchValues($email, 'email');
	   	//var_dump($user);exit;
	    
	   	if($email == ''){
	   		$errors['email'] = 'Email is required.';
	   	}

	   	if($password == ''){
	   		$errors['password'] = 'Password is required.';
	   	}

	    if(empty($errors)) {

	    	if($users->fetchValues($email, 'email') == FALSE){

	    		$errors['notvalid'] = 'Wrong username or password';

	    	}else if($user[0]['password'] == $password){

	    		$_SESSION['email'] = $email;
	            header("Location: logged_in.php");
	            exit;	    		
	    	}else{

	    		$errors['notvalid'] = 'Wrong username or password';

	    	}

	    	
	    }
    
}	


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/d20de17c01.js"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" id="login">
				<div id="loginImg"> </div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4" id="login02Box">
							<form method="POST">
							  <div class="form-group formElement">
							  	<input type="email" class="form-control formInput" id="email" name="email" placeholder="&#xf003;     Email" style="font-family:FontAwesome; padding-left:15px;"/>
							    <p class="error"><?= isset($errors['email']) ? $errors['email'] : ''; ?></p>
							  </div>
							  <div class="form-group formElement">
							  	<input type="password" class="form-control formInput" id="pwd" name="password" placeholder="&#xf023;     Password" style="font-family:FontAwesome; padding-left:15px;"/>
							    <p class="error"><?= isset($errors['password']) ? $errors['password'] : ''; ?></p>
							  </div>
							  <button type="submit" class=" formButton">Login</button>
							  <div>
								<p class="errors"><?= isset($errors['notvalid']) ? $errors['notvalid'] : ''; ?></p>
							</div>
							</form>
						</div>					
					</div>
			</div>
		</div>
	</div>
</body>
</html>