<?php

class Datasiswa extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}


	public function data()
	{
		// Data Diri
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$data['nama']= $nama;
		$data['nim']=$nim;

		$this->load->view('admin/HasilRapot/viewNilai',$data);

	}
}
