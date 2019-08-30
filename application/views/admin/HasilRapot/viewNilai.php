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

		<div class="container-fluid">

		 <!-- DataTables Example -->
		 <?php $this->load->view("admin/_partials/tables.php") ?>
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

