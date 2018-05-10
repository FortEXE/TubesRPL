<?php 
	
	// print_r($jadwal);

 ?>


<a href="<?= site_url('kereta/tambah') ?>" title="">tambah kereta</a>
<table>
	<thead>
		<tr>
			<th>Nomor</th>
			<th>ID Kereta</th>
			<th>Nama Kereta</th>
			<th>Keterangan Kereta</th>
			<th>No Gerbong</th>
			<th>No Kursi</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		 <?php 
		 $i = 1;
		 foreach ($kereta as $var): ?>
		 	<tr>

		 		<td><?= $i++ ?> </td>
		 		<td><?= $var['ID_KERETA'] . '<br>'?> </td>
		 		<td><?= $var['NAMA_KERETA'] . '<br>' ?></td>	
		 		<td><?= $var['KETERANGAN_KERETA'] . '<br>' ?></td>	
		 		<td><?= $var['NO_GERBONG'] . '<br>' ?></td>
		 		<td><?= $var['NO_KURSI'] . '<br>' ?></td>
		 		<td>
		 			<a href="<?= site_url('kereta/edit/' . $var['ID_KERETA']) ?>" title="">edit</a>
		 			<a href="<?= site_url('kereta/hapus/' . $var['ID_KERETA']) ?>" title="">hapus</a>
		 		</td>	
		 		
		 	</tr>	
		 <?php endforeach ?>
	</tbody>
</table>