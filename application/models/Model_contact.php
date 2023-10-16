<?php

class Model_contact extends CI_Model{

	public function getContact()
	{
		return $this->db->get('contact')->result_array();

	}

	public function inputData()
	{
		$data = [
		"email" =>$this->input->post('email', true),
		"pesan" =>$this->input->post('pesan', true)
	];
	$this->db->insert('contact', $data);
	}
}