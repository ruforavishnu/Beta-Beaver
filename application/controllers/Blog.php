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

		
		
		$query = $this->db->query('SELECT * FROM tbl_task where id=\'17\'');
		$query2 = $this->db->get('tbl_task');
		$results = $query2->result();

		foreach($results as $row)
		{
			echo "<br> ". $row->id. " ";
			echo $row->taskDescription. " ";
			echo $row->timeStamp. " ";
			echo $row->taskStatus. " ";
		}

		echo "<br><hr><br>". "Total Results:". count($results);

		date_default_timezone_set("Asia/Calcutta");
		$taskCreatedTimeStamp = date('Y-m-d H:i:s');

		$data = array(
			'taskDescription' => ' this is task created by code',
			'timeStamp' 	  => $taskCreatedTimeStamp,
			'taskStatus'      => 'just beginning'
		);

		$this->db->insert("tbl_task", $data);

	}

}

?>