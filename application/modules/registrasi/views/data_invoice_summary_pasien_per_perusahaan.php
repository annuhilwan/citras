<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  
}
div.a {
  font-size: 30px;
}

</style>
</head>
<body>
<center><div class="a"><b><u>INVOICE</u></b></div></center>
<center>NO : <?php echo $data_perusahaan['no_invoice']; ?></center>
<table style="width:100%" class="tg">

  <tr>
    <td style="text-align:left;width:60%" class="tg-0lax">Kepada Yth.</td>
    <td style="text-align:left;width:40%">BANK ACCOUNT</td>
  </tr>
  <tr>
     <th style="text-align:left" class="tg-0lax"><?php echo $data_perusahaan['nama_perusahaan']; ?></th>
	 <td >BANK CIMB NIAGA</td>
  </tr>
  <tr>
     <td style="text-align:left" ><?php echo $data_perusahaan['alamat_satu']; ?></td>
	 <td >CITRA ADITHA MEDIFARMA</td>
  </tr>
  <tr>
     <td style="text-align:left" ><?php echo $data_perusahaan['alamat_dua']; ?></td>
	 <td >No Rek : 9320-2342-40424</td>
  </tr>
   <tr>
     <td style="text-align:left" >Telp : <?php echo $data_perusahaan['no_telp']; ?></td>
  </tr>
   <tr>
     <td style="text-align:left" >Up. Bagian Keuangan</td>
  </tr>
</table>



<br>
<br>

<hr>
                	<table  style="width:100%" page-break-inside: auto;>
						 <thead align="left">
							<tr>
								<th style="text-align:left">No</th>
								<th style="text-align:left">Keterangan</th>
								<th style="text-align:left">Harga Unit</th>								
								<th></th>
								<th>Jumlah</th>
								
							</tr>
							  </thead>
							<tr> 
  <td colspan="5"> <hr /> </td>      
</tr>  
						
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
							?>	<tr align="left">
								<td><?php echo $ct; ?></td>
								<td><?php echo $val['keterangan']; ?></td>    
								<td><?php echo $val['nilai_tagihan']; ?></td>
								<td>Rp. </td>
								<td align="right"><?php echo $val['total_tagihan']; ?></td>		
								</tr>
								<?php $ct++; 
							}
							?>
							<tr> 
  <td colspan="5"> <hr /> </td>      
</tr>  
						<tr align="left">
								<td> </td>
								<td> </td>    
								<td>Total  </td>
								<td>Rp. </td>
								<td align="right"><?php echo $total_tagihan['total_tagihan']; ?></td>		
								</tr>
					</table>
					

	<br>
<br>	
 <table style="width:100%" class="tg">

  <tr>
    <td style="text-align:left;width:60%" class="tg-0lax">Cikarang, <?php echo date("d M Y"); ?></td>
 
  </tr>
  <tr>
     <th style="text-align:left" class="tg-0lax">KLINIK CITRA ARDHITA MEDIFARMA</th>

  </tr>
</table>  

<br>
<br>
<table style="width:100%" class="tg">

  <tr>
    <td style="text-align:left;width:60%" class="tg-0lax"><b><u>Yossi Zulvizar<u></b></td>
  </tr>
  <tr>
     <td style="text-align:left" class="tg-0lax"><i>Accounting</i></td>
  </tr>
   <tr>
     <td style="text-align:left" class="tg-0lax">Bukti transfer harap di email ke financecitraardhitamedifarma@gmail.com</td>
  </tr>
</table>  
				

</html>
</body>