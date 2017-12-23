<?php 
namespace DashboardDB;
include "templates/header.php";

$sessionErrors = (isset($_SESSION['errors'])) ? $_SESSION['errors'] : [];
$info = (isset($_SESSION['info'])) ? $_SESSION['info'] : [];


$values = (isset($_SESSION['values'])) ? $_SESSION['values'] : [];
unset($_SESSION['errors'], $_SESSION['values'], $_SESSION['info']);




 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
 </head>
 <body>
 	<div id="page-wrapper" class="page-wrapper">
		<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profile</h1>
                    <div class="alert alert-info alert-dismissable <?php if (empty($sessionErrors)){echo'invisible'; }else{echo'';} ?>">
		               				<a class="panel-close close" data-dismiss="alert">x</a>
		               				<i class="fa fa-coffee">
		               				</i>
		               				<?php if (isset($sessionErrors['image'])){echo $sessionErrors['image'];} if(isset($sessionErrors['password'])){echo $sessionErrors['password'] .". ";}if(isset($sessionErrors['username'])){echo $sessionErrors['username'] .". ";}if(isset($sessionErrors['fullname'])){echo $sessionErrors['fullname'] .". ";}if(isset($info['password'])){echo $info['password'] .". ";} else{echo "";} ?>
		               			</div>
		            <div class="container">

		               	<div class="row">

		               		<div class="col-md-3">
		               			<div class="text-center">
		               				<div class="image-holder"></div>	
		               				<h6>Upload a different photo...</h6>
		               				<form action="loginpage/upload.php" method="post" enctype="multipart/form-data">
		               				<input type="file" name="profile" class="form-control file">
		               				<button type="submit" class="btn btn-block btn-primary">Save</button>
		               				</form>
		               			</div>
		               		</div>

		               		<div class="col-md-8 personal-info">
		               			
		               			<h3>Personal Info</h3>
		               			<form  action="loginpage/update-profile.php" method="post" class="form-horizontal" role="form">
		               				<div class="form-group">
		               				<label class="col-lg-3 control-label"><span class="reqired-field">* </span>Full Name: </label>
		               				<div class="col-lg-8">
		               					<input class="form-control" type="text" name="fullname" value="<?php if(isset($values['fullname'])) {echo $values['fullname']; }else{echo $fullname;}?>">
		               				</div>
		               				</div>
		               				<div class="form-group">
		               					<label class="col-md-3 control-label"><span class="reqired-field">* </span>Username: </label>
		               					<div class="col-md-8">
		               						<input class="form-control" type="text" name="username" value="<?php if(isset($values['username'])) {echo $values['username']; }else{ echo $user['username'];} ?>">
		               					</div>
		               					
		               				</div>

		               				<div class="form-group">
		               					
		               					<label class="col-md-3 control-label"><span class="reqired-field">* </span> Password: </label>
		               					<div class="col-md-8">
		               						<input class="form-control" name="password" type="password">
		               					</div>
		               					
		               				</div>

		               				<div class="form-group">
		               					
		               					<label class="col-md-3 control-label" name="newpassword"> New Password: </label>
		               					<div class="col-md-8">
		               						<input class="form-control" type="password" name="newpassword">
		               					</div>
		               					
		               				</div>

		               				<div class="form-group">
		               					<p class="reqired-field">* Field is required</p>
		               					<label class="col-md-3 control-label"></label>
		               					<div class="col-md-8">
		               						<input type="submit" class="btn btn-primary" value="Save Changes">
		               						
		               						
		               					</div>
		               					
		               				</div>


		               			</form>
		               		</div>

					</div>	
		       	</div>
     </div>
     <!-- Wrapper End -->
       


<!-- JS Scripts -->
<?php 
include "templates/footer.php";

 ?>
       
 $( function() {

    $(".close").on( "click", function(e) {
      e.preventDefault();
    
    $(this).parents(".alert-dismissable").hide("drop", 1000);


    }); }); 


  </script>
 </body>
 </html>