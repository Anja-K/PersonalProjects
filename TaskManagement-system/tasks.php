<?php

  include 'logged_in.php'; 
  if(!isset($_SESSION['email'])){
    header ("Location: login.php");
  }


  $tasks = new \TASKS\Tasks();
  $la = $tasks->fetchValues($_SESSION['email'], 'creator');



  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $title = trim($_POST['title']);
    $description =  trim($_POST['description']);
    $due_date = trim($_POST['due_date']);
    $employee = trim($_POST['employee']);
    $id = $_POST['id'];
    // var_dump($_POST);exit;
    

    $errors = [];

    if($employee == ''){
      $errors['employee'] = "Please select an employee";
    }

    if($title == ''){
      $errors['title'] = "Task title is required";
    }

    if($description == ''){
      $errors['description'] = "Task description is requred";
    }

    if($due_date == ''){
      $errors['due_date'] = "Please choose a due date";
    }



    if(empty($errors)){
      
      $attributes = array_merge($_POST, ['creator' => $_SESSION['email']]);
      $tasks->setAttributes($attributes);
      $tasks->Update($id);
      
      
    }

  }
?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
<table class="table table-hover table-striped users">
                                    <thead class="thead">
                                        <tr>
                                          <th>Title</th>
                                          <th>Description</th>
                                          <th>Due Date</th>
                                          <th>Status</th>
                                          <th>Employee</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                      foreach ($la as $key) {

                                        $title = $key['title'];
                                        $description = $key['description'];
                                        $employee = $key['employee'];
                                        $due_date = $key['due_date'];
                                        
                                        if(isset($id)){
                                          
                                        if($key['id'] == $id){
                                           $title = $tasks->title;
                                           $description = $tasks->description;
                                           $employee = $tasks->employee;
                                           $due_date = $tasks->due_date;
                                         }
                                       }
                                        ?>
                                        <tr>
                                          <form method="POST" action="">
                                             <td><input type="text" name="title" value="<?= $title ?>"></td>
                                             <td><textarea name="description" id="description" rows="3"><?= $description ;?></textarea></td>
                                             <td><input type="date" name="due_date" value="<?= $due_date;  ?>"></td>
                                             <td><p><?= ($key['status'] == 0) ? 'Not Completed' : 'Completed'; ?></p>
                                             <td><select name="employee">
                                                     <option <?php if($employee == '') { echo 'selected=""'; } ?> value="">Select employee</option>
                                                     <option <?php if($employee == 'Marija Shakleva') { echo 'selected=""'; } ?> value="Marija Shakleva">Marija Shakleva</option>
                                                     <option <?php if($employee == 'Anja Kukovska') { echo 'selected=""'; } ?> value="Anja Kukovska">Anja Kukovska</option>
                                                     <option <?php if($employee == 'Ivana Dimitrova') { echo 'selected=""'; } ?> value="Ivana Dimitrova">Ivana Dimitrova</option>
                                                     <option <?php if($employee == 'Martina Linkova') { echo 'selected=""'; } ?> value="Martina Linkova">Martina Linkova</option>
                                                 </select>
                                             </td>
                                               <td>
                                                <button type="submit" name="id" value="<?php echo $key['id'];?>">Save</button>
                                              </td>
                                              <td>
                                                <a href="delete.php?id=<?php echo $key['id']; ?>">Delete</button>
                                              </td>
                                            </form>
                                        </tr>
                                       <?php }?>
                                    </tbody>
                                </table>
                                </div>
                                </div>
