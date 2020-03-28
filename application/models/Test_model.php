<?php

class Test_model extends CI_Model{
	public function get_table_entry(){
		$query = $this->db->get('Job', 10);
		
		return $query->result_array();
	}

	public function get_images_by_id($id){
		$this->db->select('image');
		$this->db->from('Images');
		$this->db->where('jobID', $id);
		$query = $this->db->get();

		return $query->result_array();
	}
}