<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_riwayat_stok');
		$this->load->model('m_penjualan');
	}
			
	function dashboard(){
		
		//stok kompor
		$total_stok = $this->m_riwayat_stok->stok_kompor()->total;
		$total_terjual = $this->m_penjualan->t_kompor()->total;
		$stok = $total_stok - $total_terjual;
		echo "Stok Kompor : " . $stok . "<br>";
		
		//kompor tejual
		$d = $this->m_penjualan->t_kompor(12);
		echo "Kompor Terjual :" .$d->total. "<br>";
		
		//tabel riwayat penambahan stok kompor
		$data = $this->m_riwayat_stok->lists(12,21);
		foreach ($data as $d){
			echo " No Transaksi : ".$d->id_transaksi . "<br>";
			echo " Tanggal : ".$d->tanggal . "<br>";
			echo " Jumlah : ".$d->jumlah . "<br>";
			echo " Status : ".$d->status . "<br>";
		}
		
		//total bahan bakar
		$total_bahan = $this->m_riwayat_stok->stok_bahan()->total;
		$jual_bahan = $this->m_penjualan->t_bahan()->total;
		$jual = $total_bahan - $jual_bahan;
		echo "Bahan bakar tesedia: " . $jual . "<br>";
		
		//bahan bakar terjual
		$d = $this->m_penjualan->t_bahan(12);
		echo "Bahan Terjual :" .$d->total. "<br>";
		
		//tabel riwayat penambahan bahan bakar
		$data = $this->m_penjualan->lists(2424);
		foreach ($data as $q){
			echo " No Transaksi : ".$q->id_penjualan . "<br>";
			echo " Tanggal : ".$q->tanggal . "<br>";
			echo " Jumlah : ".$q->jumlah . "<br>";
			echo " Status : ".$q->status . "<br>";
		}
	}
}