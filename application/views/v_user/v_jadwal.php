<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Jadwal Kereta Api</title>
  <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>
  <div class="row">
   <div style="margin:50px;">
    <h4>Jadwal Kereta Api</h4>
    	<table class="table table-striped table-bordered">
     	<tr>
		    <td><strong>No</strong></td>
		    <td><strong>Stasiun Awal</strong></td>
		    <td><strong>Stasiun Tujuan</strong></td>
		    <td><strong>Jam Berangkat</strong></td>
		    <td><strong>Jam Tiba</strong></td>
		    <td></td>
		</tr> 
		     <?php foreach($jadwal as $jadwal){?>

		<tr>
			<td><?=$jadwal['ID'];?></td>
			<td><?=$jadwal['Sawal'];?></td>
			<td><?=$jadwal['Stujuan'];?></td>
			<td><?=$jadwal['jam_berangkat'];?></td>
			<td><?=$jadwal['jam_datang'];?></td>
			<td><button type="submit" class="btn btn-success" >Lihat Selengkapnya</button></td>
	    </tr>     
     <?php }?>  
    </table>
   </div> 
  </div> 
 </body>
</html>