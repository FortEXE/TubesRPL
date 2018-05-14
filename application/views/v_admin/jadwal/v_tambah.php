<form action="<?= site_url('jadwal/proses_tambah') ?>" method="post" accept-charset="utf-8">

	<input type="text" name="id_kereta" placeholder="masukkan id_kereta">
	<input type="text" name="id_stasiun_awal" placeholder="id stasiun awal">
	<input type="text" name="id_stasiun_tujuan" placeholder="id stasiun tujuan">
	<label for="jam_berangkat">Jam berangkat</label>
	<input type="time" name="jam_berangkat">
	<label for="jam_berangkat">Jam datang</label>
	<input type="time" name="jam_datang">
	<input type="text" name="keterangan_jadwal" placeholder="keterangan jadwal">
	<input type="submit" name="submit" value="TAMBAH">

</form>