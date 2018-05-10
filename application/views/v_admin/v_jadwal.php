<?php 
	
	// print_r($jadwal);

 ?>

<table>
	<thead>
		<tr>
			<th>Nomor</th>
			<th>ID Kereta</th>
			<th>ID Stasiun Awal</th>
			<th>ID Stasiun Tujuan</th>
			<th>Jam Berangkat</th>
			<th>Jam Datang</th>
			<th>Keterangan Jadwal</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		 <?php 
		 $i = 1;
		 foreach ($jadwal as $var): ?>
		 	<tr>

		 		<td><?= $i++ ?> </td>
		 		<td><?= $var['ID_KERETA'] . '<br>'?> </td>
		 		<td><?= $var['ID_STASIUN_AWAL'] . '<br>' ?></td>	
		 		<td><?= $var['ID_STASIUN_TUJUAN'] . '<br>' ?></td>	
		 		<td><?= $var['JAM_BERANGKAT'] . '<br>' ?></td>	
		 		<td><?= $var['JAM_DATANG'] . '<br>' ?></td>	
		 		<td><?= $var['KETERANGAN_JADWAL'] . '<br>' ?></td>
		 		<td>
		 			<a href="<?= site_url('jadwal/edit/') ?>" title="">edit</a>
		 			<a href="<?= site_url('jadwal/hapus') ?>" title="">hapus</a>
		 		</td>	
		 		
		 	</tr>	
		 <?php endforeach ?>
	</tbody>
</table>