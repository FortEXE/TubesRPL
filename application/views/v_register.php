<form action="<?= site_url('account/proses_tambah') ?>"  method="POST" accept-charset="utf-8">
	
	<input type="text" name="username" placeholder="username">
	<input type="text" name="nama_member" placeholder="nama member">
	<input type="text" name="notelp" placeholder="nomor telepon">
	<select name="jk">
		<option selected value="laki-laki">laki-laki</option>
		<option value="perempuan">perempuan</option>
		
	</select>
	<input type="text" name="alamat" placeholder="alamat">
	<input type="password" name="password" placeholder="password">
	<input type="submit" name="submit" value="register">
	
</form>