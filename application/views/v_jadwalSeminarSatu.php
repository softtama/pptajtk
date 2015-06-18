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
				<li class=""><a href="<?php echo base_url().'c_mengelolaKelompokTA' ?>">Pengelolaan Kelompok</a></li>
				<li class="active">
					<a href="#" class="dropdown-toggle">Pengelolaan Seminar <b class="caret"></b></a>
					<ul class="dropdown-menu navmenu-nav" role="menu">
						<li class="dropdown-header">Seminar 1</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarSatu/uploadDokumenProposal' ?>">Upload Dokumen Proposal</a></li>
						<li class="active"><a href="<?php echo base_url().'c_mengelolaSeminarSatu/lihatJadwalSeminarSatu' ?>">Jadwal Seminar 1</a></li>
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
					<div class="col-sm-3 col-md-3">
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
						<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Pesan</a></li>
						<li><a data-placement="bottom" data-toggle="popover-login" data-title="Login" data-container="body" type="button" data-html="true" href="#" id="login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Halo, Guest!</a></li>
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
				<h1><small>Pengelolaan Seminar / Jadwal Seminar 1</small></h1>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<a href="#" id='btn_addnew' class="btn btn-primary" name='btn_addnew' type="button" data-toggle="modal" data-target="#modalTambahKelompokTA"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah Jadwal Seminar</a>
				</div>
				<div class="col-md-6" align="right">
					<a href="<?php echo base_url().'c_mengelolaKelompokTA/postKelompokTA' ?>" id='btn_addnew' class="btn btn-success" name='btn_addnew' type="button"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;Publikasikan Semua Jadwal</a>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12" style="text-align: center;">
					<nav>
						<ul class="pagination" style="margin: 0;">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
							<li><a href="#">Februari</a></li>
							<li class="active"><a href="#">Maret</a></li>
							<li><a href="#">April</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<table class="table table-hover table-bordered table-striped jadwal-seminar">
				<thead>
					<tr>
						<th class="success" width="170">Senin</th>
						<th class="success" width="170">Selasa</th>
						<th class="success" width="170">Rabu</th>
						<th class="success" width="170">Kamis</th>
						<th class="success" width="170">Jumat</th>
						<th class="danger" width="170">Sabtu</th>
						<th class="danger" width="170">Minggu</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><div>
							KOTA 101 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 103 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 105 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 201 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 203 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a>
						</div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
					</tr>
					<tr>
						<td><div>
							KOTA 102 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 104 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 106 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 202 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 204 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a>
						</div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
					</tr>
					<tr>
						<td><div>
							KOTA 107 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 109 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 205 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 207 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a>
						</div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
					</tr>
					<tr>
						<td><div>
							KOTA 206 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 208 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 209 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 210 <a href="#" class="btn btn-primary btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a>
						</div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
					</tr>
					<tr>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
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