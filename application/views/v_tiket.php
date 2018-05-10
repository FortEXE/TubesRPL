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
			<th>Keterangan</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 

		$i = 1;
		foreach ($jadwal as $value) {

			echo '<tr>';

				echo '<td>';
					echo $i++;
				echo '</td>';
				foreach ($kereta as $val) {
					if($val['ID_KERETA'] == $value['ID_KERETA']){
						echo '<td>';
						echo $val['NAMA_KERETA'];
						echo '</td>';
					}
				}

				foreach ($stasiun as $val) {
					if($val['ID_STASIUN'] == $value['ID_STASIUN_AWAL']){
						echo '<td>';
						echo $val['NAMA_STASIUN'];
						echo '</td>';
					}
				}

				foreach ($stasiun as $val) {
					if($val['ID_STASIUN'] == $value['ID_STASIUN_TUJUAN']){
						echo '<td>';
						echo $val['NAMA_STASIUN'];
						echo '</td>';
					}
				}

				echo '<td>';
					echo $value['JAM_BERANGKAT'];
				echo '</td>';
				
				echo '<td>';
					echo $value['JAM_DATANG'];
				echo '</td>';

				echo '<td>';
					echo $value['KETERANGAN_JADWAL'];
				echo '</td>';

				echo '<td>';
					echo "<a href='" . site_url('welcome/beliTiket/'. $value['ID_JADWAL']) . "' title=''>beli tiket</a>";
				echo '</td>';
			echo '</tr>';
		}
		?>
	</tbody>
</table>