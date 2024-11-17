<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  
}
</style>
</head>
<body>
<table class="tg">
  <tr>
    <th class="tg-0lax" rowspan="2"><img src="<?php echo base_url().'assets/images/logo_citra.png'; ?>" id="logo" width="200" height="100"></th>
    <th class="tg-0lax">Klinik Citra Ardhita Medifarma</th>
  </tr>
  <tr>
    <td class="tg-0lax">Capitol Business Park B2, Jl. Niaga Raya Jababeka II, Cikarang Baru</td>
  </tr>
</table>

<hr>
<h1>INVOICE MEDICAL CHECKUP</h1>
Nama Perusahaan : <?php echo $data_perusahaan['nama_perusahaan']; ?>
<br>
<br>
Tanggal Medcheck    : <?php echo date('d M Y', strtotime($data_perusahaan['tanggal_mulai'])); ?>
<br>
<br>

<hr>
                	<table  style="width:100%" page-break-inside: auto;>
						 <thead align="left">
							<tr>
								<th align="left">No</th>
								<th align="left">Nama Pasien</th>
								<th align="left">Nama Pelayanan</th>								
								<th align="left">Nama Pemeriksaan</th>								
								<th></th>
								<th align="left">Harga Paket</th>
								
							</tr>
							  </thead>
							<tr> 
  <td colspan="6"> <hr /> </td>      
</tr>  
						
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
							?>	<tr align="left">
								<td><?php echo $ct; ?></td>
								<td><?php echo $val['nama_lengkap']; ?></td>    
								<td><?php echo $val['nama_pelayanan']; ?></td>
								<td><?php echo $val['nama_pemeriksaan']; ?></td>
								<td>Rp. </td>
								<td align="right"><?php echo $val['nilai_tagihan']; ?></td>		
								</tr>
								<?php $ct++; 
							}
							?>
							<tr> 
  <td colspan="6"> <hr /> </td>      
</tr>  
						<tr align="left">
								<td> </td>
								<td> </td>    
								<td> </td>    
								<td>Total  </td>
								<td>Rp. </td>
								<td align="right"><?php echo $total_tagihan['total_tagihan']; ?></td>		
								</tr>
					</table>
					

					
                
	</body>			

</html>
