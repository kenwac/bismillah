	<div class="card mb-3">
		<div class="card-header">
		<!-- <i class="fas fa-table"></i> -->
			<h5>Lego</h5>
		</div>
		    <!-- <div class="card-body"> -->
		<div class="table-responsive">
		<form method="post" action="<?php echo base_url()?>index.php/admin/Penilaian/nilai">
		  <table class="table table-bordered" width="100%" cellspacing="0">
		    <thead align="center">
		      <tr>
		        <th width="30%">Deskripsi</th>
		        <th width="13%">Baik</th>
		        <th width="13%">Sangat Baik</th>
		        <th>Keterangan</th>
		      </tr>
		    </thead>
		    <tbody >
		      <tr>
		        <td>Motorik Anak</td>
		        <td align="center"><input type="radio" name="motorik" value="Sangat Baik"></td>
		        <td align="center"><input type="radio" name="motorik" value="Baik"></td>
		        <td> <!-- <?php echo $motorik; ?> --></td>
		      </tr>
		      <tr>
		        <td>Kekreativan</td>
		        <td align="center"><input type="radio" name="Kreativ" value="Sangat Baik"></td>
		        <td align="center"><input type="radio" name="Kreativ" value="Baik"></td>
		        <td>37</td>
		      </tr>
		    </tbody>
		  </table>
		</div>
	</div>