<?php
class Produtos_model extends CI_Model
{
	public function selectProtudos(){
		$this->db->select();
		$this->db->from('produto');
		$query =  $this->db->get()->result_array();
		return $query;
	}
}