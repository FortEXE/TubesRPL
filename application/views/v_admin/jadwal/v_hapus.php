<form action="<?= site_url('jadwal/proses_hapus') ?>" method="post" accept-charset="utf-8">
	<p>Hapus data</p>
	<?php foreach ($jadwal as $var): ?>
		<input readonly type="text" name="id_jadwal" value="<?= $var['ID_JADWAL'] ?>">
		<input readonly type="text" name="id_kereta" value="<?= $var['ID_KERETA'] ?>">
		<input readonly type="text" name="id_stasiun_awal" value="<?= $var['ID_STASIUN_AWAL'] ?>">
		<input readonly type="text" name="id_stasiun_tujuan" value="<?= $var['ID_STASIUN_TUJUAN'] ?>">
		<input readonly type="time" name="jam_berangkat" value="<?= $var['JAM_BERANGKAT'] ?>">
		<input readonly type="time" name="jam_datang" value="<?= $var['JAM_DATANG'] ?>">
		<input readonly type="submit" name="submit" value="HAPUS">
	<?php endforeach ?>

</form>