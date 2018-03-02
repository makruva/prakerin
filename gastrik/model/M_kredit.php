<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kredit extends CI_Model {
	var $tbl = 'riwayat_kredit';

	public function insert($data){
		$res = $this->db->insert($this->tbl, $data);
		return $res;
	}

	public function detail($id_penjualan){
		$this->db->where('id_penjualan', $id_penjualan);
		$data = $this->db->get('riwayat_kredit');
		return $data->result();
		
		if ($result->num_rows() > 0)
		{
			return $result->row();
		}else{
			return FALSE;
		}
	}

	public function update($id_penjualan, $data){
		$this->db->where('id_penjualan', $id_penjualan);
			$res = $this->db->update($this->tbl,$data);
			return $res;
		}

	public function delete($id_penjualan){
		$this->db->where('id_penjualan',$id_penjualan);
		$res = $this->db->delete($this->tbl);
		}
}
