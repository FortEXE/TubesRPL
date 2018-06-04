<!DOCTYPE html>
<html>
	<body>
		<?php 


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
				
			<?php
			}?>

			<hr>
			<?php
			if($session['user_type'] == 'user'){ ?>

					
				<a href="<?= site_url('user_jadwal') ?>" title="">Lihat Jadwal Kereta</a><br>		

			<?php
			}?>

			<a href="<?= site_url('welcome/caritiket') ?>" title="Cari tiket">Cari tiket</a><br>
			<a href="<?= site_url('welcome/bayartiket') ?>" title="Bayar tiket">Bayar Tiket</a><br>
			
			<?php

		}else{
			redirect(site_url('welcome/login'))
			?>	
			
			
			<?php
		}


		?>


		<br>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>

