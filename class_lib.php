<?php

class id {
	
	// explicitly adding class properties are optional - but is good practice
	var $id;
	var $table_name;
	var $message;	

	protected $connection;

    public function __construct(mysqli $connection,$table) {
        $this->connection = $connection;
		$this->table_name = $table;
    }
	
	public function get_id() {
		$mysqli = $this->connection;
		$query = "select year from  $this->table_name where year = ".date('Y');
		//echo $query;
		$result = $mysqli->query($query);
		
		//if thera are no entrys for current year set id to 1
		if ($result->num_rows == 0) $this->id = 1;
		
		//if there are entryes get last id number
		else {
			$query ="SELECT MAX( id ) maxId FROM (SELECT * FROM $this->table_name WHERE YEAR =".date('Y').") AS T;";
			//echo $query;
			$result = $mysqli->query($query);
			$temp = $result->fetch_object();
			$this->id = $temp->maxId + 1;
			if(!$result){
			$this->id = ("erorr");
			}
		}
		return $this->id;
	}
} 
?>
