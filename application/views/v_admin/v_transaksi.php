<?php 
	
	// print_r($jadwal);

 ?>

<a href="<?= site_url('stasiun/tambah') ?>" title="">tambah stasiun</a>
<table>
	<thead>
		<tr>
			<th>Nomor</th>
			<th>ID Pembayaran</th>
			<th>ID Pemesanan</th>
			<th>Nama Penumpang</th>
			<th>Kategori Penumpang</th>
			<th>Jenis Pembayaran</th>
			<th>Total Pembayaran Transaksi</th>
		</tr>
	</thead>
	<tbody>

		 <?php 
		 $i = 1;
		 foreach ($transaksi as $var): ?>
		 	<tr align="center">

		 		<td><?= $i++ ?> </td>
		 		<td><?= $var['ID_PEMBAYARAN'] . '<br>'?> </td>
		 		<td><?= $var['ID_PEMESANAN'] . '<br>' ?></td>	
		 		<td><?= $var['NAMA_PENUMPANG'] . '<br>' ?></td>	
		 		<td><?= $var['KATEGORI_PENUMPANG'] . '<br>' ?></td>
		 		<td><?= $var['JENIS_PEMBAYARAN'] . '<br>' ?></td>
		 		<td><?= $var['TOTAL_PEMBAYARAN_TRANSAKSI'] . '<br>' ?></td>
		 	</tr>	
		 <?php endforeach ?>
	</tbody>
</table>