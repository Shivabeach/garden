<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forms extends CI_Controller
{
	public function recieve() {
		$data = [
			"date"    => trim($this->input->post('date')),
			"action" => trim($this->input->post('action'))
	];
		return $this->db->insert('planted', $data);
	}

}
