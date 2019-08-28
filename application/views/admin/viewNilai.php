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
		 <table>
		 	<tr>
		 		<td>
		    	Kemampuan motorik siswa <b><?php echo $motorik ?></b> dan kekreativan dalam merancang lego pun <b><?php echo $Kreativ ?></b>
		                		
		    </td>
		 	</tr>
		 </table>
		 
		 	
		        
		</div>

		<div class="col-lg-6">
			<input type="submit" class="btn btn-success btn-icon-split"  value="Kirim">
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

