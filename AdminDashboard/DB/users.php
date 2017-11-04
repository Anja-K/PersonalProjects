<?php 
namespace DashboardDB;

require_once 'db.php';

class Users extends DB{
	public $username;
	public $password;
	public $fullname;
	public $position;
	public $image;
	public $role;
	

	function __construct(){
		parent:: __construct();
		$this->table = 'users';
	}



	public function readAll(){
		$query = "SELECT * FROM $this->table"; 
		$pdoStatementObject = $this->db->query($query, \PDO::FETCH_CLASS, __CLASS__);
		return $pdoStatementObject->fetchAll();
		

	}

	public function retreiveAttribute($user){
		$query = "SELECT * FROM users WHERE `username` = '$user' ";
		$pdoStatementObject = $this->db->query($query, \PDO::FETCH_ASSOC);
		return $pdoStatementObject->fetch();
		
	}

	public function updateUser($id){
			$query = "UPDATE {$this->table} SET ";
        	$query.= " username = '{$this->username}',";
        	$query.= " password = '{$this->password}',";
        	$query.= " fullname = '{$this->fullname}',";
        	$query.= " position = '{$this->position}',";
        	$query.= " image = '{$this->image}',";
        	$query.= " role = '{$this->role}'";
        	$query.= " WHERE id = $id";
        	
        	return $this->db->exec($query);
	}



	public function deleteUser($id){
		$query = "DELETE FROM users WHERE `id` = '$id' ";
		$pdoStatementObject = $this->db->query($query, \PDO::FETCH_ASSOC);
		return $pdoStatementObject->fetch();
		
	}
	


}




 ?>