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
			$result = $this->db->get('riwayat_stok');
			
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
		
	public function lists_kompor(){
		$this->db->where('barang', 'kompor');
		$result = $this->db->get('riwayat_stok');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return FALSE;
		}
	}
	
	public function penambahan_kompor($bulan){
		$this->db->select('SUM(jumlah) as total');
		$this->db->where('DATE_FORMAT(tanggal,"%m")',$bulan);
		$this->db->where('barang', 'kompor');
		$this->db->where('status',3);
		$result = $this->db->get($this->tbl);
		
		if ($result->num_rows() > 0){
			return $result->row();
		}else{
			return FALSE;
		}
	}
	
	public function penambahan_bahan($bulan){
	$this->db->select('SUM(jumlah) as total');
	$this->db->where('DATE_FORMAT(tanggal,"%m")',$bulan);
	$this->db->where('barang', 'bahanbakar');
	$this->db->where('status',3);
	$result = $this->db->get($this->tbl);
		
		if ($result->num_rows() > 0){
			return $result->row();
		}else{
			return FALSE;
		}
	}
}
