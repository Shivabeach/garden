<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$tmpl = array('table_open' => '<table cellpadding="5" cellspacing="5" class ="display">','row_start' =>'<tr class="cent">', 'row_alt_start' => '<tr class="cent">', 'table_close' => '</table>');
    $this->table->set_template($tmpl);

    if($query = $this->formsM->recieve())
    {
      $data['plant'] = $query;
    }
		$data['title'] = "My Garden";
		$data['header'] = "2026 Garden";
		$this->load->view('pages/prime', $data);
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */