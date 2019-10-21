
	<div class="card mb-3">
		<div class="card-header">
		<!-- <i class="fas fa-table"></i> -->
			<h5>Lego</h5>
		</div>
		    <!-- <div class="card-body"> -->
		<div class="table-responsive">
		<form method="post" name="form1" action="<?php echo base_url()?>index.php/admin/Penilaian/nilai" onsubmit="required()">
		<!-- //form_open(base_url('admin/Penilaian/validasi'));  -->
		  <table class="table table-bordered" width="100%" cellspacing="0">
		    <thead align="center">
		      <tr>
		        <th width="">Deskripsi</th>
		        <th width="15%">Baik</th>
		        <th width="15%">Sangat Baik</th>
		      </tr>
		    </thead>
		    <tbody >
		      <tr>
		        <td>Motorik Anak</td>
		        <?php //echo form_error('Motorik'); ?>
		        <td align="center"><input type="radio" name="Motorik" value="Sangat Baik"></td>
		        <td align="center"><input type="radio" name="Motorik" value="Baik"></td>
		       
		      </tr>
		      <tr>
		        <td>Kreativitas</td>
		        <td align="center"><input type="radio" name="Kreativitas" value="Sangat Baik"></td>
		        <td align="center"><input type="radio" name="Kreativitas" value="Baik"></td>
		        
		      </tr>
		      <tr>
		        <td>Ketepatan Bentuk</td>
		        <td align="center"><input type="radio" name="Ketepatan_Bentuk" value="Sangat Baik"></td>
		        <td align="center"><input type="radio" name="Ketepatan_Bentuk" value="Baik"></td>
		        
		      </tr>
		       <tr>
		        <td>Ketepatan Coding</td>
		        <td align="center"><input type="radio" name="Ketepatan_Coding" value="Sangat Baik"></td>
		        <td align="center"><input type="radio" name="Ketepatan_Coding" value="Baik"></td>
		        
		      </tr>
		       <tr>
		        <td>Pengendalian Robot</td>
		        <td align="center"><input type="radio" name="Pengendalian_Robot" value="Sangat Baik"></td>
		        <td align="center"><input type="radio" name="Pengendalian_Robot" value="Baik"></td>
		        
		      </tr>
		      
		    </tbody>
		  </table>
		</div>
	</div>