<?php
if (isset($session['user_type'])) {
	if (!empty($session)) {
		// print_r($session);
		echo 'welcome, ';
		echo $session['nama'];
		echo '<br>';
if($session['user_type'] == 'admin'){ ?>
	<hr>
	<a href="<?= site_url('kereta') ?>" title="">manage kereta</a><br>
	<a href="<?= site_url('jadwal') ?>" title="">manage jadwal</a><br>
	<a href="<?= site_url('stasiun') ?>" title="">manage stasiun</a><br>
	<hr>
	<a href="<?= site_url('transaksi') ?>" title="">lihat log transaksi</a><br>
	<a href="<?= site_url('pemesanan') ?>" title="">lihat log pemesanan</a><br>
<?php } ?>
	<hr>

<?php
if($session['user_type'] == 'user'){ ?>

	<a href="<?= site_url('user_jadwal') ?>" title="">Lihat Jadwal Kereta</a><br>
	<a href="<?= site_url('welcome/caritiket') ?>" title="Cari tiket">Cari tiket</a><br>
	<a href="<?= site_url('pemesanan/pembayaran') ?>" title="Bayar tiket">Bayar Tiket</a><br>
<?php } ?>

<a href="<?= site_url('account/proses_logout') ?>" title="Logout">Logout</a><br>

	<?php
	}else{
	?>
		<a href="<?= site_url('welcome/login') ?>" title="">login</a>
		<a href="<?= site_url('welcome/register') ?>" title="">buat akun</a>
	<?php
	}

}else{
	redirect(site_url('welcome/login'))
?>

<?php
}
?>
<br>