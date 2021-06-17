<?php

class Blog extends CI_Controller
{
	public function index()
	{
		echo "<br> Hello world";
		
	}
	public function echoVishnu()
	{
		echo "<br>Yea, vishnu is building his empire right now.";

		$this->load->view('viewtest1');
	}

}

?>