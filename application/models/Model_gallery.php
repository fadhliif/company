<?php 
class Model_gallery extends CI_Model{
	public function getGallery()
	{
		return $this->db->get('gallery')->result_array();

	}
} 	