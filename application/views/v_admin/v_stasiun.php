<?php 
	
	// print_r($jadwal);

 ?>

<table>
	<thead>
		<tr>
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
		 			<a href="<?= site_url('stasiun/edit/') ?>" title="">edit</a>
		 			<a href="<?= site_url('stasiun/hapus/') ?>" title="">hapus</a>
		 		</td>	
		 		
		 	</tr>	
		 <?php endforeach ?>
	</tbody>
</table>