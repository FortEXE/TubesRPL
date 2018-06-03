<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Jadwal Kereta Api</title>
  <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>
  <div class="row">
   <div style="margin:50px;">
    <h2 style="text-align: center">JADWAL KERETA API</h2>
    	<table class="table table-striped table-bordered">
     	<tr>
		    <td style="text-align: center"><strong>No</strong></td>
		    <td style="text-align: center"><strong>Stasiun Awal</strong></td>
		    <td style="text-align: center"><strong>Stasiun Tujuan</strong></td>
		    <td style="width: 180px; text-align: center; te"><strong>Jam Berangkat</strong></td>
		    <td style="width: 180px; text-align: center;"><strong>Jam Tiba</strong></td>
		    <td style="width: 160px; text-align: center;"></td>
		    <td style="width: 110px; text-align: center;"></td>
		</tr> 
		     <?php foreach($jadwal as $jadwal){?>

		<tr>
			<td style="text-align: center"><?=$jadwal['ID'];?></td>
			<td><?=$jadwal['Sawal'];?></td>
			<td><?=$jadwal['Stujuan'];?></td>
			<td style="text-align: center"><?=$jadwal['jam_berangkat'];?></td>
			<td style="text-align: center; align: center;";><?=$jadwal['jam_datang'];?></td>
			<td >
			<form action="User_jadwal/detail">
				<button type="submit" class="btn btn-primary" style="width: 150px; text-align: center;">Lihat Selengkapnya</button>
			</form>
			</td>
			<td >
			<form action="User_jadwal/detail">
				<button type="submit" class="btn btn-success" style="width: 100px; text-align: center;">Beli Tiket</button></td>
			</form>
	    </tr>     
     <?php }?>  
    </table>
   </div> 
  </div> 
 </body>
</html>