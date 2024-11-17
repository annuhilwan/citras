<!DOCTYPE html>
<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <style>
    @page {
  size: 21.5cm 4.7cm;
  margin-top: 0.2cm;
  margin-left: 0.1cm;
}


td, th {
font-weight: normal;
  text-align: left;

}
body {
  font-size: 10px;
}
  </style>
</head><body>
<table>
<tr>
<th>
  <b>CITRA ARDHITA MEDIFARMA</b>
  <br/>
  <b>MCU : <?php echo $data['nama_pt']; ?></b>
  <br/>
  Paket : <?php echo $data['nama_paket']; ?>
  <br/>
  No MCU : <?php echo $data['no_medcheck']; ?>
  <br>
  NIK : <?php echo $data['no_identitas']; ?>
  <br/>
  NAMA : <?php echo $data['nama_lengkap']; ?>
  <br/>
  BAGIAN : <?php echo $data['bagian']; ?>
  <br/>
  UMUR : <?php echo $data_lahir['jumlah_hari_lahir']; ?>
  <br/>
  Tanggal MCU : <?php echo date('d M Y', strtotime(date('Y-m-d'))); ?>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
   <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
   <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <b>MCU : <?php echo $data['nama_pt']; ?></b>
  <br/>
  Paket : <?php echo $data['nama_paket']; ?>
  <br/>
  No MCU : <?php echo $data['no_medcheck']; ?>
  <br/>
 NIK : <?php echo $data['no_identitas']; ?>
  <br/>
  NAMA : <?php echo $data['nama_lengkap']; ?>
  <br>
  BAGIAN : <?php echo $data['bagian']; ?>
  <br/>
  UMUR : <?php echo $data_lahir_tahun['jumlah_hari_lahir']; ?>
  <br/>
  Tanggal MCU : <?php echo date('d M Y', strtotime(date('Y-m-d'))); ?>
  </th>
  </tr>
  </table>

  <?php foreach($data_tipe_periksa as $periksa) { ?>
<table>
<tr>
<th>
  <b>CITRA ARDHITA MEDIFARMA</b>
  <br/>
  <b>MCU : <?php echo $data['nama_pt']; ?></b>
  <br/>
  <b>Pemeriksaan : <?php echo $periksa['name']; ?></b>
  <br/>
  Paket : <?php echo $data['nama_paket']; ?>
  <br/>
  No MCU : <?php echo $data['no_medcheck']; ?>
  <br>
  NIK : <?php echo $data['no_identitas']; ?>
  <br/>
  NAMA : <?php echo $data['nama_lengkap']; ?>
  <br/>
  BAGIAN : <?php echo $data['bagian']; ?>
  <br/>
  UMUR : <?php echo $data_lahir['jumlah_hari_lahir']; ?>
  <br/>
  Tanggal MCU : <?php echo date('d M Y', strtotime(date('Y-m-d'))); ?>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
   <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
   <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <p></p>
  </th>
  <th>
  <b>MCU : <?php echo $data['nama_pt']; ?></b>
  <br/>
  <b>Pemeriksaan : <?php echo $periksa['name']; ?></b>
  <br/>
  Paket : <?php echo $data['nama_paket']; ?>
  <br/>
  No MCU : <?php echo $data['no_medcheck']; ?>
  <br/>
 NIK : <?php echo $data['no_identitas']; ?>
  <br/>
  NAMA : <?php echo $data['nama_lengkap']; ?>
  <br>
  BAGIAN : <?php echo $data['bagian']; ?>
  <br/>
  UMUR : <?php echo $data_lahir_tahun['jumlah_hari_lahir']; ?>
  <br/>
  Tanggal MCU : <?php echo date('d M Y', strtotime(date('Y-m-d'))); ?>
  </th>
  </tr>
  </table>
  <?php } ?>
  
  
</body></html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
	
  
  getAge();
  
});

function getAge() {
	var tanggalLahirPasien =0;
	tanggalLahirPasien = "01-01-2010";
	var now = new Date();
	var today = new Date(now.getFullYear(),now.getMonth(),now.getDate());
	console.log(tanggalLahirPasien);
	console.log(tanggalLahirPasien.substring(6,10));
	console.log(tanggalLahirPasien.substring(3,5));
	console.log(tanggalLahirPasien.substring(0,2)-1);
	var yearNow = now.getFullYear();
	console.log(now);
  
	var monthNow = now.getMonth();
	var dateNow = now.getDate();

	var dob = new Date(tanggalLahirPasien.substring(6,10),                                  
						tanggalLahirPasien.substring(3,5),
						tanggalLahirPasien.substring(0,2)-1					 
	);

	var yearDob = dob.getFullYear();
	var monthDob = dob.getMonth();
	var dateDob = dob.getDate();
	var age = {};
	var ageString = "";
	var yearString = "";
	var monthString = "";
	var dayString = "";

	yearAge = yearNow - yearDob;
	
	if (monthNow >= monthDob)
		var monthAge = monthNow - monthDob;
	else {
		yearAge--;
		var monthAge = 12 + monthNow -monthDob;
	}

	if (dateNow >= dateDob)
		var dateAge = dateNow - dateDob;
	else {
		monthAge--;
		var dateAge = 31 + dateNow - dateDob;

		if (monthAge < 0) {
			monthAge = 11;
			yearAge--;
		}
	}

	age = {
		years: yearAge,
		months: monthAge,
		days: dateAge
	};

	if ( age.years > 1 ) yearString = " tahun";
	else yearString = " tahun";
	if ( age.months> 1 ) monthString = " bulan";
	else monthString = " bulan";
	if ( age.days > 1 ) dayString = " hari";
	else dayString = " hari";


  if ( (age.years > 0) && (age.months > 0) && (age.days > 0) )
    ageString = age.years + yearString + ", " + age.months + monthString + ", dan " + age.days + dayString + ".";
  else if ( (age.years == 0) && (age.months == 0) && (age.days > 0) )
    ageString = "Hanya " + age.days + dayString + " !";
  else if ( (age.years > 0) && (age.months == 0) && (age.days == 0) )
    ageString = age.years + yearString + ". Selamat Ulang Tahun!!";
  else if ( (age.years > 0) && (age.months > 0) && (age.days == 0) )
    ageString = age.years + yearString + " dan " + age.months + monthString + ".";
  else if ( (age.years == 0) && (age.months > 0) && (age.days > 0) )
    ageString = age.months + monthString + " dan " + age.days + dayString + ".";
  else if ( (age.years > 0) && (age.months == 0) && (age.days > 0) )
    ageString = age.years + yearString + " dan " + age.days + dayString + ".";
  else if ( (age.years == 0) && (age.months > 0) && (age.days == 0) )
    ageString = age.months + monthString + ".";
  else ageString = "Oops! Tidak dapat menghitung umur!";
  
  age_now.value =ageString;

  return ageString;
}
</script>