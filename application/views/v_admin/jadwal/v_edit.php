<form action="<?= site_url('jadwal/proses_edit') ?>" method="post" accept-charset="utf-8">
	<p>edit data</p>
	<?php foreach ($jadwal as $var): ?>
		<input readonly type="text" name="id_jadwal" value="<?= $var['ID_JADWAL'] ?>">
		<input type="text" name="id_kereta" value="<?= $var['ID_KERETA'] ?>">
		<input type="text" name="id_stasiun_awal" value="<?= $var['ID_STASIUN_AWAL'] ?>">
		<input type="text" name="id_stasiun_tujuan" value="<?= $var['ID_STASIUN_TUJUAN'] ?>">
		<input type="time" name="jam_berangkat" value="<?= $var['JAM_BERANGKAT'] ?>">
		<input type="time" name="jam_datang" value="<?= $var['JAM_DATANG'] ?>">
		<input type="submit" name="submit" value="EDIT">
	<?php endforeach ?>

</form>