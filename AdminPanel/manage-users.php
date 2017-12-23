<?php 
namespace DashboardDB;
include "templates/header.php";
$users->readAll();
$profiles = $users->readAll();

$fullname = $username = $password = $position = $role = '';
$errors = [];

$formErrors = (isset($_SESSION['errors'])) ? $_SESSION['errors'] : [];
$values = (isset($_SESSION['values'])) ? $_SESSION['values'] : [];

unset($_SESSION['errors'], $_SESSION['values']);

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $position = trim($_POST['position']);
  $id = ($_POST['edit']);

  if($position == ''){
    $errors['position'] = 'Please select position';
  }

if(isset($_POST['role'])){

    $role = $_POST['role'];
      if($role == ''){
      $errors['role'] = 'Please select role';
    }
  };
  

  if(empty($errors)){

    foreach ($profiles as $profile) {
      if($id == $profile->id){
        $fullname = $profile->fullname;
        $username = $profile->username;
        $password = $profile->password;
        $image = $profile->image;
        if(!isset($_POST['role'])){
          $role = $profile->role;
        }
      }else{continue;};
    }
      unset($_POST['role']);
      $attr = array_merge($_POST , ['fullname' => $fullname], ['username'=> $username], ['password' => $password], ['role' => $role], ['image' => $image]);
        $editedUser = new Users();
        $editedUser->setAttributes($attr);
        $editedUser->updateUser($id);
        header("Location: ".$_SERVER['PHP_SELF']);
        
        $users->readAll();
        $profiles = $users->readAll();
        }

}

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
                    <h1 class="page-header">Manage users</h1>
                </div>
              
                 
                <div class="col-lg-12 col-md-8 col-sm-12">
                      
                  <?php if(isset($errors['position'])) {echo "<div class='alert alert-info' role='alert'>".$errors['position']."</div>";} else{echo '';}?>
                
                    <div class="panel panel-light-blue">
                        <div class="panel-heading panel-heading-padding">List of users</div>
                        <div class="panel-body">
                            <!-- Table 1-->
                            <div class="box-body">
                                <table class="table table-bordered users">
                                    <thead class="thead">
                                        <tr>
                                          <th>#</th>
                                          <th>Fullname</th>
                                          <th>Username</th>
                                          <th>Position</th>
                                          <th>Role</th>
                                          <th>Edit</th>
                                          <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                     $i = 1; 
                                    	foreach ($profiles as $profile) {
                                      
                                       if($profile->role == "Administrator")
                                    		?>
                                    	
                                        <tr>
                                        	<form method="POST" action="">
                                             <td><?php echo $i; $i++;?></td>
		                                         <td><?php echo $profile->fullname; ?></td>
		                                         <td><?php echo $profile->username; ?></td>
		                                         <td class="editable"><input type="text" name="position" value="<?php echo $profile->position; ?>">
                                             </td>
                                          		 <td>
                                                <?php if($profile->role == "Administrator"){
                                                  echo $profile->role;
                                                    }else{?>
		                                          	<select class="editable" name="role">
									                                 <option <?php if($profile->role == '') { echo 'selected=""'; } ?> value="">Select role</option>
									                                 <option <?php if($profile->role == 'Administrator') { echo 'selected=""'; } ?> value="Administrator">Administrator</option>
									                                 <option <?php if($profile->role == 'Editor') { echo 'selected=""'; } ?> value="Editor">Editor</option>
									                                 <option <?php if($profile->role == 'Contributor') { echo 'selected=""'; } ?> value="Contributor">Contributor</option>
								                	               </select>
                                                 <?php }?>
                                          		</td>
                                          		<td>
                                          			<button type="submit" class="btn btn-primary-no-bg" name="edit" id="<?php echo $profile->id; ?>" value="<?php echo $profile->id; ?>">Save</button>
                                          		</td>
                                              <td>
                                                <?php if($profile->role != "Administrator") {
                                                  echo "
                                                  <a class='btn btn-danger-no-bg' href='LogIn page-3/delete.php?id=$profile->id'>Delete</a>";
                                                } 
                                                ?>
                                              </td>
                                            </form>
                                        </tr>
                                       <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
       </div>
       <div id="newUser-form" class="row">
                <div class="col-lg-12 col-md-8 col-sm-12"> 
                    <div class="panel panel-magenta">
                        <div class="panel-heading"></div>
                            <div class="panel-body panel-h">
                            <div class="cancel-group"> 
                              <h3>Add a new user</h3>
                              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </div>
                                    <!-- Register-->
                                    <div class="formContainer col-lg-8">  

                                            <div id="Register">
                                              <form action="loginpage/register.php" method="POST">
                
                                                <!-- Full Name -->
                                                <div class="inputGroup">
                                                  <label for="fullname" class="srOnly">Fullname:</label>
                                                  <input type="text" name="fullname" id="fullName" value="<?= isset($values['fullname']) ? $values['fullname'] : ''; ?>" placeholder="<?= isset($formErrors['fullname']) ? $formErrors['fullname'] : 'Full name'; ?>" />
                                                </div>


                                                <!-- Username -->
                                                <div class="inputGroup">
                                                  <label for="username" class="srOnly">Username:</label>
                                                  <input type="text" name="username" id="userName" value="<?php if(!isset($formErrors['username'])){if(isset($values['username'])){ echo $values['username']; }}else{ echo '';}  ?>"  placeholder="<?= isset($formErrors['username']) ? $formErrors['username'] : 'Username'; ?>" />
                                                </div>

                                                <!-- Password -->
                                                <div class="inputGroup">
                                                  <label class="srOnly" for="Password">Password:</label>
                                                  <input type="password" name="password" id="Password" value="<?= isset($values['password']) ? $values['password'] : ''; ?>" placeholder="<?= isset($formErrors['password']) ? $formErrors['password'] : 'Password'; ?>" />
                                                </div>

                                                <!-- Confirm Password -->
                                                <div class="inputGroup">
                                                  <label class="srOnly" for="confirm">Confirm Password</label>
                                                  <input type="password" name="confirm" id="confirm" value="<?= isset($values['confirm']) ? $values['confirm'] : ''; ?>" placeholder="<?= isset($formErrors['confirm']) ? $formErrors['confirm'] : 'Confirm password'; ?>"/>
                                                </div>

                                                <!-- Position -->
                                                <div class="inputGroup">
                                                  <label for="position" class="srOnly">Position:</label>
                                                  <input type="text" name="position" id="Position" value="<?= isset($values['position']) ? $values['position'] : ''; ?>" placeholder="<?= isset($formErrors['position']) ? $formErrors['position'] : 'Position'; ?>" />
                                                </div>


                                                <!-- Role -->
                                                <div class="inputGroup">
                                                  <label for="role" class="srOnly">Role:</label>
                                                  <select class="form-control" name="role">
                                                    <option value=""><?= isset($formErrors['role']) ? $formErrors['role'] : 'Select a role'; ?></option>
                                                    <option value="Administrator" <?php if(isset($values['role'])){ if($values['role'] == "Administrator") {echo "Selected";}} ?> >Administrator</option>
                                                    <option value="Editor" <?php if(isset($values['role'])){ if($values ['role'] == "Editor") {echo "selected";}} ?> >Editor</option>
                                                    <option value="Contributor" <?php if(isset($values['role'])){ if($values ['role'] == "Contributor") {echo "selected";}} ?> >Contributor</option>
                                                  </select>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="inputGroup">
                                                  <input type="submit" class="btn btn-primary" name="register" />
                                                </div>
                                              </form>
                                            </div>   
                                    </div>
                                    
                            </div>
                    </div>
                
         
       </div>
     </div>
     <!-- Wrapper End -->

<!-- JS Scripts -->
<?php 
include "templates/footer.php";

 ?>
  </script>
 </body>
 </html>