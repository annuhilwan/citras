<!DOCTYPE html>
<html>
<head>

<style type="text/css">
     .txtedit{
        display: none;
        width: 98%;
     }

	 
.selected{
  color:green;
}
.bad{
  color:red;
}

p:empty {
  width: 100%;
  height: 20px;
  background: red;
}

.lab tr > *:nth-child(5) {
    display: none;
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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper clearfix">
<!-- Main content -->
	<div class="col-md-12 form f-label">
	
    <!-- Profile Image -->
		<div class="box box-success pad-profile">
			
			<form method="post" enctype="multipart/form-data" class="form-label-left" onsubmit="return(validate());">
				<div class="box-body box-profile">
					<div class="row">
					<input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $arrDataPasien['id']; ?>"   class="form-control" placeholder="Data dokter pemeriksa" >
					
						<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h3>Nama Pasien: <?php echo $arrDataPasien['nama_lengkap']; ?></h3>
						
					<div class="clearfix"></div>
					
				</div>
				<div class="x_content">
					
					
					<div id="myTabContent" class="tab-content">
					
						<div role="tabpanel" class="tab-pane active in" id="tab_content1" aria-labelledby="spj-tab">
						
						
						<h3>Tagihan Paket Laboratorium: </h3>
						
							<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='33%'>Nama Paket</th>	
           <th width='33%'>Nilai Tagihan</th>
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataPaketLab as $user){
         $id = $user['id'];
		 $nama_paket = $user['nama_paket'];
		 $jumlah_nilai = $user['jumlah_nilai'];
         $nilai_tagihan = $user['nilai_tagihan'];

         echo "<tr>";
         echo "<td>
          <span  >".$nama_paket."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_paket' id='emailtxt_".$id."' value='".$nama_paket."' >
         </td>";
		  
		 echo "<td >
          <span  >".$nilai_tagihan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nilai_tagihan' id='emailtxt_".$id."' value='".$nilai_tagihan."' >
         </td>";
         echo "</tr>";
       }
       ?>
       </tbody>
     </table>
	 
	 <br>
	 <br>
	 
	 
	 <h3>Tagihan Tambahan Pemeriksaan: </h3>
						
							<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='33%'>Nama Paket</th>	
           <th width='33%'>Nilai Tagihan</th>
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataTambahanPemeriksaan as $user){
         $id = $user['id'];
		 $nama_pemeriksaan = $user['nama_pemeriksaan'];
		 $jumlah_nilai = $user['jumlah_nilai'];
         $nilai_tagihan = $user['nilai_tagihan'];

         echo "<tr>";
         echo "<td>
          <span  >".$nama_pemeriksaan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_pemeriksaan' id='emailtxt_".$id."' value='".$nama_pemeriksaan."' >
         </td>";
		  
		 echo "<td >
          <span  >".$nilai_tagihan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nilai_tagihan' id='emailtxt_".$id."' value='".$nilai_tagihan."' >
         </td>";
         echo "</tr>";
       }
       ?>
       </tbody>
     </table>
	 <br>
	 <br>
						<h3>Tagihan Obat: </h3>
						
							<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='33%'>Nama Obat</th>	
           <th width='33%'>Jumlah Obat</th>
           <th width='33%'>Nilai Tagihan</th>
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataObat as $user){
         $id = $user['id'];
		 $nama_obat = $user['nama_obat'];
		 $jumlah_nilai = $user['jumlah_nilai'];
         $nilai_tagihan = $user['nilai_tagihan'];

         echo "<tr>";
         echo "<td>
          <span  >".$nama_obat."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_obat' id='emailtxt_".$id."' value='".$nama_obat."' >
         </td>";
		  echo "<td>
         <span class='edit' ><p>".$jumlah_nilai."</p></span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='jumlah_nilai' id='emailtxt_".$id."' value='".$jumlah_nilai."' >
         </td>";
		 echo "<td >
          <span  >".$nilai_tagihan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nilai_tagihan' id='emailtxt_".$id."' value='".$nilai_tagihan."' >
         </td>";
         echo "</tr>";
       }
       ?>
       </tbody>
     </table>
				<br>
	 <br>			
							
						<h3>Total Tagihan : Rp. <?php echo $data_total_tagihan['total_tagihan']; ?></h3>	
							
						
							
							
						</div>
					
						
						
						
						
						
						
						
						
						
					<div class="modal fade" id="nameModal_user" role="dialog">
  <div class="modal-dialog">
    <div class="box box-primary popup" >
     
      <!-- /.box-header -->
      <div class="modal-body" style="padding: 0px 0px 0px 0px;"></div>
    </div>
  </div>
</div><!--End Modal Crud --> 
						
					</div>
                </div>  
				
			
				
				
				
				
			</div>
		</div>
						
						
						
						
						
					</div>
					
				</div>
				
					
			</form>   

		<div>
		
		
</div>		
		<!-- /.box -->
		
		
	
	
		</div>
		
		
	
	
    <!-- /.content -->
	</div>
</div>

	</body>			

</html>