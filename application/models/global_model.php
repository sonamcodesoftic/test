<?php

Class Global_model extends CI_Model {


	public function add($table, $data) {
		return $this->db->insert($table, $data);
	}
    
	public function show_data(){
      return $this->db->query('SELECT * FROM users') ;
	}
	public function delete($table, $where) {
		return $this->db
			->delete($table, $where);	
	}
	/*
	public function update($table, $where, $data) {
		$this->db
			->where($where)
			->update($table, $data);s
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	*/


	public function select_single($table, $where) {
		$q = $this->db
			->where($where)
			->get($table);
		return $q->row_array();
	}

	public function select_all($table, $where = array(), $limit = False, $offset = False) {
		$q = $this->db
			->where($where)
			->limit($limit, $offset)
			->get($table);
		return $q->result_array();
	}

	public function get_all($table){
		$query = $this->db->get($table);
		return $query->result_array();
	}

 	public function data_model() {
	    $this->db->select('*');
	    $this->db->from('admin');
	    $id = $this->db->get()->num_rows();
	    return $id;
	}

	public function activate($user_id){
		$this->db->query("UPDATE admin SET isActive = 1 
		WHERE user_id =id", array($user_id));
	}

	public function show()
    {
        $query=$this->db->get('users',);
        return $query->result_array();
    }

}