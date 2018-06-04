Pembayaran tiket <?= $this->session->userdata('nama'); ?>:<br><br>
<?php foreach ($pembayaran as $var): ?>

	<?php if ($var['STATUS_PEMBAYARAN'] == "0"): ?>
		<?php foreach ($jadwal as $sch): ?>
			<?php if ($sch['ID_JADWAL'] == $var['ID_JADWAL']): ?>
				<?php foreach ($kereta as $krt): ?>
					<?php if ($krt['ID_KERETA'] == $sch['ID_KERETA']): ?>
						nama kereta: <?= $krt['NAMA_KERETA'] ?>	<br>				
					<?php endif ?>				
				<?php endforeach ?>
				<?php foreach ($stasiun as $sa): ?>
					<?php if ($sa['ID_STASIUN'] == $sch['ID_STASIUN_AWAL']): ?>
						stasiun awal: <?= $sa['NAMA_STASIUN'] ?> <br>					
					<?php endif ?>				
				<?php endforeach ?>

				<?php foreach ($stasiun as $st): ?>
					<?php if ($st['ID_STASIUN'] == $sch['ID_STASIUN_TUJUAN']): ?>
						stasiun tujuan: <?= $st['NAMA_STASIUN'] ?> <br>					
					<?php endif ?>				
				<?php endforeach ?>
			<?php endif ?>
		<?php endforeach ?>

		jumlah tiket: <?= $var['JUMLAH_TIKET'] ?> <br>
		total pembayaran: <?= $var['TOTAL_PEMBAYARAN'] ?> <br>
		tanggal pesan: <?= $var['TGL_PESAN'] ?> <br>
		<a href="<?= site_url('pemesanan/detailpembayaran/'). $var['ID_PEMESANAN'] ?>" title="bayartiket">bayar tiket</a><br><br>
	<?php endif ?>
<?php endforeach ?>