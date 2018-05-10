<form action="<?= site_url('kereta/proses_edit') ?>" method="post" accept-charset="utf-8">
	<p>edit data</p>
	<?php foreach ($kereta as $var): ?>
		<input readonly type="text" name="id_kereta" value="<?= $var['ID_KERETA'] ?>">
		<input type="text" name="nama_kereta" value="<?= $var['NAMA_KERETA'] ?>">
		<select name="keterangan_kereta">
			<option value="<?= $var['KETERANGAN_KERETA'] ?>" selected><?= $var['KETERANGAN_KERETA'] ?></option>
			<option value="ekonomi">ekonomi</option>
			<option value="bisnis">bisnis</option>
			<option value="eksekutif">eksekutif</option>
		</select>
		<input type="text" name="no_gerbong" value="<?= $var['NO_GERBONG'] ?>">
		<input type="text" name="no_kursi" value="<?= $var['NO_KURSI'] ?>">
		<input type="submit" name="submit" value="EDIT">
	<?php endforeach ?>

</form>