<?php 
	include 'logged_in.php';
	if(!isset($_SESSION['email'])){
	    header ("Location: login.php");
	  }

  $tasks = new \TASKS\Tasks();
  $task = $tasks->fetchValues($user[0]['fullname'], 'employee');

  if(isset($_POST['status'])){ 

  	$tasks->UpdateStatus($_POST['status'], $_POST['id']);
  }

 ?>
<?php 
 	foreach($task as $list){
 		
 	 ?>
<div class="row">
 	<div class="col-md-6 col-md-offset-3 tasksBox">
		<form method="POST">
		 <ul class="list-group">
			  <li class="list-group-item listBorder"><b>Title: </b> <?= $list['title'] ;?></li>
			  <li class="list-group-item listBorder"><b>Description: </b> <?= $list['description'] ;?></li>
			  <li class="list-group-item listBorder"><b>Due date: </b> <?= $list['due_date'] ;?></li>
			  <li class="list-group-item listBorder"><b>Creator: </b> <?= $list['creator'] ;?></li>
			   <?php 

			   $status = $list['status'];


			   if(isset($_POST['id'])){
			   	 if($_POST['id'] == $list['id']){
					   $status = 1;
				 }
			   }
			   
			  ?>
			  <li class="list-group-item listBorder"><b>Status: </b> <?= ($status == 0) ? 'not completed ' : 'completed ';?>
			  <?php if($status == 0){	$id = $list['id']; echo '
			  <input type="checkbox" name="status" value="1" />
			</li>
			<li class="list-group-item listBorder"><button class="saveButton" type="submit" name="id" value="' .$id. '">Save Changes</button></li>';} ?>
		</ul>

		</form>
	</div>
</div>

<?php  }?>

