<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_riwayat_stok extends CI_Model {
	var $tbl = 'riwayat_stok';

	public function insert($data){
		$res = $this->db->insert($this->tbl, $data);
		return $res;
	}

	public function lists($kode_transaksi,$id_user,$barang='kompor'){
			$this->db->where('kode_transaksi', $kode_transaksi);
			$this->db->where('id_user', $id_user);
			$this->db->where('barang', $barang);
			$data = $this->db->get('riwayat_stok');
			return $data->result();
			
			if ($result->num_rows() > 0)
			{
				return $result->row();
			}else{
				return FALSE;
			}
		}


	public function update($id_transaksi, $data){
		$this->db->where('id_transaksi', $id_transaksi);
			$res = $this->db->update($this->tbl,$data);
			return $res;
		}

	public function delete($id_transaksi){
		$this->db->where('id_transaksi',$id_transaksi);
		$res = $this->db->delete($this->tbl);
		}
}
