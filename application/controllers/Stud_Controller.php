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
	
	public function update_student_view()
	{
		$roll_no = $this->uri->segment('3');
		$query = $this->db->get_where('stud', array('roll_no'=> $roll_no));
		$data['records'] = $query->result();
		$data['old_roll_no'] = $roll_no;
		$this->load->view('Stud_Edit', $data);

	}
	public function update_student()
	{
		$data = array(
				'roll_no' => $this->input->post('roll_no'),
				'name' => $this->input->post('name')
		);

		$old_roll_no = $this->input->post('old_roll_no');
		$this->Stud_Model->update($data, $old_roll_no);

		$query = $this->db->get('stud');
		$data['records'] = $query->result();
		$this->load->view('Stud_View', $data);


	}
	public function delete_student()
	{
		$roll_no = $this->uri->segment('3');
		$this->Stud_Model->delete($roll_no);

		$query = $this->db->get('stud');
		$data['records'] = $query->result();
		$this->load->view('Stud_View', $data);
	}

	

	
}


?>