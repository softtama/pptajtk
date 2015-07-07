<!DOCTYPE HTML>
<html>
	<head>
		<title>Pengelolaan Pelaksanaan Tugas Akhir JTK</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jasny-bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	</head>
	<body>
		<!-- Fixed Left Sidebar Nav Menu -->
		<nav class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm" role="navigation">
			<a class="navmenu-brand" href="#">Pengelolaan Pelaksanaan TA JTK</a>
			<ul class="nav navmenu-nav">
				<li><a href="<?php echo base_url() ?>">Beranda</a></li>
				<li><a href="<?php echo base_url().'c_mengelolaKelompokTAtemp' ?>">Pengelolaan Kelompok Sementara</a></li>
				<li><a href="<?php echo base_url().'c_mengelolaKelompokTA' ?>">Pengelolaan Kelompok</a></li>
				<li>
					<a href="#" class="dropdown-toggle">Pengelolaan Seminar <b class="caret"></b></a>
					<ul class="dropdown-menu navmenu-nav" role="menu">
						<li class="dropdown-header">Seminar 1</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarSatu/daftarDokumenProposal' ?>">Daftar Dokumen Proposal TA Kelompok</a></li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarSatu/lihatJadwalSeminarSatu' ?>">Jadwal Seminar 1</a></li>
					
						<li class="divider"></li>
						<li class="dropdown-header">Seminar 2</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarDua/daftarDokumenAnlSRS' ?>">Daftar Dokumen Analisis dan SRS Kelompok</a></li>
						<li class=""><a href="<?php echo base_url().'c_mengelolaSeminarDua/lihatJadwalSeminarDua' ?>">Jadwal Seminar 2</a></li>
						
						<li class="divider"></li>
						<li class="dropdown-header">Seminar 3</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarTiga/daftarDokumenDsgSDD' ?>">Daftar Dokumen Desain dan SDD Kelompok</a></li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarTiga/lihatJadwalSeminarTiga' ?>">Jadwal Seminar 3</a></li>
						
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">Pengelolaan Sidang <b class="caret"></b></a>
					<ul class="dropdown-menu navmenu-nav" role="menu">
						<li><a href="#">Jadwal Sidang</a></li>
						<li><a href="#">Persyaratan Sidang</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url().'c_mengelolaNilai' ?>">Pengelolaan Nilai</a></li>
				<li class="active"><a href="<?php echo base_url().'c_mengelolaRevisi' ?>">Pengelolaan Revisi</a></li>
			
			</ul>
		</nav>

		<!-- Top Nav Menu -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="col-md-3 col-md-3">
				        <form class="navbar-form" role="search">
				        <div class="input-group">
				            <input type="text" class="form-control" placeholder="Cari" name="search" id="search">
				            <div class="input-group-btn">
				                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
				            </div>
				        </div>
				        </form>
				    </div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url().'c_pesan' ?>"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Pesan</a></li>
						<li><a data-placement="bottom" data-toggle="popover-login" data-title="Login" data-container="body" type="button" data-html="true" href="#" id="login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Halo, Ida!</a></li>
						<div id="popover-login-content" class="hide">
					      <form class="form-inline" role="form">
					        <div class="form-group">
					          <input type="text" placeholder="Username" class="form-control" maxlength="20">
					          <input type="password" placeholder="Password" class="form-control" maxlength="20"><br>
					          <button type="submit" class="btn btn-primary">Login</button>                                  
					        </div>
					      </form>
					    </div>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<!-- Main Content -->
		<div class="container flex-container container-below-navbar-fixed-top">
			<div class="page-header">
				<h1><small><ol class="breadcrumb">
					<li><a href="#">Pengelolaan Revisi Laporan Hasil Sidang</a></li>
				</ol></small></h1>
			</div>
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th width="20" style="text-align: center;">No</th>
						<th width="20" style="text-align: center;">Kode Kelompok</th>
						<th width="20" style="text-align: center;">Nama Topik Tugas Akhir</th>
						<th width="20" style="text-align: center;">Status Revisi</th>
						<th width="50" style="text-align: center;">Opsi</th>
					</tr>
				</thead>
				<tbody>
					<tr align="center">
						<td>1</td>
						<td>KoTa 121</td>
						<td>Pengelolaan Pelaksanaan Tugas Akhir Polban</td>
						<td>Belum Mengumpulkan Revisi Laporan Hasil Sidang</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu">
							<span class=""></span>&nbsp;Belum</a>
						</td>
					</tr>
					<tr align="center">
						<td>1</td>
						<td>KoTa 122</td>
						<td>Pengelolaan Aplikasi Truck</td>
						<td>Belum Mengumpulkan Revisi Laporan Hasil Sidang</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu">
							<span class=""></span>&nbsp;Belum</a>
						</td>
					</tr>
					<tr align="center">
						<td>1</td>
						<td>KoTa 123</td>
						<td>Pengelolaan Pelaksanaan Tugas Akhir Polban</td>
						<td>SudahMengumpulkan Revisi Laporan Hasil Sidang</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu">
							<span class=""></span>&nbsp;Sudah</a>
						</td>
					</tr>
					<tr align="center">
						<td>1</td>
						<td>KoTa 124</td>
						<td>Pengelolaan Pelaksanaan Tugas Akhir Polban</td>
						<td>Sudah Mengumpulkan Revisi Laporan Hasil Sidang</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu">
							<span class=""></span>&nbsp;Sudah</a>
						</td>
					</tr>
					<tr align="center">
						<td>1</td>
						<td>KoTa 125</td>
						<td>Pengelolaan Pelaksanaan Tugas Akhir Polban</td>
						<td>Belum Mengumpulkan Revisi Laporan Hasil Sidang</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu">
							<span class=""></span>&nbsp;Belum</a>
						</td>
					</tr>
					<tr align="center">
						<td>1</td>
						<td>KoTa 126</td>
						<td>Pengelolaan Pelaksanaan Tugas Akhir Polban</td>
						<td>Sudah Mengumpulkan Revisi Laporan Hasil Sidang</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu">
							<span class=""></span>&nbsp;Sudah</a>
						</td>
					</tr>
					<tr align="center">
						<td>1</td>
						<td>KoTa 127</td>
						<td>Pengelolaan Pelaksanaan Tugas Akhir Polban</td>
						<td>Belum Mengumpulkan Revisi Laporan Hasil Sidang</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu">
							<span class=""></span>&nbsp;Belum</a>
						</td>
					</tr>
					<tr align="center">
						<td>1</td>
						<td>KoTa 128</td>
						<td>Pengelolaan Pelaksanaan Tugas Akhir Polban</td>
						<td>Belum Mengumpulkan Revisi Laporan Hasil Sidang</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu">
							<span class=""></span>&nbsp;Belum</a>
						</td>
					</tr>
					<tr align="center">
						<td>1</td>
						<td>KoTa 129</td>
						<td>Pengelolaan Pelaksanaan Tugas Akhir Polban</td>
						<td>Belum Mengumpulkan Revisi Laporan Hasil Sidang</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu">
							<span class=""></span>&nbsp;Belum</a>
						</td>
					</tr>
					<tr align="center">
						<td>1</td>
						<td>KoTa 130</td>
						<td>Pengelolaan Pelaksanaan Tugas Akhir Polban</td>
						<td>Belum Mengumpulkan Revisi Laporan Hasil Sidang</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu">
							<span class=""></span>&nbsp;Belum</a>
						</td>
					</tr>
				</tbody>	
			</table>
		</div>
		
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jasny-bootstrap.min.js"></script>
		<script type="text/javascript">
			$("[data-toggle=popover-login]").popover({
			    html: true, 
				content: function() {
		        	return $('#popover-login-content').html();
		        }
			});
		</script>
	</body>
</html>