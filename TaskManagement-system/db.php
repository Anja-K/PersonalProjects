<?php

	namespace TASKS;
	session_start();

	// if(!isset($_SESSION['email'])){
	// 	header ("Location: login.php");
	// }

	abstract class DB{

		const DB_HOST = 'localhost';
		const DB_USERNAME = 'root';
		const DB_PASSWORD = '';
		const DB_DB = 'task_managment';
		protected $db;
		protected $table;

		function  __construct(){

			try{
				$this->db = new \PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_DB, self::DB_USERNAME, self::DB_PASSWORD);
			}catch(\PDOException $ex){
				echo $ex->getMessage();
			}catch(\Exception $ex){
				echo $ex->getMessage();
			}

		}


		public function save(){

			$properties = get_object_vars($this);
			unset($properties['table']);
			unset($properties['db']);

			$columns = array_keys($properties);
			$values = array_values($properties);

			$query = "INSERT INTO {$this->table}" . "(" . implode(',' , $columns) . ")" . " VALUES (" . '"' . implode('","', $values) . '"' . " ) ";

			return $this->db->exec($query);

		}

		public function setAttributes($attributes){

			foreach ($attributes as $key => $value) {
				if(property_exists($this, $key)){
					$this->{$key} = $value;
				}
			}

		}

		public function fetchValues($val, $param){
			$query = "SELECT * FROM {$this->table} WHERE {$param} = '$val'";
			$pdoStatementObject = $this->db->query($query, \PDO::FETCH_ASSOC);
			return $pdoStatementObject->fetchAll();
		}


		public function __destruct(){
			$this->db = NULL;
		}


	}

	class Users extends DB{
		public $id;
		public $email;
		public $password;
		public $fullname;

		function  __construct(){
			parent::__construct();
			$this->table = 'users';
		}

	}

	class Tasks extends DB{
		public $title;
		public $description;
		public $due_date;
		public $employee;
		public $creator;		

		function  __construct(){
			parent::__construct();
			$this->table = 'tasks';
		}


		public function Update($id){
			$query = "UPDATE {$this->table} SET ";
        	$query.= " title = '{$this->title}',";
        	$query.= " description = '{$this->description}',";
        	$query.= " due_date = '{$this->due_date}',";
        	$query.= " employee = '{$this->employee}'";
        	$query.= " WHERE id = $id";
        	
        	return $this->db->exec($query);

		}

		public function UpdateStatus($status, $id){
			$query = "UPDATE {$this->table} SET status = {$status} WHERE id = {$id}";
			return $this->db->exec($query);
		}

		public function Delete($id){

			$query = "DELETE FROM {$this->table} WHERE id = {$id}";
			return $this->db->exec($query);
		}

	}


?>
