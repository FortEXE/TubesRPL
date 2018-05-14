<?php 
	
	// print_r($jadwal);

 ?>

<a href="<?= site_url('stasiun/tambah') ?>" title="">tambah stasiun</a>
<table>
	<thead>
		<tr>
			<th>Nomor</th>
			<th>ID Stasiun</th>
			<th>Nama Stasiun</th>
			<th>Alamat Stasiun</th>
			<th>No Telp Stasiun</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		 <?php 
		 $i = 1;
		 foreach ($stasiun as $var): ?>
		 	<tr>

		 		<td><?= $i++ ?> </td>
		 		<td><?= $var['ID_STASIUN'] . '<br>'?> </td>
		 		<td><?= $var['NAMA_STASIUN'] . '<br>' ?></td>	
		 		<td><?= $var['ALAMAT_STASIUN'] . '<br>' ?></td>	
		 		<td><?= $var['NO_TELP_STASIUN'] . '<br>' ?></td>
		 		<td>
		 			<a href="<?= site_url('stasiun/edit/' . $var['ID_STASIUN']) ?>" title="">edit</a>
		 			<a href="<?= site_url('stasiun/hapus/' . $var['ID_STASIUN']) ?>" title="">hapus</a>
		 		</td>	
		 		
		 	</tr>	
		 <?php endforeach ?>
	</tbody>
</table>