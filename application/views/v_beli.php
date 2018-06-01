<form action="<?= site_url('pemesanan/proses_tambah') ?>" method="post" accept-charset="utf-8">
	<p>Hapus data</p>
	<?php
		 foreach ($pembeli as $var): ?>
		 	<tr>
		 		<td><?= $var['NAMA_MEMBER'] . '<br>'?> </td>
		 		<td><?= $var['JK_MEMBER'] . '<br>' ?></td>	
		 		<td><?= $var['NOTELP_MEMBER'] . '<br>' ?></td>	
		 		<td><?= $var['ALAMAT_MEMBER'] . '<br>' ?></td>	
		 	</tr>
	<?php endforeach ?>
	
	<?php
		 foreach ($jadwal as $var): ?>
		 	<tr>
		 		<td><?= $var['ID_KERETA'] . '<br>'?> </td>
		 		<td><?= $var['ID_STASIUN_AWAL'] . '<br>' ?></td>	
		 		<td><?= $var['ID_STASIUN_TUJUAN'] . '<br>' ?></td>	
		 		<td><?= $var['JAM_BERANGKAT'] . '<br>' ?></td>	
		 		<td><?= $var['JAM_DATANG'] . '<br>' ?></td>		
		 		<td><?= $var['KETERANGAN_JADWAL'] . '<br>' ?></td>		
		 	</tr>
	<?php endforeach ?>

	<form action="pemesanan/proses_pemesanan" method="POST" accept-charset="utf-8">
		
		<input type="hidden" name="id_member" value="<?= $pembeli[0]['ID_MEMBER'] ?>">
		<input type="hidden" name="id_jadwal" value="<?= $jadwal[0]['ID_JADWAL'] ?>">
		<label for="jumlah_tiket">Berapa tiket yang ingin di beli?
		<input type="number" name="jumlah_tiket"></label>
		<input type="hidden" name="harga_bayar" value="<?= $jadwal[0]['KETERANGAN_JADWAL'] ?>">
		<input type="submit" name="submit" value="Pesan Sekarang">



		
	</form>


</form>