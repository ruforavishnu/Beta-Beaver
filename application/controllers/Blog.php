<?php

class Blog extends CI_Controller
{
	public function index()
	{
		echo "<br> Hello world. This is echo output from Blog class' index() function";
		
	}
	public function echoVishnu()
	{
		echo "<br>Yea, vishnu is building his empire right now.";

		$this->load->view('viewtest1');
	}
	public function echoCompleteTableData()
	{
		$db = \Config\Database::connect();
		
		$query = $db->query('SELECT * FROM tbl_task');
		$results = $query->results();

		foreach($results as $row)
		{
			echo "<br> ". $row->id. " ";
			echo $row->taskDescription. " ";
			echo $row->timeStamp. " ";
			echo $row->taskStatus. " ";
		}

		echo "<br><hr><br>". "Total Results:". count($results);

	}

}

?>