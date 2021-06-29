<?php

class Task_Controller extends CI_Controller
{
	public function index()
	{
		//TODO: show the dashboard of the tasks in tbl_Task
		$query = $this->db->get('tbl_Task');
		$data['records']	= $query->result();

		$this->load->view('Task_View', $data);

	}	
}

?>