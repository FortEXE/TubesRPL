<form action="<?= site_url('kereta/proses_hapus') ?>" method="post" accept-charset="utf-8">
	<p>Hapus data</p>
	<?php foreach ($kereta as $var): ?>
		<input readonly type="text" name="id_kereta" value="<?= $var['ID_KERETA'] ?>">
		<input readonly type="text" name="nama_kereta" value="<?= $var['NAMA_KERETA'] ?>">
		<input readonly type="text" name="nama_kereta" value="<?= $var['KETERANGAN_KERETA'] ?>">
		<input readonly type="text" name="no_gerbong" value="<?= $var['NO_GERBONG'] ?>">
		<input readonly type="text" name="no_kursi" value="<?= $var['NO_KURSI'] ?>">
		<input readonly type="submit" name="submit" value="HAPUS">
	<?php endforeach ?>

</form>