<?php 

namespace DashboardDB;

abstract class DB{
	const DB_HOST = 'localhost';
	const DB_USERNAME = 'root';
	const DB_PASSWORD = '';
	const DB_DB = 'dashboard';
	protected $db;
	protected $table;

	public function __construct(){
		try{

			$this->db = new \PDO("mysql:host=".self::DB_HOST.";"."dbname=".self::DB_DB,self::DB_USERNAME,self::DB_PASSWORD);

		} catch(\PDOException $ex){
			
			echo $ex->getMessage();
		}
		 catch(\Exception $ex){
			
			echo $ex->getMessage();
		}
	}

	public function __destruct(){
		$this->db = NULL;
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


	public function checkIfUserExists($attribute, $column){
		$query = "SELECT `id` FROM $this->table WHERE `$column` = '$attribute'";
		$pdo = $this->db->query($query, \PDO::FETCH_ASSOC);
		$result = $pdo->fetch();
		return ($result === FALSE) ? FALSE : TRUE;
	}


	public function listItems($userid){
		$result = '';
		$query = "SELECT * FROM $this->table WHERE user_id = $userid ORDER BY display_order ";
		//echo $query;
		$pdo = $this->db->query($query, \PDO::FETCH_ASSOC);
		//var_dump($pdo);exit;
			while($div = $pdo->fetch()){

				$result .= 
					'<div class="col-lg-3 col-md-6" id="item_'. $div['id'].'">'.
                    '<div class="panel '.$div["color"] .'">'.
                        '<div class="panel-heading">'.
                            '<div class="row">'.
                                '<div class="col-xs-3">'.
                                    '<i class="fa '. $div["icon"] .' fa-5x"></i>'.
                                '</div>'.
                                '<div class="col-xs-9 text-right">'.
                                    '<div class="huge">'.$div["number"].'</div>'.
                                    '<div>'.$div["text"].'</div>'.
                                '</div>'.
                            '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>';


				
			}
			return $result;
	}

}



 ?>