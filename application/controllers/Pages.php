<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['title'] = "My Garden";
		$data['header'] = "My Garden";
		$this->load->view('pages/prime', $data);
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */