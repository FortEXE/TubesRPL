<form action="<?= site_url('stasiun/proses_hapus') ?>" method="post" accept-charset="utf-8">
	<p>Hapus data</p>
	<?php foreach ($stasiun as $var): ?>
		<input readonly type="text" name="id_stasiun" value="<?= $var['ID_STASIUN'] ?>">
		<input readonly type="text" name="nama_stasiun" value="<?= $var['NAMA_STASIUN'] ?>">
		<input readonly type="text" name="alamat_stasiun" value="<?= $var['ALAMAT_STASIUN'] ?>">
		<input readonly type="text" name="no_telp_stasiun" value="<?= $var['NO_TELP_STASIUN'] ?>">
		<input readonly type="submit" name="submit" value="HAPUS">
	<?php endforeach ?>

</form>