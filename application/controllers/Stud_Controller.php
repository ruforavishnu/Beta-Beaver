<?php

class Stud_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$query = $this->db->get("stud");
		$data['records'] = $query->result();

		$this->load->view('Stud_View', $data);
	}

	public function add_student_view()
	{
		$this->load->view('Stud_add');
	}

	public function add_student()
	{
		$data = array(
						'roll_no' => $this->input->post('roll_no'),
						'name'    => $this->input->post('name')
		);

		$this->Stud_Model->insert($data);

		$query = $this->db->get("stud");
		$data['records'] = $query->result();
		$this->load->view('Stud_View', $data);
	}

	

	
}


?>