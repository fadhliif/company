<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_gallery');
    }

    public function index()
    {
        $data['gallery'] = $this->Model_gallery->getGallery();
        $this->load->view("templates_home/header");
        $this->load->view("gallery", $data);
        $this->load->view("templates_home/footer");
    }
}