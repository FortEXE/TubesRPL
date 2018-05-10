<?php 

if (!empty($session)) {

	// print_r($session);
	echo 'welcome, ';
	echo $session['nama'];
	echo '<br>';

	if($session['user_type'] == 'admin'){ ?>

		<a href="<?= site_url('kereta') ?>" title="">manage kereta</a><br>
		<a href="<?= site_url('jadwal') ?>" title="">manage jadwal</a><br>
		<a href="<?= site_url('stasiun') ?>" title="">manage stasiun</a><br>		

	<?php
	}?>
			
	<a href="<?= site_url('welcome/caritiket') ?>" title="Cari tiket">Cari tiket</a><br>
	<a href="<?= site_url('welcome/bayartiket') ?>" title="Bayar tiket">Bayar Tiket</a><br>
	
	<?php

}else{
	
	?>	
	<a href="<?= site_url('welcome/login') ?>" title="">login</a>
	<?php
}


?>


<br>
