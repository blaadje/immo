<?php

class afficheBienLimited extends afficheBien{
	public function __construct(){
		$this -> biens = Bien::all(array( 'order' => 'id_bien desc', 'limit' => 3));
	}
}

 ?>
