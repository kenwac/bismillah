<?php
Class PrintPDF extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf=new FPDF('P','cm','Legal');             
        $pdf->AddPage();                         
        $pdf->SetFont('Arial','B',14);                         
        //$pdf->Image('logo.jpg',1,1,2,2);    
        $pdf->Image(dirname(APPPATH).'/assets/img/logo.png',1,1,2,2);                    
        $pdf->SetX(3);       
        $content = $this->load->view('contact');  
        //$pdf->writeHTML($content, true, false, true, false, '');    
        $pdf->MultiCell(19.5,0.5,'ROBONESIA.ID ROBOTICS SCHOOL',0,'L');                         
        $pdf->SetX(3);             
        $pdf->MultiCell(19.5,0.5,' Jl. Indah Raya Blok I4 No. 8, Telp. 085721133032',0,'L');                         
        $pdf->SetFont('Arial','B',10);             
        $pdf->SetX(3);             
        $pdf->MultiCell(19.5,0.5,'Kel. Cipadung Kidul. Kec. Panyileukan Bandung',0,'L');                         
        $pdf->SetX(3);             
        $pdf->MultiCell(19.5,0.5,'website : www.robonesia.id Info www.robonesia@gmail.com',0,'L');                         
        $pdf->Line(1,3.1,20.5,3.1);            
        $pdf->SetLineWidth(0.1);             
        $pdf->Line(1,3.2,20.5,3.2);                         
        $pdf->SetLineWidth(0);
        //$pdf->MultiCell(24,0.5,' Jl. Indah Raya Blok I4 No. 8, Telp. 085721133032',0,'L');             
        $pdf->Ln();         
        $pdf->Output();

        /*$pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);    
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NIM',1,0);
        $pdf->Cell(45,6,'NAMA MAHASISWA',1,0);
        $pdf->Cell(15,6,'NO HP',1,0);
        $pdf->SetFont('Arial','',10);
       // $mahasiswa = $this->db->get('mahasiswa')->result();
        //$content = $this->load->view('content', true);
        // foreach ($mahasiswa as $row){
        //     $pdf->Cell(20,6,$row->no_induk,1,0);
        //     $pdf->Cell(45,6,$row->nama,1,0);
        //     $pdf->Cell(27,6,$row->alamat,1,0);
            
        // }
        $pdf->Output();*/
    }
}