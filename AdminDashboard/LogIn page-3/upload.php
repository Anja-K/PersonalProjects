<?php
namespace DashboardDB;
session_start();

$target_dir = "Images/";
$target_file = $target_dir . basename($_FILES["profile"]["name"]);
// var_dump(basename($_FILES["profile"]["name"]));exit;



$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$image = $_FILES["profile"]["name"];
$errors = [];

// Check if image file is a actual image or fake image
if($_SERVER['REQUEST_METHOD'] == "POST") {
    require '../DB/users.php';
    $user =  new Users();
// var_dump($_FILES);

$fileErrors = [
        UPLOAD_ERR_INI_SIZE => 'Please upload smaller file',
        UPLOAD_ERR_FORM_SIZE => 'Please upload smaller file',
        UPLOAD_ERR_PARTIAL => 'Error occured, please try again',
        UPLOAD_ERR_NO_FILE => 'Please select file',
        UPLOAD_ERR_NO_TMP_DIR => 'No tmp dir',
        UPLOAD_ERR_CANT_WRITE => 'Cannot write to folder',
        UPLOAD_ERR_EXTENSION => 'Please check your file extension'
    ];


    $check = getimagesize($_FILES["profile"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $errors['image'] = "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {

    $info = pathinfo($_FILES["profile"]["name"]);
    $i = 0;
    
    do {
        $image_name = $info['filename'] . ($i ? "_($i)" : "") . "." . $info['extension'];
       
        $i++;
       $target_file = $target_dir  . $image_name;
    } while(file_exists($target_file));
    

    $uploadOk = 1;
}
// Check file size
if ($_FILES["profile"]["size"] > 500000) {
    $errors['image'] = "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $errors['image'] =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        header("Location: ../profile.php");exit;
    }else{
    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
        $users = new Users();
        $user = $users->retreiveAttribute($_SESSION['logged_in']);

        
        $attr = array_merge(['image' => $image] , ['fullname' => $user['fullname']], ['username'=> $user['username']], ['password' => $user['password']], ['role' => $user['role']], ['position' => $user['position']]);

        
        $editedUser = new Users();
        $editedUser->setAttributes($attr);
        $editedUser->updateUser($user['id']);

        header("Location: ../profile.php");exit;

    } 
}
?>