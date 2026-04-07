<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormsM extends CI_Model
{
public function recieve()
{
	$this->db->select("id, date, action");
	$this->db->order_by("id", "desc");
	$query = $this->db->get("planted");
	return $query->result();
}
public function soil()
{
	$this->db->select("id, date, category, action");
	$this->db->order_by("id", "desc");
	$query = $this->db->get("weather");
	return $query->result();
}
public function temp()
	{
	$this->db->select("id, date, slug");
	$this->db->order_by("id", "asc");
	$query = $this->db->get("weather");
	return $query->result();
	}
}