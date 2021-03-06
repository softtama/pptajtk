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
				<li><a href="<?php echo base_url() ?>">Beranda</a></li>
				<li><a href="<?php echo base_url().'c_mengelolaKelompokTAtemp' ?>">Pengelolaan Kelompok Sementara</a></li>
				<li><a href="<?php echo base_url().'c_mengelolaKelompokTA' ?>">Pengelolaan Kelompok</a></li>
				<li class="active">
					<a href="#" class="dropdown-toggle">Pengelolaan Seminar <b class="caret"></b></a>
					<ul class="dropdown-menu navmenu-nav" role="menu">
						<li class="dropdown-header">Seminar 1</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarSatu/daftarDokumenProposal' ?>">Daftar Dokumen Proposal TA Kelompok</a></li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarSatu/lihatJadwalSeminarSatu' ?>">Jadwal Seminar 1</a></li>
						<li><a href="#">Persyaratan Seminar 1</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Seminar 2</li>
						<li class="active"><a href="<?php echo base_url().'c_mengelolaSeminarDua/daftarDokumenAnlSRS' ?>">Daftar Dokumen Analisis dan SRS Kelompok</a></li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarDua/lihatJadwalSeminarDua' ?>">Jadwal Seminar 2</a></li>
						<li><a href="#">Persyaratan Seminar 2</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Seminar 3</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarTiga/daftarDokumenDsgSDD' ?>">Daftar Dokumen Desain dan SDD Kelompok</a></li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarTiga/lihatJadwalSeminarTiga' ?>">Jadwal Seminar 3</a></li>
						<li><a href="#">Persyaratan Seminar 3</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">Pengelolaan Sidang <b class="caret"></b></a>
					<ul class="dropdown-menu navmenu-nav" role="menu">
						<li><a href="<?php echo base_url().'c_mengelolaSidang/lihatJadwalSidang' ?>">Jadwal Sidang</a></li>
						<li><a href="#">Persyaratan Sidang</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url().'c_mengelolaNilai' ?>">Pengelolaan Nilai</a></li>
				<li><a href="<?php echo base_url().'c_mengelolaRevisi' ?>">Pengelolaan Revisi</a></li>
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
						<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Pesan</a></li>
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
					<li><a href="#">Pengelolaan Seminar</a></li>
					<li><a href="#">Seminar 2</a></li>
					<li><a href="#">Daftar Dokumen Analisis dan SRS Kelompok</a></li>
				</ol></small></h1>
			</div>

			<?php if ($is_validated_yes === true) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Validasi dokumen Analisis dan SRS KOTA 101 dengan status LAYAK berhasil dilakukan!</strong>
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($is_validated_yes === false) { ?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				<strong>Validasi dokumen Analisis dan SRS KOTA 101 dengan status LAYAK gagal dilakukan!</strong> Silakan coba lagi.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($is_validated_no === true) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Validasi dokumen Analisis dan SRS KOTA 101 dengan status TIDAK LAYAK berhasil dilakukan!</strong>
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($is_validated_no === false) { ?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				<strong>Validasi dokumen Analisis dan SRS KOTA 101 dengan status TIDAK LAYAK gagal dilakukan!</strong> Silakan coba lagi.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($is_updated_yes === true) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Perubahan status dokumen Analisis dan SRS KOTA 106 dari TIDAK LAYAK menjadi LAYAK berhasil dilakukan!</strong>
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($is_updated_yes === false) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Perubahan status dokumen Analisis dan SRS KOTA 106 dari TIDAK LAYAK menjadi LAYAK gagal dilakukan!</strong> Silakan coba lagi.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($is_updated_no === true) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Perubahan status dokumen Analisis dan SRS KOTA 108 dari LAYAK menjadi TIDAK LAYAK berhasil dilakukan!</strong>
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($is_updated_no === false) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Perubahan status dokumen Analisis dan SRS KOTA 108 dari LAYAK menjadi TIDAK LAYAK gagal dilakukan!</strong> Silakan coba lagi.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } ?>

			<table class="table table-hover table-bordered table-striped" style="margin-top: 0;">
				<thead>
					<tr>
						<th width="130">Kode Kelompok</th>
						<th>Nama Topik Tugas Akhir</th>
						<th style="text-align: center;" width="220">Status</th>
						<th style="text-align: center;" width="130">Detail Dokumen</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>KOTA 101</td>
						<td>Penerapan Semantic Web terhadap Portal Inkubator Bisnis POLBAN</td>
						<td style="text-align: center;" class="info">Sudah Mengumpulkan</td>
						<td style="text-align: center;">
							<a href="#" class="btn btn-info cell" data-toggle="modal" data-target="#modalLihatDetailProposal_101">
								<span class="glyphicon glyphicon-file"></span>
							</a>
						</td>
					</tr>
					<tr>
						<td>KOTA 102</td>
						<td>Aplikasi Pemesanan Travel Berbasis Android</td>
						<td style="text-align: center;" class="info">Sudah Mengumpulkan</td>
						<td style="text-align: center;">
							<a href="#" class="btn btn-info cell" data-toggle="modal" data-target="#modalLihatDetailProposal">
								<span class="glyphicon glyphicon-file"></span>
							</a>
						</td>
					</tr>
					<tr>
						<td>KOTA 103</td>
						<td>Software Tools dengan Menggunakan AHP</td>
						<td style="text-align: center;" class="warning">Belum Mengumpulkan</td>
						<td style="text-align: center;">
							<a href="#" class="btn btn-info cell disabled" data-toggle="modal" data-target="#modalLihatDetailProposal">
								<span class="glyphicon glyphicon-file"></span>
							</a>
						</td>
					</tr>
					<tr>
						<td>KOTA 104</td>
						<td>Aplikasi Tempat Wisata dan Kuliner di Indonesia</td>
						<td style="text-align: center;" class="warning">Belum Mengumpulkan</td>
						<td style="text-align: center;">
							<a href="#" class="btn btn-info cell disabled" data-toggle="modal" data-target="#modalLihatDetailProposal">
								<span class="glyphicon glyphicon-file"></span>
							</a>
						</td>
					</tr>
					<tr>
						<td>KOTA 105</td>
						<td>Aplikasi Penghitung Jumlah Trombosit Berbasis Pengolahan Citra Digital</td>
						<td style="text-align: center;" class="success">Sudah Divalidasi, Layak</td>
						<td style="text-align: center;">
							<a href="#" class="btn btn-info cell" data-toggle="modal" data-target="#modalLihatDetailProposal">
								<span class="glyphicon glyphicon-file"></span>
							</a>
						</td>
					</tr>
					<tr>
						<td>KOTA 106</td>
						<td>Aplikasi Animasi 3D pada Android untuk Pembelajaran Shalat Anak Usia 6-8 Tahun</td>
						<td style="text-align: center;" class="danger">Sudah Divalidasi, Tidak Layak</td>
						<td style="text-align: center;">
							<a href="#" class="btn btn-info cell" data-toggle="modal" data-target="#modalLihatDetailProposal_106">
								<span class="glyphicon glyphicon-file"></span>
							</a>
						</td>
					</tr>
					<tr>
						<td>KOTA 107</td>
						<td>Penerapan Metode Event Stream Processing untuk Memperoleh Informasi Kegiatan Coding Mahasiswa di Lab secara Real-Time</td>
						<td style="text-align: center;" class="success">Sudah Divalidasi, Layak</td>
						<td style="text-align: center;">
							<a href="#" class="btn btn-info cell" data-toggle="modal" data-target="#modalLihatDetailProposal">
								<span class="glyphicon glyphicon-file"></span>
							</a>
						</td>
					</tr>
					<tr>
						<td>KOTA 108</td>
						<td>Pengelolaan Pelaksanaan Tugas Akhir POLBAN Berbasis Web</td>
						<td style="text-align: center;" class="success">Sudah Divalidasi, Layak</td>
						<td style="text-align: center;">
							<a href="#" class="btn btn-info cell" data-toggle="modal" data-target="#modalLihatDetailProposal_108">
								<span class="glyphicon glyphicon-file"></span>
							</a>
						</td>
					</tr>
					<tr>
						<td>KOTA 109</td>
						<td>Sistem Informasi Pengelolaan Perkuliahan Proyek di JTK</td>
						<td style="text-align: center;" class="danger">Sudah Divalidasi, Tidak Layak</td>
						<td style="text-align: center;">
							<a href="#" class="btn btn-info cell" data-toggle="modal" data-target="#modalLihatDetailProposal">
								<span class="glyphicon glyphicon-file"></span>
							</a>
						</td>
					</tr>
				</tbody>
			</table>	
	    </div>

	    <!-- Modal for Lihat Detail Dokumen Proposal -->
		<div class="modal fade" id="modalLihatDetailProposal_101" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Detail Dokumen Analisis dan SRS</h4>
					</div>
					<div class="modal-body">
						<form id="form_detail_proposal" class="form-horizontal" name="form_detail_proposal">
							<div class="form-group">
								<label class="col-md-4 control-label" style="text-align: left;">Kode Kelompok</label>
								<div class="col-md-8">
									<p id='vd_id_kota' class="form-control-static">KOTA 101</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" style="text-align: left;">Topik Tugas Akhir</label>
								<div class="col-md-8">
									<p id='vd_id_kota' class="form-control-static">Penerapan Semantic Web terhadap Portal Inkubator Bisnis POLBAN</p>
								</div>
							</div>
							<div class="form-group">
								<h4><label class="col-md-12 control-label" style="text-align: left;">History Upload Dokumen Analisis dan SRS</label></h4>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<table class="table table-hover table-bordered table-striped" style="margin-top: 10px;">
										<thead>
											<tr>
												<th>Waktu Upload Dokumen</th>
												<th style="text-align: center;" width="100">Unduh Dokumen</th>
												<th style="text-align: center;" width="150">Status Validasi Kelayakan Dokumen</th>
												<th style="text-align: center;" width="100">Validasi Dokumen</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Minggu, 2 Maret 2015, 17.00 WIB</td>
												<td style="text-align: center;">
													<a href="#" class="btn btn-info cell">
														<span class="glyphicon glyphicon-arrow-down"></span>
													</a>
												</td>
												<td class="warning" style="text-align: center;">Belum Divalidasi</td>
												<td style="text-align: center;">
													<a href="#" class="btn btn-success cell" data-toggle="modal" data-target="#modalKonfirmasiValidasiProposal_101">
														<span class="glyphicon glyphicon-check"></span>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for Lihat Detail Dokumen Proposal -->
		<div class="modal fade" id="modalLihatDetailProposal_106" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Detail Dokumen Analisis dan SRS</h4>
					</div>
					<div class="modal-body">
						<form id="form_detail_proposal" class="form-horizontal" name="form_detail_proposal">
							<div class="form-group">
								<label class="col-md-4 control-label" style="text-align: left;">Kode Kelompok</label>
								<div class="col-md-8">
									<p id='vd_id_kota' class="form-control-static">KOTA 106</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" style="text-align: left;">Topik Tugas Akhir</label>
								<div class="col-md-8">
									<p id='vd_id_kota' class="form-control-static">Aplikasi Animasi 3D pada Android untuk Pembelajaran Shalat Anak Usia 6-8 Tahun</p>
								</div>
							</div>
							<div class="form-group">
								<h4><label class="col-md-12 control-label" style="text-align: left;">History Upload Dokumen Analisis dan SRS</label></h4>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<table class="table table-hover table-bordered table-striped" style="margin-top: 10px;">
										<thead>
											<tr>
												<th>Waktu Upload Dokumen</th>
												<th style="text-align: center;" width="100">Unduh Dokumen</th>
												<th style="text-align: center;" width="150">Status Validasi Kelayakan Dokumen</th>
												<th style="text-align: center;" width="100">Validasi Dokumen</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Kamis, 30 April 2015, 14.00 WIB</td>
												<td style="text-align: center;">
													<a href="#" class="btn btn-info cell">
														<span class="glyphicon glyphicon-arrow-down"></span>
													</a>
												</td>
												<td class="danger" style="text-align: center;">Tidak Layak</td>
												<td style="text-align: center;">
													<a href="#" class="btn btn-success cell" data-toggle="modal" data-target="#modalKonfirmasiValidasiProposal_106">
														<span class="glyphicon glyphicon-check"></span>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for Lihat Detail Dokumen Proposal -->
		<div class="modal fade" id="modalLihatDetailProposal_108" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Detail Dokumen Analisis dan SRS</h4>
					</div>
					<div class="modal-body">
						<form id="form_detail_proposal" class="form-horizontal" name="form_detail_proposal">
							<div class="form-group">
								<label class="col-md-4 control-label" style="text-align: left;">Kode Kelompok</label>
								<div class="col-md-8">
									<p id='vd_id_kota' class="form-control-static">KOTA 108</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" style="text-align: left;">Topik Tugas Akhir</label>
								<div class="col-md-8">
									<p id='vd_id_kota' class="form-control-static">Pengelolaan Pelaksanaan Tugas Akhir POLBAN Berbasis Web</p>
								</div>
							</div>
							<div class="form-group">
								<h4><label class="col-md-12 control-label" style="text-align: left;">History Upload Dokumen Analisis dan SRS</label></h4>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<table class="table table-hover table-bordered table-striped" style="margin-top: 10px;">
										<thead>
											<tr>
												<th>Waktu Upload Dokumen</th>
												<th style="text-align: center;" width="100">Unduh Dokumen</th>
												<th style="text-align: center;" width="150">Status Validasi Kelayakan Dokumen</th>
												<th style="text-align: center;" width="100">Validasi Dokumen</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Minggu, 26 April 2015, 09.00 WIB</td>
												<td style="text-align: center;">
													<a href="#" class="btn btn-info cell">
														<span class="glyphicon glyphicon-arrow-down"></span>
													</a>
												</td>
												<td class="danger" style="text-align: center;">Tidak Layak</td>
												<td style="text-align: center;">
													<a href="#" class="btn btn-success cell disabled">
														<span class="glyphicon glyphicon-check"></span>
													</a>
												</td>
											</tr>
											<tr>
												<td>Rabu, 29 April 2015, 08.00 WIB</td>
												<td style="text-align: center;">
													<a href="#" class="btn btn-info cell">
														<span class="glyphicon glyphicon-arrow-down"></span>
													</a>
												</td>
												<td class="success" style="text-align: center;">Layak</td>
												<td style="text-align: center;">
													<a href="#" class="btn btn-success cell" data-toggle="modal" data-target="#modalKonfirmasiValidasiProposal_108">
														<span class="glyphicon glyphicon-check"></span>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for Konfirmasi Validasi Dokumen -->
		<div class="modal fade" id="modalKonfirmasiValidasiProposal_101" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Konfirmasi Validasi Dokumen Analisis dan SRS TA</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<p>Apakah Anda yakin ingin memvalidasi<br>dokumen Analisis dan SRS Kelompok TA 101 ini<br>sebagai dokumen yang layak untuk melaksanakan Seminar 2?</p>
						<form id="validasi_dok_proposal" class="form-horizontal" name="validasi_dok_proposal">
							<div class="form-group hide">
								<div class="col-md-offset-4 col-md-8">
									<input id="submit_validasi_proposal_true" class="btn btn-success" name="submit_validasi_proposal" type="submit" value="true" onclick="location.href='<?php echo base_url().'c_mengelolaSeminarDua/daftarDokumenAnlSRS?status_is_validated=true' ?>'" />
									<input id="submit_validasi_proposal_false" class="btn btn-success" name="submit_validasi_proposal" type="submit" value="false" />
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="col-md-6" style="text-align: left;">
							<a href="<?php echo base_url().'c_mengelolaSeminarDua/validate_yes' ?>" class="btn btn-success">Ya, Layak</a>
							<a href="<?php echo base_url().'c_mengelolaSeminarDua/validate_no' ?>" class="btn btn-danger">Tidak Layak</a>
						</div>
						<div class="col-md-6">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for Konfirmasi Validasi Dokumen -->
		<div class="modal fade" id="modalKonfirmasiValidasiProposal_106" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Konfirmasi Validasi Dokumen Analisis dan SRS TA</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<p>Anda sudah memberi status TIDAK LAYAK pada dokumen Analisis dan SRS ini sebelumnya.</p>
						<p>Apakah Anda yakin ingin memvalidasi<br>dokumen Analisis dan SRS Kelompok TA 106 ini<br>sebagai dokumen yang layak untuk melaksanakan Seminar 2?</p>
						<form id="validasi_dok_proposal" class="form-horizontal" name="validasi_dok_proposal">
							<div class="form-group hide">
								<div class="col-md-offset-4 col-md-8">
									<input id="submit_validasi_proposal_true" class="btn btn-success" name="submit_validasi_proposal" type="submit" value="true" onclick="location.href='<?php echo base_url().'c_mengelolaSeminarSatu/daftarDokumenProposal?status_is_updated=true' ?>'" />
									<input id="submit_validasi_proposal_false" class="btn btn-success" name="submit_validasi_proposal" type="submit" value="false" />
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="col-md-6" style="text-align: left;">
							<a href="<?php echo base_url().'c_mengelolaSeminarDua/update_yes' ?>" class="btn btn-success">Ya, Layak</a>
							<a href="#" class="btn btn-danger" data-dismiss="modal">Tidak Layak</a>
						</div>
						<div class="col-md-6">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for Konfirmasi Validasi Dokumen -->
		<div class="modal fade" id="modalKonfirmasiValidasiProposal_108" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Konfirmasi Validasi Dokumen Analisis dan SRS TA</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<p>Anda sudah memberi status LAYAK pada dokumen Analisis dan SRS ini sebelumnya.</p>
						<p>Apakah Anda yakin ingin memvalidasi<br>dokumen Analisis dan SRS Kelompok TA 108 ini<br>sebagai dokumen yang layak untuk melaksanakan Seminar 2?</p>
						<form id="validasi_dok_proposal" class="form-horizontal" name="validasi_dok_proposal">
							<div class="form-group hide">
								<div class="col-md-offset-4 col-md-8">
									<input id="submit_validasi_proposal_true" class="btn btn-success" name="submit_validasi_proposal" type="submit" value="true" />
									<input id="submit_validasi_proposal_false" class="btn btn-success" name="submit_validasi_proposal" type="submit" value="false" />
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="col-md-6" style="text-align: left;">
							<a href="#" class="btn btn-success" data-dismiss="modal">Ya, Layak</a>
							<a href="<?php echo base_url().'c_mengelolaSeminarDua/update_no' ?>" class="btn btn-danger">Tidak Layak</a>
						</div>
						<div class="col-md-6">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Script -->
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
		<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();   
		});
		</script>
	</body>
</html>