<?php 
namespace DashboardDB;
session_start();




if($_SERVER['REQUEST_METHOD'] == "POST") {
    //require 'db.php';
    var_dump($_POST);
    $fullname = trim($_POST['fullname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $newpassword = trim($_POST['newpassword']);
    $errors = [];
    $values = [];
    $info = [];
    require '../DB/users.php';
   	$users = new \DashboardDB\Users();
   	$user = $users->retreiveAttribute($_SESSION['logged_in']);

   	var_dump($user);
    
    if($username == '') {
        $errors['username'] = 'Username is required';
    }

    if($fullname == '') {
    	$errors['fullname'] = 'Full Name is required';
    }
    
    if($password == '') {
        $errors['password'] = 'Please enter your password';
    } else if(!password_verify($password, $user['password'])) {
   		$errors['password'] = 'Wrong Password';
   }

   if(!$newpassword == ''){

   	if($newpassword == $password){
   		$errors['password'] = 'New password must not be the same as the old password';
   		}else{
   			$_POST['password'] = password_hash($newpassword, PASSWORD_DEFAULT);
        
       
   		}

   	}else{
      $_POST['password'] = password_hash($password, PASSWORD_DEFAULT);
    }

// var_dump($errors);exit;
    
    
    if(!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['values'] = $_POST;
            
        }
     else {
        	
          if($newpassword !=''){
            $info['password'] = "Password has been updated";
            $_SESSION['info'] = $info;

          }

        unset($_POST['newpassword']);
        

        $attr = array_merge($_POST, ['image' => $user['image']] , ['role' => $user['role']], ['position' => $user['position']]);

        $editedUser = new Users();
        $editedUser->setAttributes($attr);
        $editedUser->updateUser($user['id']);

        if($username != $user['username']){
       	header("Location: LogOut.php");exit;
       }


       }


    header("Location: ../profile.php");exit;
    
}








 ?>