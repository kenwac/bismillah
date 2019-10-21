<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">
		<form method="post" action="<?php echo base_url()?>index.php/admin/PrintPDF">

		<div class="container-fluid">

		 <!-- DataTables Example -->
		 <?php $this->load->view("admin/_partials/tables.php") ?>
		 <form method="post" action="<?php echo base_url()?>index.php/admin/Datasiswa/data">
		 <table width="100%">
		 	<tr><td>
		 <table class="table table-bordered" width="100%" cellspacing="0">
		    <tbody >
		      <tr>
		        <td><b>NIM</b></td>
		        <td>10116395 <?php //echo $nim; ?> </td>
		      </tr>
		      <tr>
		        <td width="30%"><b>Nama Siswa</b></td>
		        <td>Siska  <?php //echo $nama ?> </td>
		      </tr>
		  </tbody>
		</table></td>
		<td>  </td>
		<td>
		 <table class="table table-bordered" width="100%" cellspacing="0">
		    <tbody >
		      <tr>
		        <td width="30%"><b>Asal Sekolah</b></td>
		        <td>UNIKOM</td>
		      </tr>
		      <tr>
		        <td><b>Tahun Ajaran</b></td>
		        <td>2016</td>
		      </tr>
		  </tbody>
		</table>
		</tr>
		</table>
		 <?php $this->load->view("admin/HasilRapot/nilaiLego.php") ?>
		 <?php $this->load->view("admin/HasilRapot/nilaiProject.php") ?>
		 <?php $this->load->view("admin/HasilRapot/nilaiAnimasi.php") ?>
		       
		</div>
		<div class="col-lg-6">
			<input type="submit" class="btn btn-success btn-icon-split"  value="Print PDF">
		</div>

    </div>

	<!-- Sticky Footer -->
	

	<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
<?php $this->load->view("admin/_partials/footer.php") ?>	

<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>

