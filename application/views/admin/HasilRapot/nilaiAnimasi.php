	<div class="card mb-3">
		<div class="card-header">
		<!-- <i class="fas fa-table"></i> -->
			<h5>Animasi</h5>
		</div>
		    <!-- <div class="card-body"> -->
		<div class="table-responsive">
		<form method="post" action="<?php echo base_url()?>index.php/admin/Penilaian/nilai">
		  <table class="table table-bordered" width="100%" cellspacing="0">
		    <tr>
		 		<td>
		    	Kemampuan motorik siswa <b><?php echo $Motorik ?></b> dan kekreativan dalam merancang lego pun <b><?php echo $Kreativitas ?></b>
		    	<?php 

		    		echo $Motorik;
		    		echo $Kreativitas;
		    		echo $Ketepatan_Bentuk;
		    		echo $Ketepatan_Coding;
		    		echo $Pengendalian_Robot;
		    	?>     		
		    </td>
		 	</tr>
		  </table>
		</div>
	</div>