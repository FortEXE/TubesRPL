<?php 


// print_r($kereta);  	
// echo '<br>';
// print_r($stasiun);
// echo '<br>'; 	
// print_r($jadwal);

?>

<table>
	<thead>

		Jadwal Pemberangkatan
		<tr>
			<th>Nomor</th>
			<th>Nama Kereta</th>
			<th>Stasiun Awal</th>
			<th>Stasiun Tujuan</th>
			<th>Jam Berangkat</th>
			<th>Jam Datang</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 

		$i = 1;
		foreach ($jadwal as $value) { ?>

			<tr>

				<td>
					<?= $i++ ?>
				</td>

				<?php foreach ($kereta as $val):
					if($val['ID_KERETA'] == $value['ID_KERETA']): ?>
						<td>
							<?= $val['NAMA_KERETA']; ?>
						</td>
					<?php endif ?>
				<?php endforeach ?>
					
				<?php foreach ($stasiun as $val):
					if($val['ID_STASIUN'] == $value['ID_STASIUN_AWAL']): ?>
						<td>
							<?= $val['NAMA_STASIUN']; ?>
						</td>
					<?php endif ?>
				<?php endforeach ?>

				<?php foreach ($stasiun as $val):
					if($val['ID_STASIUN'] == $value['ID_STASIUN_TUJUAN']): ?>
						<td>
							<?= $val['NAMA_STASIUN']; ?>
						</td>
					<?php endif ?>
				<?php endforeach ?>

				<td>
					<?= $value['JAM_BERANGKAT'] ?>
				</td>
				
				<td>
					<?= $value['JAM_DATANG']; ?>
				</td>

				<td>
					<a href='<?= site_url('pemesanan/pembelian/'. $value['ID_JADWAL']) ?>' title=''>beli tiket</a>
				</td>
			</tr>
		
		<?php 
		}
		?>
	</tbody>
</table>