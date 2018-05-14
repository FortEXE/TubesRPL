<form action="<?= site_url('kereta/proses_tambah') ?>" method="post" accept-charset="utf-8">

	<input type="text" name="id_kereta" placeholder="id kereta">
	<input type="text" name="nama_kereta" placeholder="nama kereta">
	<select name="keterangan_kereta">
		<option value="ekonomi">ekonomi</option>
		<option value="bisnis">bisnis</option>
		<option value="eksekutif">eksekutif</option>
	</select>
	<input type="number" name="no_gerbong" placeholder="jumlah gerbong">
	<input type="number" name="no_kursi" placeholder="jumlah kursi">
	<input type="submit" name="submit" value="TAMBAH">

</form>