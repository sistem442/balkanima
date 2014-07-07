<?php

class select_year {
	
	var $year;
	
	public function __construct($start_year) {
        $this->year = $start_year;
    }
	
	public function get_select_year_from() {
		$select = '';
		$current_year = date('Y');
		$selected = '<option select="selected">';
		while($this->year-1 < $current_year){
			$select = $select.$selected.$current_year.'</option>';
			$current_year--;
			$selected = '<option>';
			}	
		return $select;
	}
} 
?>
