<?php

class Penilaian extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		/*$this->load->helper('form'); 
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');*/

        //$this->load->view admin/overview.php
        $this->load->view("admin/penilaian");
	}

	public function nilai()
	{
		/* Data Diri
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$data['nama']= $nama;
		$data['nim']=$nim;
		$data['Projek']=$Projek;
		$data['alamat']=$alamat; */

		//Lego
		$Motorik=$_POST['Motorik'];
		$Kreativitas=$_POST['Kreativitas'];
		$Ketepatan_Bentuk=$_POST['Ketepatan_Bentuk'];
		$Ketepatan_Coding=$_POST['Ketepatan_Coding'];
		$Pengendalian_Robot=$_POST['Pengendalian_Robot'];
		
		$data['Motorik']=$Motorik;
		$data['Kreativitas']=$Kreativitas;
		$data['Ketepatan_Bentuk']=$Ketepatan_Bentuk;
		$data['Ketepatan_Coding'] =$Ketepatan_Coding;
		$data['Pengendalian_Robot']=$Pengendalian_Robot;
		

		$this->load->view('admin/HasilRapot/viewNilai',$data);
		
	}

	public function print()
	{

	}



	/*function validasi()
	{
$this->load->helper('form'); 
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('Motorik', 'motorik', 'required');
		$this->form_validation->set_rules('Kreativitas', 'kreativitas', 'required');
		$this->form_validation->set_rules('Ketepatan_Bentuk', 'Ketepatan Bentuk', 'required');
		$this->form_validation->set_rules('Ketepatan_Coding', 'ketepatan Coding', 'required');
		$this->form_validation->set_rules('Pengendalian_Robot', 'pengendalian Robot', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/lego');
		}
		else
		{
			echo 'validasi sukses!';
		}
	
}*/
}
