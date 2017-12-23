<?php 
namespace DashboardDB;
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    require '../DB/users.php';
    $user =  new Users();
    
    $fullname = $username = $password = $position = $role = '' ;
    $errors = [];

    $fullname = trim($_POST['fullname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm = trim($_POST['confirm']);
    $position = trim($_POST['position']);
    $role = trim($_POST['role']);
    
   
    if($username == '') {
        $errors['username'] = 'Username is required';
    } else if($user->checkIfUserExists($username, 'username')) {
        $errors['username'] = 'Username is taken';
    }
    
    if($password == '') {
        $errors['password'] = 'Password is required';
    }

    if($confirm == ''){
    	$errors['confirm'] = 'Please confirm your password';
    }else if($password != $confirm){
    	$errors['confirm'] = 'Passwords do not match';
    }
    
    if($fullname == '') {
        $errors['fullname'] = 'Full Name is required';
    }
    
    if($position == '') {
        $errors['position'] = 'Position is required';
    }
    
    if($role == '') {
        $errors['role'] = 'Please select a role';
    }

    if(!empty($errors)){
    	$_SESSION['errors'] = $errors;
        $_SESSION['values'] = $_POST;

        header("Location: ../manage-users.php");exit;
      }else{
    	unset($_POST['register'], $_POST['confirm']);

        $_POST['password'] =  password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        
			$attributes = array_merge($_POST, ['image' => 'unknown.jpg']);
			$newUser = new Users();
			$newUser->setAttributes($attributes);
			$newUser->save();

            $userId = new Users();
            $id = $userId->retreiveAttribute($username);

            require '../DB/element_order.php';
            $elements = new Order();
            $elements->generateItems($id['id']);
           

			header("Location: ../manage-users.php");exit;
    }
  
}

 ?>