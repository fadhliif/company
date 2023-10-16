<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller{
 	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_contact');
    }

	public function index()
    {
        $data['contact'] = $this->Model_contact->getContact();
        $this->load->view("templates_home/header");
        $this->load->view("contact", $data);
        $this->load->view("templates_home/footer");
    }



	public function simpanData()
	{
		$this->Model_contact->inputData();
        redirect('contact');
	}
}