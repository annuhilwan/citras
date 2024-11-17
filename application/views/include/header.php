<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <?php $setting = setting_all();?>
  
  <link rel="icon" href="<?php echo base_url((setting_all('favicon'))?'assets/images/'.setting_all('favicon'):'assets/images/favicon.ico');?>">
  <title><?php echo (setting_all('website'))?setting_all('website'):'Dasboard';?></title>

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css'); ?>">
  <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-black-light.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-black-light.css');?>">
    <!--  <link rel="stylesheet" href="<?php echo base_url('assets/css/blue.css');?>">-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/buttons.dataTables.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/daterangepicker.css'); ?>" />
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>
    <body class="hold-transition skin-black-light sidebar-mini" data-base-url="<?php echo base_url(); ?>">
        <div class="wrapper">

          <header class="main-header">
		  <section class="hidden-xs">
            <a href="<?php echo base_url(); ?>" class="logo">
             <?php $logo =  (setting_all('logo'))?setting_all('logo'):'logo.png'; ?>
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><img src="<?php echo base_url().'assets/images/'.$logo; ?>" id="logo"></span>
              <!-- logo for regular state and mobile devices -->
			  
              <span class="logo-lg"><img src="<?php echo base_url().'assets/images/'.$logo; ?>" id="logo"></span>
			  
            </a>
            </section>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Control Sidebar Toggle Button -->
                        <!-- <li>
                          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li> -->
                        <!-- User Account: style can be found in dropdown.less -->          

                        <li class="dropdown user user-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <?php 
                 $profile_pic =  'user.png';
                 if(isset($this->session->userdata('user_details')[0]->profile_pic) && file_exists('assets/images/'.$this->session->userdata('user_details')[0]->profile_pic))
                              {
                                 $profile_pic = $this->session->userdata('user_details')[0]->profile_pic;
                              }?>
                              <img src="<?php echo base_url().'assets/images/'.$profile_pic;?>"  class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo isset($this->session->userdata('user_details')[0]->name)?$this->session->userdata('user_details')[0]->name:'';?></span>
                          </a>
                          <ul class="dropdown-menu" role="menu" style="width: 164px;">
                              <li><a href="<?php echo base_url('user/profile');?>"><i class="fa fa-user mr10"></i>My Account</a></li>
                              <li class="divider"></li>
                              <li><a href="<?php echo base_url('user/logout');?>"><i class="fa fa-power-off mr10"></i> Sign Out</a></li>
                          </ul>
                        </li>
                    </ul>
                </div>
            </nav>
          </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              
              <ul class="sidebar-menu">
                <li class="header"><!-- MAIN NAVIGATION --></li>
                <?php //echo '<pre>';print_r($this->router); die; ?>
                <li class="<?=($this->router->method==="profile")?"active":"not-active"?>"> 
                <a href="<?php echo base_url('user/profile');?>"> <i class="fa fa-user"></i> <span>My Account</span></a>
                </li>
				
				<?php if($this->session->userdata('user_details')[0]->user_type == 'admin') { ?>
				
				<li class="<?=($this->router->method==="search_data_pasien_new")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/search_data_pasien_new');?>"> <i class="fa fa-wheelchair"></i> <span>List Data Pasien</span></a>
                </li>
				
				<li class="<?=($this->router->method==="inputTransaksiBaru")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/inputTransaksiBaru');?>"> <i class="fa fa-book"></i> <span>Transaksi Pribadi</span></a>
                </li>
				
				<li class="<?=($this->router->method==="inputMedcheckPerusahaan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/inputMedcheckPerusahaan');?>"> <i class="fa fa-tasks"></i> <span>Transaksi Perusahaan</span></a>
                </li>
				
				
				
					<li class="<?=($this->router->method==="list_data_pelayanan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan');?>"> <i class="fa fa-calendar-plus-o"></i> <span>Data Medical Checkup</span></a>
					</li>
				
				<li class="<?=($this->router->method==="list_data_pelayanan_perusahaan_by_search")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan_perusahaan_by_search');?>"> <i class="fa fa-building"></i> <span>Data Medical Perusahaan</span></a>
                </li>
				
				<li class="<?=($this->router->method==="list_data_pelayanan_rawat_jalan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan_rawat_jalan');?>"> <i class="fa fa-calendar-o"></i> <span>Data Rawat Jalan</span></a>
                </li>
			
				
				
				 <!-- 
				
				<li class="<?=($this->router->method==="list_data_obat")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('apotek/list_data_obat');?>"> <i class="fa fa-user"></i> <span>Apotek</span></a>
                </li>
				
				<li class="<?=($this->router->method==="list_data_pembayaran")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('kasir/list_data_pembayaran');?>"> <i class="fa fa-user"></i> <span>Kasir</span></a>
                </li>
				
				-->
					<li>
                 <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-archive"></i>Master Pelayanan</a>
				  <ul class="collapse " id="homeSubmenu2">
				   <ul class="sidebar-menu">
						
						<li class="<?=($this->router->class==="registrasi/list_data_pelayanan")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_pemeriksaan');?>"> <i class="fa fa-circle"></i> <span>Master Pemeriksaan</span></a>
						</li>
						
						<li class="<?=($this->router->class==="registrasi/list_master_dokter")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_dokter');?>"> <i class="fa fa-circle"></i> <span>Master Dokter</span></a>
						</li>
						
						
						<li class="<?=($this->router->class==="registrasi/list_data_pelayanan")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_paket');?>"> <i class="fa fa-circle"></i> <span>Master Paket</span></a>
						</li>
						
						<li class="<?=($this->router->class==="registrasi/list_data_pelayanan")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_pertanyaan');?>"> <i class="fa fa-circle"></i> <span>Master Pertanyaan</span></a>
						</li>
						
						<li class="<?=($this->router->class==="registrasi/list_data_hasil_resume")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_data_hasil_resume');?>"> <i class="fa fa-circle"></i> <span>Master Hasil Resume</span></a>
						</li>
						
						<li class="<?=($this->router->class==="registrasi/list_data_pelayanan")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_satuan_hasil');?>"> <i class="fa fa-circle"></i> <span>Master Satuan Hasil</span></a>
						</li>
						
						
                      
						
                    </ul>
                    </ul>
                </li>
				
				<li>
                 <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-archive"></i>Master General</a>
				  <ul class="collapse " id="homeSubmenu">
				   <ul class="sidebar-menu">
						
						<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_perusahaan');?>"> <i class="fa fa-circle"></i> <span>Master Perusahaan</span></a>
						</li>
						
						<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_identitas');?>"> <i class="fa fa-circle"></i> <span>Master Identitas</span></a>
						</li>
                      
						<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_kota');?>"> <i class="fa fa-circle"></i> <span>Master Kota</span></a>
						</li>
                        
						<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_kecamatan');?>"> <i class="fa fa-circle"></i> <span>Master Kecamatan</span></a>
						</li>
                        
						<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_kelurahan');?>"> <i class="fa fa-circle"></i> <span>Master Kelurahan</span></a>
						</li>
						
						<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_tipe_pegawai');?>"> <i class="fa fa-circle"></i> <span>Master Tipe Pegawai</span></a>
						</li>
						
						<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_jabatan');?>"> <i class="fa fa-circle"></i> <span>Master Jabatan</span></a>
						</li>
						
						<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_bagian');?>"> <i class="fa fa-circle"></i> <span>Master Bagian</span></a>
						</li>
						
						<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_group');?>"> <i class="fa fa-circle"></i> <span>Master Group</span></a>
						</li>
						
						<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_jenis_pembayaran');?>"> <i class="fa fa-circle"></i> <span>Master Jenis Pembayaran</span></a>
						</li>
						
						<li class="<?=($this->router->class==="master/list_master_asuransi")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_asuransi');?>"> <i class="fa fa-circle"></i> <span>Master Asuransi</span></a>
						</li>
						
                    </ul>
                    </ul>
                </li>
				
				<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
                <a href="<?php echo base_url('#');?>"> <i class="fa fa-gear"></i> <span>Menu Administrator</span></a>
                </li>
									
				
                <?php $this->load->view("include/menu");?> 
                
               
               <li class="<?=($this->router->method==="userTable")?"active":"not-active"?>"> 
                        <a href="<?php echo base_url();?>user/userTable"> <i class="fa fa-users"></i> <span>Users</span></a>
                    </li>   
                    <li class="<?=($this->router->class==="setting")?"active":"not-active"?>">
                        <a href="<?php echo base_url("setting"); ?>"><i class="fa fa-cogs"></i> <span>Settings</span></a>
                    </li>
					
					
				<?php } ?>
				
				<?php if($this->session->userdata('user_details')[0]->user_type == 'Pasien') { ?>
					<li class="<?=($this->router->method==="list_data_pasien_new_per_pasien")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pasien_new_per_pasien');?>"> <i class="fa fa-wheelchair"></i> <span>List Data Pasien</span></a>
					</li>
					<?php } ?>
					
					<?php if($this->session->userdata('user_details')[0]->user_type == 'Perusahaan') { ?>
					<li class="<?=($this->router->method==="list_data_medcheck_per_perusahaan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_medcheck_per_perusahaan');?>"> <i class="fa fa-building"></i> <span>Data Medical Perusahaan</span></a>
					</li>
					<?php } ?>
					
					<?php if($this->session->userdata('user_details')[0]->user_type == 'Lab') { ?>
					<li class="<?=($this->router->method==="search_data_pasien_new")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/search_data_pasien_new');?>"> <i class="fa fa-wheelchair"></i> <span>List Data Pasien</span></a>
					</li>
					
					<li class="<?=($this->router->method==="list_data_pelayanan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan');?>"> <i class="fa fa-calendar-plus-o"></i> <span>Data Medical Checkup</span></a>
					</li>
					
					<li class="<?=($this->router->method==="list_data_pelayanan_perusahaan_by_search")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan_perusahaan_by_search');?>"> <i class="fa fa-building"></i> <span>Data Medical Perusahaan</span></a>
					</li>
					
					<li class="<?=($this->router->class==="siswa")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_perusahaan');?>"> <i class="fa fa-user"></i> <span>Master Perusahaan</span></a>
						</li>
						
						<li class="<?=($this->router->class==="registrasi/list_data_pelayanan")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_master_satuan_hasil');?>"> <i class="fa fa-user"></i> <span>Master Satuan Hasil</span></a>
						</li>
					
					<?php } ?>
					
					<?php if($this->session->userdata('user_details')[0]->user_type == 'Marketing') { ?>
					<li class="<?=($this->router->method==="search_data_pasien_new")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/search_data_pasien_new');?>"> <i class="fa fa-wheelchair"></i> <span>List Data Pasien</span></a>
					</li>
					
					<li class="<?=($this->router->method==="inputMedcheckPerusahaan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/inputMedcheckPerusahaan');?>"> <i class="fa fa-tasks"></i> <span>Transaksi Perusahaan</span></a>
					</li>
					
					<li class="<?=($this->router->method==="list_data_pelayanan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan');?>"> <i class="fa fa-calendar-plus-o"></i> <span>Data Medical Checkup</span></a>
					</li>
					
					<li class="<?=($this->router->method==="list_data_pelayanan_perusahaan_by_search")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan_perusahaan_by_search');?>"> <i class="fa fa-building"></i> <span>Data Medical Perusahaan</span></a>
					</li>
					
					<li class="<?=($this->router->class==="registrasi/list_data_pelayanan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('master/list_master_paket');?>"> <i class="fa fa-user"></i> <span>Master Paket</span></a>
					</li>
					
					<?php } ?>
					
					
					<?php if($this->session->userdata('user_details')[0]->user_type == 'Medical Record') { ?>
					<li class="<?=($this->router->method==="search_data_pasien_new")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/search_data_pasien_new');?>"> <i class="fa fa-wheelchair"></i> <span>List Data Pasien</span></a>
					</li>
					
					
					<li class="<?=($this->router->method==="list_data_pelayanan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan');?>"> <i class="fa fa-calendar-plus-o"></i> <span>Data Medical Checkup</span></a>
					</li>
					
					<li class="<?=($this->router->method==="list_data_pelayanan_perusahaan_by_search")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan_perusahaan_by_search');?>"> <i class="fa fa-building"></i> <span>Data Medical Perusahaan</span></a>
					</li>
					

<li class="<?=($this->router->method==="list_data_pelayanan_rawat_jalan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan_rawat_jalan');?>"> <i class="fa fa-calendar-o"></i> <span>Data Rawat Jalan</span></a>
                </li>

					
					<li class="<?=($this->router->class==="registrasi/list_data_hasil_resume")?"active":"not-active"?>"> 
						<a href="<?php echo base_url('master/list_data_hasil_resume');?>"> <i class="fa fa-user"></i> <span>Master Hasil Resume</span></a>
						</li>
					
					<?php } ?>
					
					<?php if($this->session->userdata('user_details')[0]->user_type == 'Perawat Pendaftaran') { ?>
					<li class="<?=($this->router->method==="search_data_pasien_new")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/search_data_pasien_new');?>"> <i class="fa fa-wheelchair"></i> <span>List Data Pasien</span></a>
					</li>
					
					<li class="<?=($this->router->method==="inputTransaksiBaru")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/inputTransaksiBaru');?>"> <i class="fa fa-book"></i> <span>Transaksi Pribadi</span></a>
                </li>
					
					
					<li class="<?=($this->router->method==="list_data_pelayanan")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan');?>"> <i class="fa fa-calendar-plus-o"></i> <span>Data Medical Checkup</span></a>
					</li>
					
					<li class="<?=($this->router->method==="list_data_pelayanan_perusahaan_by_search")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('registrasi/list_data_pelayanan_perusahaan_by_search');?>"> <i class="fa fa-building"></i> <span>Data Medical Perusahaan</span></a>
					</li>
					
					
					<?php } ?>
			</ul>
			</section>
			</aside>  
                    <!-- <li class="<?php //echo ($this->router->class==="Templates")?"active":"not-active"?>">
                        <a href="<?php //echo base_url("Templates"); ?>"><i class="fa fa-cubes"></i> <span>Templates</span></a>
                    </li> -->
                   
                   <!--  <li class="<?=($this->router->class==="invoice")?"active":"not-active"?>">
                        <a href="<?php echo base_url("invoice/view"); ?>"><i class="fa fa-list-alt"></i> <span>Invoice</span></a>
                    </li>

             
				<!--
                  <li class="<?=($this->router->class==="about")?"active":"not-active"?>">
                        <a href="<?php echo base_url("about"); ?>"><i class="fa fa-info-circle"></i> <span>About Us</span></a>
                    </li>
*/

              
            
            <!-- /.sidebar -->
                
