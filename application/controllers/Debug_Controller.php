<?php

class Debug_Controller extends CI_Controller
{
	
	public static $errors = array();






	
	public function index()
	{
		echo 'This is the error log file ';
		echo "<br>";
		
		echo "<br>";
		echo $errors;

	}
}


?>