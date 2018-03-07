<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_customer');
	}
	
	function index(){
		$data = $this->m_customer->get_by_agen(35354);
		foreach ($data as $d){
			echo " Id Customer : ".$d->id_cust . "<br>";
			echo " Id Distributor : ".$d->id_distributor . "<br>";
			echo " Id agen : ".$d->id_agen . "<br>";
			echo " Nama : ".$d->nama . "<br>";
			echo " Alamat : ".$d->alamat . "<br>";
			echo " Provinsi : ".$d->provinsi . "<br>";
			echo " Kabupaten : ".$d->kabupaten . "<br>";
			echo " Kecamatan : ".$d->kecamatan . "<br>";
			echo " Kodepos : ".$d->kodepos . "<br>";
			echo " Kontak : ".$d->kontak . "<br>";
			echo " Jenis Kelamin : ".$d->jenis_kelamin . "<br>";
			}
		}
		
}