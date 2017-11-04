<?php 
	include 'logged_in.php'; 
	if(!isset($_SESSION['email'])){
		header ("Location: Login.php");
	}

	$employee = $title = $description = $due_date = '';

	if(isset($_POST['submit'])){
		$title = trim($_POST['title']);
		$description =  trim($_POST['description']);
		$due_date = trim($_POST['due_date']);
		$employee = trim($_POST['employee']);
		$errors = [];
		$success = [];

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
			unset($_POST['submit']);
			$attributes = array_merge($_POST, ['creator' => $_SESSION['email']]);
			$newTask = new \TASKS\Tasks();
			$newTask->setAttributes($attributes);
			$success['task'] = '<div class="alert alert-success alertSuccess" role="alert">
 					 <strong>Well done!</strong> Task submitted.
				</div>';
			if ($newTask->save() != false) {
				echo $success['task'];
			}
			$employee = $title = $description = $due_date = '';
		}

	}


 ?>

 	<div class="row">
 	<div class="col-md-6 col-md-offset-3 tasksBox">
	<form method="POST">
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input 	name="title" type="text" class="form-control" id="title" placeholder="Title" value="<?= $employee; ?>">
	    <p class="help-block"><?= isset ($errors['title']) ? $errors['title'] : ''; ?></p>
	  </div>
	  <div class="form-group">
	    <label for="description">Task description</label>
	    <textarea name="description" id="description" class="form-control" rows="3"><?php echo $description;?></textarea>
	    <p class="help-block"><?= isset ($errors['description']) ? $errors['description'] : ''; ?></p>
	  </div>
	  <div class="form-group">
	  	<label for="due_date">Due date</label>
            <input name="due_date" id="due_date" type='date' class="form-control" value="<?= $due_date; ?>" />
            <p class="help-block"><?= isset ($errors['due_date']) ? $errors['due_date'] : ''; ?></p>
      </div>
      <div class="form-group">
	    <label for="employee">Task for:</label>
	    <select name="employee">
            <option <?php if($employee == '') { echo 'selected=""'; } ?> value="">Select employee</option>
            <option  <?php if($employee == 'Marija Shakleva') { echo 'selected=""'; } ?> value="Marija Shakleva">Marija Shakleva</option>
            <option  <?php if($employee == 'Anja Kukovska') { echo 'selected=""'; } ?> value="Anja Kukovska">Anja Kukovska</option>
            <option  <?php if($employee == 'Ivana Dimitrova') { echo 'selected=""'; } ?> value="Ivana Dimitrova">Ivana Dimitrova</option>
            <option <?php if($employee == 'Martina Linkova') { echo 'selected=""'; } ?> value="Martina Linkova">Martina Linkova</option>
         </select>
	    <p class="help-block"><?= isset ($errors['employee']) ? $errors['employee'] : '' ;?></p>
	  </div>
	  <button name="submit" type="submit" class="taskButton">Submit</button>
</form>
</div>
</div>
