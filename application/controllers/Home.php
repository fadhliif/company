<?php
class Home extends CI_Controller{
	public function index()
	{
		$this->load->view("templates_home/header");
		$this->load->view("home");
		$this->load->view("templates_home/footer");
	}

	public function gallery()
	{
		$this->load->view("templates_home/header");
		$this->load->view("gallery");
		$this->load->view("templates_home/footer");
	}

	public function career()
	{
		$this->load->view("templates_home/header");
		$this->load->view("career");
	}

	public function contact()
	{
		$this->load->view("templates_home/header");
		$this->load->view("contact");
		$this->load->view("templates_home/footer");
	}

	public function jaya()
	{
		$this->load->view("templates_home/header");
		$this->load->view("jaya");
		$this->load->view("templates_home/footer");
	}

	public function indomanufaktur()
	{
		$this->load->view("templates_home/header");
		$this->load->view("indomanufaktur");
		$this->load->view("templates_home/footer");
	}

	public function tangguhindustri()
	{
		$this->load->view("templates_home/header");
		$this->load->view("tangguhindustri");
		$this->load->view("templates_home/footer");
	}

	public function sejarah()
	{
		$this->load->view('templates_home/header');
		$this->load->view('sejarah');
		$this->load->view('templates_home/footer');
	}
}