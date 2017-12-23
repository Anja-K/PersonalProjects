<?php 

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    //require 'db.php';
    // var_dump($_POST);exit;
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $errors = [];
    
    

    require '../DB/users.php';
   	$users = new \DashboardDB\Users();
    var_dump($users->retreiveAttribute($username));
    if($username == '') {
        $errors['username'] = 'Username is required';
     } 
    
    if($password == '') {
        $errors['password'] = 'Password is required';
    }else {
        if($users->retreiveAttribute($username)){
           
            $user = $users->retreiveAttribute($username);

            if(!password_verify($password, $user['password'])){
                $errors['password'] = 'Wrong username or password';
            } 
        
        }else{
            $errors['password'] = 'Wrong username or password';
        }
    }

    
    if(!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['values'] = $_POST;
            header("Location: LogIn.php");exit;
        }
     else {
        	$_SESSION['logged_in'] = $username;
    		header('Location: ../home.php') ;
    		exit;

       }
    
}



 ?>