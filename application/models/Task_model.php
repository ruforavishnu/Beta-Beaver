<?php
class Task_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function update($data, $taskId)
	{
		$this->db->set($data);
		$this->db->where('id', $taskId);
		$this->db->update('tbl_task', $data);
	}
}

?>