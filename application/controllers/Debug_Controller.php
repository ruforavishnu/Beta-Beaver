<?php

class Debug_Controller extends CI_Controller
{
	
	

	
	public function index()
	{
		echo 'This is the error log file. Invoked from :'. __METHOD__.'()';
		echo "<br>";

		$reqdPath = APPPATH.'controllers\Debug_Messages.php';
		echo 'Value of reqdPath:'.$reqdPath;
		require_once($reqdPath);

		/*Debug_Messages::init();
		echo "<br>";
		echo 'Successfully completed executing Debug_Messages::init() method';
*/

		Debug_Messages::reset_logs();
		echo "<br>";
		echo 'Successfully completed executing Debug_Messages::reset_logs() method';

		Debug_Messages::add_log('this is my error msg#1');
		echo "<br>";
		echo 'Successfully completed executing Debug_Messages::add_log() method';		

		echo "<br>";
		$a = Debug_Messages::show_logs();
		echo ' Value of show_logs returned object:';
		var_dump($a);


		

	}
}


?>