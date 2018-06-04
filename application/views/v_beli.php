<p>keterangan pembelian</p>
<?php foreach ($pembeli as $cust): ?>

	<p>nama pembeli: <?= $cust['NAMA_MEMBER'] ?></p>
	<p>jenis kelamin: <?= $cust['JK_MEMBER'] ?></p>
	<p>alamat: <?= $cust['ALAMAT_MEMBER'] ?></p>
<?php endforeach ?>

<?php foreach ($jadwal as $sch): ?>
	<p>status pembelian id: <?= $sch['ID_JADWAL'] ?></p>
	<?php foreach ($kereta as $train): ?>
		<?php if ($train['ID_KERETA'] == $sch['ID_KERETA']): ?>
			<p>nama kereta: <?= $train['NAMA_KERETA'] ?></p>
			<p>keterangan kereta: <?= $train['KETERANGAN_KERETA'] ?></p>
			<p>jumlah kursi: <?= $train['NO_KURSI'] ?></p>
		<?php endif ?>
	<?php endforeach ?>
	<?php foreach ($stasiun as $st): ?>
		<?php if ($st['ID_STASIUN'] == $sch['ID_STASIUN_AWAL']): ?>
			<p>stasiun awal: <?= $st['NAMA_STASIUN'] ?></p>
		<?php endif ?>
		<?php if ($st['ID_STASIUN'] == $sch['ID_STASIUN_TUJUAN']): ?>
			<p>stasiun tujuan: <?= $st['NAMA_STASIUN'] ?></p>
		<?php endif ?>
	<?php endforeach ?>
	<p>jam berangkat: <?= $sch['JAM_BERANGKAT'] ?></p>
	<p>jam datang: <?= $sch['JAM_DATANG'] ?></p>
<?php endforeach ?>

<form action="<?= site_url('pemesanan/proses_pemesanan') ?>" method="post" accept-charset="utf-8">
	
	<input type="hidden" name="id_member" value="<?= $this->session->userdata('id_member'); ?>">
	<input type="hidden" name="id_jadwal" value="<?= $jadwal[0]['ID_JADWAL'] ?>">
	<input type="hidden" name="harga_tiket" value="<?= $jadwal[0]['KETERANGAN_JADWAL'] ?>">
	<input type="number" min="1" value="1" name="jumlah_tiket" placeholder="jumlah tiket">
	<input type="submit" name="submit" value="Pesan sekarang juga">
	
</form>