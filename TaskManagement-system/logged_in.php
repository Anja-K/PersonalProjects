<?php

	namespace TASKS;

	require 'db.php';
	$users = new \TASKS\Users();
	$user = $users->fetchValues($_SESSION['email'], 'email');

	$phpself = explode("/", "{$_SERVER['PHP_SELF']}");
	$script = $phpself[count($phpself) - 1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tasks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/d20de17c01.js"></script>
</head>
<body>
	<div class="container-fluid">
		<ul class="nav nav-tabs">
		  <li role="presentation" <?php if($script == 'insert_tasks.php'){ echo "class='active'"; } ?>><a href="insert_tasks.php">Insert Tasks</a></li>
		  <li role="presentation" <?php if($script == 'assigned_tasks.php'){ echo "class='active'"; } ?>><a href="assigned_tasks.php">Assigned tasks</a></li>
		  <li role="presentation" <?php if($script == 'tasks.php'){ echo "class='active'"; } ?>><a href="tasks.php">Created tasks</a></li>
		  <li style="float: right;"><a href="logout.php">Log out</a></li>
		</ul>
		<h3 class="col-md-4 col-md-offset-4 userStyle">User: <span> <?= $user[0]['fullname']; ?> </span> </h3>
	</div>
</body>
</html>
