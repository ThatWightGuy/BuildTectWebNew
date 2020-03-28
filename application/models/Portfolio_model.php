<?php

class Portfolio_model extends CI_Model{
	public function get_project_types(){
		$this->db->select('*');
		$this->db->from('ProjectType');
		$this->db->order_by('projectType');
		$query = $this->db->get();

		return $query->result_array();
	}
}

?>