<?php 
namespace DashboardDB;

require_once 'db.php';

class Order extends DB{
	public $name;
	public $display_order;
	public $color;
	public $icon;
	public $number;
	public $text;
	

	function __construct(){
		parent:: __construct();
		$this->table = 'element_order';
	}

	public function generateItems($id){

		$query = "INSERT INTO $this->table ";
		$query .= "(`name`, `display_order`, `color`, `icon`, `number`, `text`, `user_id`) ";
		$query .= "VALUES ('Item1', '1', 'panel-magenta', 'fa-comments', '26', 'New Comments!', '$id'), ";
		$query .= "('Item2', '2', 'panel-pastel-green', 'fa-tasks', '12', 'New Tasks!', '$id'), ";
		$query .= "('Item3', '3', 'panel-light-blue', 'fa-shopping-cart', '124', 'New Orders!', '$id'), ";
		$query .= "('Item4', '4', 'panel-light-yellow', 'fa-support', '26', 'Support Tickets!', '$id') ";

		return $this->db->exec($query);


	}


	// public function updateItems($ids){
	// 	$display_order = 1;
	// 	foreach ($ids as $id) {
	// 		$query = "UPDATE element_order SET display_order = $display_order WHERE id = $id";
	// 		var_dump($this->db->exec($query));exit;
	// 		return $this->db->exec($query);
	// 		$display_order ++;
	// 	}
	// }


	public function updateItems($ids){
		
		$display_order = 1;
		$pdo = $this->db->prepare("UPDATE element_order SET display_order = :display_order WHERE id = :id");
		$pdo->bindParam(':id', $id);
		$pdo->bindParam(':display_order', $display_order);
		foreach ($ids as $id) {
			echo $id;
			$pdo->execute();
			var_dump($pdo->errorInfo());
			$display_order ++;
		}
	}


}

?>