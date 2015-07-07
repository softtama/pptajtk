<!DOCTYPE HTML>
<html>
	<head>
		<title>Koordinator</title>
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
				<li class="active"><a href="<?php echo base_url() ?>">Beranda</a></li>
				<li><a href="<?php echo base_url().'c_mengelolaKelompokTA' ?>">Pengelolaan Kelompok</a></li>
				<li class="">
					<a href="#" class="dropdown-toggle">Pengelolaan Seminar <b class="caret"></b></a>
					<ul class="dropdown-menu navmenu-nav" role="menu">
						<li class="dropdown-header">Seminar 1</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarSatu/uploadDokumenProposal' ?>">Upload Dokumen Proposal</a></li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarSatu/lihatJadwalSeminarSatu' ?>">Jadwal Seminar 1</a></li>
						<li><a href="#">Persyaratan Seminar 1</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Seminar 2</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarDua/uploadDokumenAnlSRS' ?>">Upload Dokumen Analisis dan SRS</a></li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarDua/lihatJadwalSeminarDua' ?>">Jadwal Seminar 2</a></li>
						<li><a href="#">Persyaratan Seminar 2</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Seminar 3</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarTiga/uploadDokumenDsgSDD' ?>">Upload Dokumen Desain dan SDD</a></li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarTiga/lihatJadwalSeminarTiga' ?>">Jadwal Seminar 3</a></li>
						<li><a href="#">Persyaratan Seminar 3</a></li>
					</ul>
				</li>
				<li class="">
					<a href="#" class="dropdown-toggle">Pengelolaan Sidang <b class="caret"></b></a>
					<ul class="dropdown-menu navmenu-nav" role="menu">
						<li><a href="#">Jadwal Sidang</a></li>
						<li><a href="#">Persyaratan Sidang</a></li>
					</ul>
				</li>
				<li><a href="#">Pengelolaan Nilai</a></li>
				<li><a href="#">Pengelolaan Revisi</a></li>
				<li><a href="#">Tren Topik Tugas Akhir</a></li>
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
					<li><a href="#">Beranda</a></li>
				</ol></small></h1>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title" style="margin-bottom: 10px;"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;Notifikasi</h3>
					<h4 class="panel-title">Pengelolaan Seminar / Seminar 3 / Persetujuan Jadwal Seminar 3</h4>
				</div>
				<div class="panel-body">
					<p>Jadwal pelaksanaan Seminar 3 untuk</p>
					<form class="form-horizontal">
						<div class="form-group" style="margin-bottom: 0;">
							<label class="col-md-2 control-label" style="text-align: left;">Kode Kelompok</label>
							<div class="col-md-8">
								<p id='vd_id_kota' class="form-control-static">KOTA 108</p>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 0;">
							<label class="col-md-2 control-label" style="text-align: left;">Topik Tugas Akhir</label>
							<div class="col-md-8">
								<p id='vd_id_kota' class="form-control-static">Pengelolaan Pelaksanaan Tugas Akhir POLBAN Berbasis Web</p>
							</div>
						</div>
					</form>
					<p style="margin: 10px 0;">yang dibuat oleh Santi Sundari pada Kamis, 30 April 2015, 11.00 WIB dengan detail sebagai berikut:</p>
					<form class="form-horizontal">
						<div class="form-group" style="margin-bottom: 0;">
							<label class="col-md-2 control-label" style="text-align: left;">Tanggal Seminar</label>
							<div class="col-md-8">
								<p id='vd_id_kota' class="form-control-static">Senin, 1 Juni 2015</p>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 0;">
							<label class="col-md-2 control-label" style="text-align: left;">Jam Seminar</label>
							<div class="col-md-8">
								<p id='vd_id_kota' class="form-control-static">08.40 WIB - 10.10 WIB</p>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 0;">
							<label class="col-md-2 control-label" style="text-align: left;">Ruangan Seminar</label>
							<div class="col-md-8">
								<p id='vd_id_kota' class="form-control-static">Ruang Rapat</p>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 0;">
							<label class="col-md-2 control-label" style="text-align: left;">Penguji Seminar</label>
							<div class="col-md-8">
								<p id='vd_id_kota' class="form-control-static">Joe Lian Min; Ida Suhartini</p>
							</div>
						</div>
					</form>
					<div style="margin: 10px 0;">telah dicermati oleh Joe Lian Min, Santi Sundari, Ferry Feirizal berturut-turut sebagai Pembimbing I, Penguji I, Penguji II, dan jadwal tersebut <h4 style="display: inline; margin-bottom: 0; margin-top: 0;"><span class="label label-danger">DITOLAK</span></h4>.</div>
					<div style="margin-top: 10px;">Harap cermati kembali jadwal ini oleh Koordinator, dan diskusikan dengan Pembimbing I kelompok ini.</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-md-12">Dipublikasikan oleh sistem, pada Jumat, 29 Mei 2015, 10.30 WIB</div>
					</div>
				</div>
			</div>
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