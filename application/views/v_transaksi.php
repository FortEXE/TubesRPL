Konfirmasi pembayaran untuk data dibawah ini: <br>

<?php foreach ($detailpembayaran as $var): ?>
	id pemesanan: <?= $var['ID_PEMESANAN'] ?> <br>
	id member: <?= $var['ID_MEMBER'] ?> <br>
	id jadwal: <?= $var['ID_JADWAL'] ?> <br>
	tanggal pemesanan: <?= $var['TGL_PESAN'] ?> <br>
	jumlah tiket: <?= $var['JUMLAH_TIKET'] ?> <br>
	total pembayaran: <?= $var['TOTAL_PEMBAYARAN'] ?> <br>

	<form action="<?= site_url('transaksi/proses_tambah') ?>" method="POST" >
		
		<input type="hidden" name="id_pemesanan" value="<?= $var['ID_PEMESANAN'] ?>">
		<input required type="text" name="nama_penumpang" value="<?= $this->session->userdata('nama'); ?>" placeholder="input nama penumpang">
		<select name="kategori_penumpang">
			<option selected value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
		</select>
		<select name="jenis_pembayaran">
			<option selected value="Cash">Cash</option>
			<option value="Credit">Kredit</option>
			<option value="Voucher">Voucher</option>
			<option value="Kupon">Kupon</option>
		</select>

		<input readonly type="number" name="total_pembayaran" value="<?= $var['TOTAL_PEMBAYARAN'] ?>">
		<input type="submit" name="submit" value="Bayar Tiket">
	</form>
<?php endforeach ?>