<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "root1234", "ombharath");
		return $this->con;
	}
}

?>