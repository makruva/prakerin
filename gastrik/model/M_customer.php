<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_customer extends CI_Model {
var $tbl = 'customer';

public function insert($data){
	$res = $this->db->insert($this->tbl, $data);
	return $res;
	}

public function get_by_agen($id_agen){
		$this->db->where('id_agen', $id_agen);
		$data = $this->db->get('customer');
		return $data->result();
		
		if ($result->num_rows() > 0)
		{
			return $result->row();
		}else{
			return FALSE;
		}
	}

public function get_by_distributor($id_distributor){
		$this->db->where('id_distributor', $id_distributor);
		$data = $this->db->get('customer');
		return $data->result();
		
		if ($result->num_rows() > 0)
		{
			return $result->row();
		}else{
			return FALSE;
		}
	}


public function update($id_cust, $data){
	$this->db->where('id_cust', $id_cust);
		$res = $this->db->update($this->tbl,$data);
		return $res;
	}

public function delete($id_cust){
	$this->db->where('id_cust',$id_cust);
	$res = $this->db->delete($this->tbl);
	}
}
