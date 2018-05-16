<?php 
	
	// print_r($jadwal);

 ?>

<table>
	<thead>
		<tr>
			<th>Nomor</th>
			<th>ID Pemesanan</th>
			<th>ID Member</th>
			<th>ID Jadwal</th>
			<th>Tanggal Pesan</th>
			<th>Jumlah Tiket</th>
			<th>Total Pembayaran</th>
		</tr>
	</thead>
	<tbody>

		 <?php 
		 $i = 1;
		 foreach ($pemesanan as $var): ?>
		 	<tr align="center">

		 		<td><?= $i++ ?> </td>
		 		<td><?= $var['ID_PEMESANAN'] . '<br>'?> </td>
		 		<td><?= $var['ID_MEMBER'] . '<br>' ?></td>	
		 		<td><?= $var['ID_JADWAL'] . '<br>' ?></td>	
		 		<td><?= $var['TGL_PESAN'] . '<br>' ?></td>
		 		<td><?= $var['JUMLAH_TIKET'] . '<br>' ?></td>
		 		<td><?= $var['TOTAL_PEMBAYARAN'] . '<br>' ?></td>
		 	</tr>	
		 <?php endforeach ?>
	</tbody>
</table>