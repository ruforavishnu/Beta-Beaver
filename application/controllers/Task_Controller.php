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
		
		$this->load->view('Task_Edit_View', $data);
	}

	public function edit_task()
	{
		$taskId = $this->uri->segment('3');
		echo "This is from the edit task function ";
		echo "The id to be deleted:". $taskId;


		$date_default_timezone_set('Asia/Calcutta');
		$taskCreatedTimeStamp = date('Y-m-d H:i:s');

		$data = array(
			'taskDescription' => $this->input->post('txt_EditTaskDescription'),
			'timeStamp'		  => $taskCreatedTimeStamp,
			'taskStatus' 	  => $this->input->post('select_TaskStatus')
		);

		$this->Task_Model->update($data, $taskId);


		$query = $this->db->get('tbl_task');
		$records = $query->result();

		var_dump($records);

	}
}

?>