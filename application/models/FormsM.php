<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormsM extends CI_Model
{
public function recieve()
{
	$this->db->select("id, date, action");
	$this->db->order_by("id", "asc");
	$query = $this->db->get("planted");
	return $query->result();
}


}