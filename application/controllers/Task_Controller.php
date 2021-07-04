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
	public function edit_task_view()
	{
		$taskId = $this->uri->segment('3');
		$data['taskId'] = $taskId;
		
		$query = $this->db->get_where('tbl_task', array('id' => $taskId));
		$data['records'] = $query->result();
		
		$this->load->view('Task_Edit_View', $data);
	}

	public function edit_task()
	{
		Debug_Controller::errors.append('Control passed from Task_Edit_View to Task_Controller::edit_task() method');
		

		$taskId = $this->uri->segment('3');
		echo "This is from the edit task function ";
		echo "The id to be deleted:". $taskId;

		echo "task Description from post parameter:".$this->input->post('taskDescription');

/*
		$date_default_timezone_set('Asia/Calcutta');
		$taskCreatedTimeStamp = date('Y-m-d H:i:s');

		$data = array(
			'taskDescription' => $this->input->post('taskDescription'),
			'timeStamp'		  => $taskCreatedTimeStamp,
			'taskStatus' 	  => $this->input->post('taskStatus')
		);

		$this->Task_Model->update($data, $taskId);


		$query = $this->db->get('tbl_task');
		$data['records'] = $query->result();

		$this->load->view('Task_View', $data);*/

	}
}

?>