<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengeluaran extends CI_Model {
	var $tbl = 'pengeluaran';
	
	public function lists($id_toko){
		$this->db->where('id_toko', $id_toko);
		$data = $this->db->get('pengeluaran');
		return $data->result();
		
		if ($result->num_rows() > 0)
		{
			return $result->row();
		}else{
			return FALSE;
		}
	}
	public function insert($data){
		$res = $this->db->insert($this->tbl, $data);
		return $res;
	}
	
	public function update($id_pengeluaran,$data){
		$this->db->where('id_pengeluaran', $id_pengeluaran);
		$res = $this->db->update($this->tbl,$data);
		return $res;
	}
	
	public function delete($id_pengeluaran){
		$this->db->where('id_pengeluaran',$id_pengeluaran);
		$res = $this->db->delete($this->tbl);
	}
}
