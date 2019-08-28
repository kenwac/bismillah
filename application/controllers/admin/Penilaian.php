<?php

class Penilaian extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/penilaian");
	}

	public function nilai()
	{
		// $nama = $_POST['nama'];
		// $nim = $_POST['nim'];
		$motorik=$_POST['motorik'];
		$Kreativ =$_POST['Kreativ'];
		// $Projek=$_POST['Projek'];
		
		$data['motorik']=$motorik;
		$data['Kreativ'] =$Kreativ;
		// $data['nama']= $nama;
		// $data['nim']=$nim;
		// $data['Projek']=$Projek;
		

		$this->load->view('admin/viewNilai',$data);
	}

	public function print()
	{

	}
}