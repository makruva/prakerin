<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil_agen extends CI_Model {
	var $tbl = 'profil_agen';

public function insert($data){
	$res = $this->db->insert($this->tbl, $data);
	return $res;
	}

public function detail($id_agen){
		$this->db->where('id_agen', $id_agen);
		$data = $this->db->get('profil_agen');
		return $data->result();
		
		if ($result->num_rows() > 0)
		{
			return $result->row();
		}else{
			return FALSE;
		}
	}

public function update($id_agen,$data){
	$this->db->where('id_agen', $id_agen);
		$res = $this->db->update($this->tbl,$data);
		return $res;
	}

public function delete($id_agen){
	$this->db->where('id_agen',$id_agen);
		$res = $this->db->delete($this->tbl);
	}
}
