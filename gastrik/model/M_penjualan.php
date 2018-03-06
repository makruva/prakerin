<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penjualan extends CI_Model {
	var $tbl = 'penjualan';

	public function insert($data){
		$res = $this->db->insert($this->tbl, $data);
		return $res;
	}

	public function lists($id_user){
		//$this->db->where('id_user', $id_user);
		//$data = $this->db->get('penjualan Natural JOIN customer ON penjualan.id_pelanggan = customer.id_cust');
		//return $data->result();
		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->join('customer', 'penjualan.id_pelanggan = customer.id_cust');
		$result = $this->db->get();
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
	
	public function t_kompor($bulan){
	$this->db->select('SUM(jumlah) as total');
	$this->db->where('DATE_FORMAT(tanggal,"%m")',$bulan);
	$this->db->where('jenis', 'kompor');
	$result = $this->db->get($this->tbl);
		
		if ($result->num_rows() > 0){
			return $result->row();
		}else{
			return FALSE;
		}
	}
	
	public function t_bahan($bulan){
	$this->db->select('SUM(jumlah) as total');
	$this->db->where('DATE_FORMAT(tanggal,"%m")',$bulan);
	$this->db->where('jenis', 'bahanbakar');
	$result = $this->db->get($this->tbl);
		
		if ($result->num_rows() > 0){
			return $result->row();
		}else{
			return FALSE;
		}
	}
}