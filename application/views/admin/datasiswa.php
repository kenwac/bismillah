<div class="card mb-3">
	<div class="card-header">
		<!-- <i class="fas fa-table"></i> -->
			<h5>Data Siswa</h5>
	</div>
		    <!-- <div class="card-body"> -->
		<div class="table-responsive">
		<form method="post" action="<?php echo base_url()?>index.php/admin/Datasiswa/data">		
		<table class="table table-bordered" width="100%" cellspacing="0">
		    <tbody >
		      <tr>
		        <td>NIM</td>
		        <td align="center"><input class="table table-bordered" type="text" name="nim"></td>
		        <td>Asal Sekolah</td>
		        <td align="center"><input class="table table-bordered" type="text" name="sekolah"></td>
		      </tr>
		      <tr>
		        <td>Nama Siswa</td>
		        <td align="center"><input class="table table-bordered" type="text" name="nama"></td>
		        <td>Tahun Ajaran</td>
		        <td align="center"><input class="table table-bordered" type="text" name="tahun"></td>
		      </tr>
		  </tbody>
		</table>
	</form>
</div>
</div>
