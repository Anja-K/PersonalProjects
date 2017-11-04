<?php 
// namespace TASKS;

require 'tasks.php';
if(isset($_GET['id'])) {
	$tasks = new \TASKS\Tasks();
	$tasks->Delete($_GET['id']);
}

header ("Location: tasks.php");exit;

 ?>