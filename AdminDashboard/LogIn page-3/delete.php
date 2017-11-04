<?php
namespace DashboardDB;
require_once '../DB/users.php';
if(isset($_GET['id'])) {
    $user = new Users();
    $user->deleteUser($_GET['id']);
}

header("Location: ../manage-users.php");exit;