<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Jadwal Kereta Api</title>
  <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
 </head>
<body>
<div class="container">
  <h2>Detail Jadwal Kereta Api</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>Jadwal ke </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($jadwal as $jadwal){?>
    <tr>
        <td>Nama Kereta</td>
        <td>: <?=$jadwal['namaKereta'];?></td>
      </tr>
      <tr>
        <td>Stasiun Awal</td>
        <td>: <?=$jadwal['Sawal'];?></td>
      </tr>
      <tr>
        <td>Stasiun Tujuan</td>
        <td>: <?=$jadwal['Stujuan'];?></td>
      </tr>
      <tr>
        <td>Jam Berangkat</td>
        <td>: <?=$jadwal['jam_berangkat'];?></td>
      </tr>
      <tr>
        <td>Jam Tiba</td>
        <td>: <?=$jadwal['jam_datang'];?></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>: <?=$jadwal['keterangan_jadwal'];?></td>
      </tr>
	<?php }?>
    </tbody>
  </table>
</div>

</body>
</html>