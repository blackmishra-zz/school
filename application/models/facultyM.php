<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacultyM extends CI_Model {

	public function saverecords($tmp)
	{
		
		$this->db->insert('std_marks',$tmp);
		//$this->db->query($query);
	}

	public function displayrecords()
	{
		$query=$this->db->query("select * from std_marks");
		return $query->result();
	}
	
}