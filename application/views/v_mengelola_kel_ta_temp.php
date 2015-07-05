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
				<li class="active"><a href="<?php echo base_url().'c_mengelolaKelompokTAtemp' ?>">Pengelolaan Kelompok Sementara</a></li>
				<li><a href="<?php echo base_url().'c_mengelolaKelompokTA' ?>">Pengelolaan Kelompok</a></li>
				<li>
					<a href="#" class="dropdown-toggle">Pengelolaan Seminar <b class="caret"></b></a>
					<ul class="dropdown-menu navmenu-nav" role="menu">
						<li class="dropdown-header">Seminar 1</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarSatu/daftarDokumenProposal' ?>">Daftar Dokumen Proposal TA Kelompok</a></li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarSatu/lihatJadwalSeminarSatu' ?>">Jadwal Seminar 1</a></li>
						<li><a href="#">Persyaratan Seminar 1</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Seminar 2</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarDua/daftarDokumenAnlSRS' ?>">Daftar Dokumen Analisis dan SRS Kelompok</a></li>
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
					<li><a href="#">Pengelolaan Kelompok Sementara</a></li>
				</ol></small></h1>
			</div>
			<?php if ($status_is_created === true) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Pembuatan Kelompok sementara TA berhasil!</strong> Silakan lanjutkan penambahan Kelompok TA lainnya, atau kembali ke Home.
			</div>
			<?php } elseif ($status_is_created === false) { ?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				<strong>Pembuatan Kelompok sementara TA gagal!</strong> Silakan coba lagi.
			</div>
			<?php } elseif ($status_is_published === true) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Kelompok sementara TA berhasil dipublikasikan!</strong> Jangan lupa untuk melakukan publikasi setiap ada perubahan.
			</div>
			<?php } ?>
			<div class="row">
				<div class="col-md-6">
					<a href="#" id='btn-add' class="btn btn-primary" name='btn-add' type="button" data-toggle="modal" data-target="#modalTambahKelompokTAtemp">
						<span class="glyphicon glyphicon-plus"></span>
						&nbsp;Tambah Kelompok Sementara
					</a>
				</div>
				<div class="col-md-6" align="right">
					<a href="<?php echo base_url().'c_mengelolaKelompokTAtemp/postKelompokTAtemp' ?>" id='btn-publish' class="btn btn-success" name='btn-publish' type="button">
						<span class="glyphicon glyphicon-bullhorn"></span>
						&nbsp;Publikasikan Semua Data Kelompok Sementara
					</a>
				</div>
			</div>

			<table class="table table-hover table-bordered table-striped">
				<thead>
					<tr>
						<th width="130">Kode Kelompok</th>
						<th>Nama Topik Tugas Akhir</th>
						<th width="100" style="text-align: center;">Status</th>
						<th width="80" style="text-align: center;">Detail</th>
						<th width="80" style="text-align: center;">Edit</th>
						<th width="80" style="text-align: center;">Hapus</th>
					</tr>
				</thead>
				<tbody>
					<div>
					<tr>
						<td class="id_kota">KOTA 101</td>
						<td class="nama_topik">Penerapan Semantic Web terhadap Portal Inkubator Bisnis POLBAN</td>
						<td style="text-align: center;" class="success">
							Terpublikasi
						</td>
						<td style="text-align: center;"><a href="#" class="btn btn-info btn-lg cell" data-toggle="modal" data-target="#modalViewDetailKelompokTA"
							data-id-kota="KOTA 101"
							data-nama-topik="Penerapan Semantic Web terhadap Portal Inkubator Bisnis POLBAN"
							data-ak-1="Ahmad Fadel Khairi"
							data-ak-2="Fahmi Iqbal Abdillah"
							data-ak-3="Medina Nur Fauziah"
							data-pb-1="Joe Lian Min"
							data-pb-2="Irwan Setiawan"
							><span class="glyphicon glyphicon-info-sign"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-primary btn-lg cell" data-toggle="modal" data-target="#modalEditKelompokTA"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-danger btn-lg cell" data-toggle="modal" data-target="#modalKonfHapusKelompokTA"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td class="id_kota">KOTA 102</td>
						<td class="nama_topik">Aplikasi Pemesanan Travel Berbasis Android</td>
						<td style="text-align: center;" class="success">
							Terpublikasi
						</td>
						<td style="text-align: center;"><a href="#" class="btn btn-info btn-lg cell" data-toggle="modal" data-target="#modalViewDetailKelompokTA"
							data-id-kota="KOTA 102"
							data-nama-topik="Aplikasi Pemesanan Travel Berbasis Android"
							data-ak-1="Andri Astra Prakarsa"
							data-ak-2="Caesario Shiddieq P"
							data-ak-3="Hasbah Bunyamin"
							data-pb-1="Joe Lian Min"
							data-pb-2="Irwan Setiawan"
							><span class="glyphicon glyphicon-info-sign"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-primary btn-lg cell" data-toggle="modal" data-target="#modalEditKelompokTA"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-danger btn-lg cell" data-toggle="modal" data-target="#modalKonfHapusKelompokTA"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td class="id_kota">KOTA 103</td>
						<td class="nama_topik">Software Tools dengan Menggunakan AHP</td>
						<td style="text-align: center;" class="success">
							Terpublikasi
						</td>
						<td style="text-align: center;"><a href="#" class="btn btn-info btn-lg cell" data-toggle="modal" data-target="#modalViewDetailKelompokTA"
							data-id-kota="KOTA 103"
							data-nama-topik="Software Tools dengan Menggunakan AHP"
							data-ak-1="Bagus Al-qodri"
							data-ak-2="Dani Prihat Bren"
							data-ak-3="Ritman Sigit Kurniawan"
							data-pb-1="Joe Lian Min"
							data-pb-2="Irwan Setiawan"
							><span class="glyphicon glyphicon-info-sign"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-primary btn-lg cell" data-toggle="modal" data-target="#modalEditKelompokTA"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-danger btn-lg cell" data-toggle="modal" data-target="#modalKonfHapusKelompokTA"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td class="id_kota">KOTA 104</td>
						<td class="nama_topik">Aplikasi Tempat Wisata dan Kuliner di Indonesia</td>
						<td style="text-align: center;" class="success">
							Terpublikasi
						</td>
						<td style="text-align: center;"><a href="#" class="btn btn-info btn-lg cell" data-toggle="modal" data-target="#modalViewDetailKelompokTA"
							data-id-kota="KOTA 104"
							data-nama-topik="Aplikasi Tempat Wisata dan Kuliner di Indonesia"
							data-ak-1="Dimas Jodi Prakoso"
							data-ak-2="Putri Amalia"
							data-ak-3="Rafli Ahmad Zulfikar"
							data-pb-1="Joe Lian Min"
							data-pb-2="Irwan Setiawan"
							><span class="glyphicon glyphicon-info-sign"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-primary btn-lg cell" data-toggle="modal" data-target="#modalEditKelompokTA"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-danger btn-lg cell" data-toggle="modal" data-target="#modalKonfHapusKelompokTA"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td class="id_kota">KOTA 105</td>
						<td class="nama_topik">Aplikasi Penghitung Jumlah Trombosit Berbasis Pengolahan Citra Digital</td>
						<td style="text-align: center;" class="success">
							Terpublikasi
						</td>
						<td style="text-align: center;"><a href="#" class="btn btn-info btn-lg cell" data-toggle="modal" data-target="#modalViewDetailKelompokTA"
							data-id-kota="KOTA 105"
							data-nama-topik="Aplikasi Penghitung Jumlah Trombosit Berbasis Pengolahan Citra Digital"
							data-ak-1="Dinar Hartanto"
							data-ak-2="Khairil Tasnim Nasution"
							data-ak-3="Sannie Ragistia"
							data-pb-1="Joe Lian Min"
							data-pb-2="Irwan Setiawan"
							><span class="glyphicon glyphicon-info-sign"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-primary btn-lg cell" data-toggle="modal" data-target="#modalEditKelompokTA"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-danger btn-lg cell" data-toggle="modal" data-target="#modalKonfHapusKelompokTA"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td class="id_kota">KOTA 106</td>
						<td class="nama_topik">Aplikasi Animasi 3D pada Android untuk Pembelajaran Shalat Anak Usia 6-8 Tahun</td>
						<td style="text-align: center;" class="success">
							Terpublikasi
						</td>
						<td style="text-align: center;"><a href="#" class="btn btn-info btn-lg cell" data-toggle="modal" data-target="#modalViewDetailKelompokTA"
							data-id-kota="KOTA 106"
							data-nama-topik="Aplikasi Animasi 3D pada Android untuk Pembelajaran Shalat Anak Usia 6-8 Tahun"
							data-ak-1="Gilang Surya Gumilar"
							data-ak-2="Muhammad Dimas Dewantara"
							data-ak-3="Muhammad Taufiq Ismail"
							data-pb-1="Joe Lian Min"
							data-pb-2="Irwan Setiawan"
							><span class="glyphicon glyphicon-info-sign"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-primary btn-lg cell" data-toggle="modal" data-target="#modalEditKelompokTA"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-danger btn-lg cell" data-toggle="modal" data-target="#modalKonfHapusKelompokTA"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td class="id_kota">KOTA 107</td>
						<td class="nama_topik">Penerapan Metode Event Stream Processing untuk Memperoleh Informasi Kegiatan Coding Mahasiswa di Lab secara Real-Time</td>
						<td style="text-align: center;" class="success">
							Terpublikasi
						</td>
						<td style="text-align: center;"><a href="#" class="btn btn-info btn-lg cell" data-toggle="modal" data-target="#modalViewDetailKelompokTA"
							data-id-kota="KOTA 107"
							data-nama-topik="Penerapan Metode Event Stream Processing untuk Memperoleh Informasi Kegiatan Coding Mahasiswa di Lab secara Real-Time"
							data-ak-1="Harris Chaerul Irsan"
							data-ak-2="Muhammad Adiputra"
							data-ak-3="Trisna Ari Roshinta"
							data-pb-1="Joe Lian Min"
							data-pb-2="Irwan Setiawan"
							><span class="glyphicon glyphicon-info-sign"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-primary btn-lg cell" data-toggle="modal" data-target="#modalEditKelompokTA"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-danger btn-lg cell" data-toggle="modal" data-target="#modalKonfHapusKelompokTA"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td class="id_kota">KOTA 108</td>
						<td class="nama_topik">Pengelolaan Pelaksanaan Tugas Akhir POLBAN Berbasis Web</td>
						<td style="text-align: center;" class="success">
							Terpublikasi
						</td>
						<td style="text-align: center;"><a href="#" class="btn btn-info btn-lg cell" data-toggle="modal" data-target="#modalViewDetailKelompokTA"
							data-id-kota="KOTA 108"
							data-nama-topik="Pengelolaan Pelaksanaan Tugas Akhir POLBAN Berbasis Web"
							data-ak-1="Januar Muhtadiin"
							data-ak-2="Rizki Pratama"
							data-ak-3="Yudha Arie Fargitha"
							data-cp-1="Suprihanto"
							data-cp-2="Ani Rahmani"
							data-cp-3="Joe Lian Min"
							data-cp-4="Irwan Setiawan"
							data-cp-5="Yudi Widhiyasana"
							><span class="glyphicon glyphicon-info-sign"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-primary btn-lg cell" data-toggle="modal" data-target="#modalEditKelompokTA"
							data-id-kota="KOTA 108"
							data-nama-topik="Pengelolaan Pelaksanaan Tugas Akhir POLBAN Berbasis Web"
							data-ak-1="Januar Muhtadiin"
							data-ak-2="Rizki Pratama"
							data-ak-3="Yudha Arie Fargitha"
							data-cp-1="Suprihanto"
							data-cp-2="Ani Rahmani"
							data-cp-3="Joe Lian Min"
							data-cp-4="Irwan Setiawan"
							data-cp-5="Yudi Widhiyasana"
							><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-danger btn-lg cell" data-toggle="modal" data-target="#modalKonfHapusKelompokTA"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td class="id_kota">KOTA 109</td>
						<td class="nama_topik">Sistem Informasi Pengelolaan Perkuliahan Proyek di JTK</td>
						<td style="text-align: center;" class="success">
							Terpublikasi
						</td>
						<td style="text-align: center;"><a href="#" class="btn btn-info btn-lg cell" data-toggle="modal" data-target="#modalViewDetailKelompokTA"
							data-id-kota="KOTA 109"
							data-nama-topik="Sistem Informasi Pengelolaan Perkuliahan Proyek di JTK"
							data-ak-1="Kevin Yoasman Tupu"
							data-ak-2="Nurul Rasti Wahyuni"
							data-ak-3="Stephanus Soekendar"
							data-pb-1="Irwan Setiawan"
							data-pb-2="Jonner Hutahaean"
							><span class="glyphicon glyphicon-info-sign"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-primary btn-lg cell" data-toggle="modal" data-target="#modalEditKelompokTA"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-danger btn-lg cell" data-toggle="modal" data-target="#modalKonfHapusKelompokTA"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
				</tbody>
			</table>

			<!-- Modal for View Detail -->
			<div class="modal fade" id="modalViewDetailKelompokTA" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Detail Kelompok Sementara</h4>
						</div>
						<div class="modal-body">
							<form id="form_viewdet_kota" name="form_viewdet_kota" class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-4 control-label">Kode Kelompok</label>
									<div class="col-sm-8">
										<p id='vd_id_kota' class="form-control-static"></p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Nama Topik Tugas Akhir</label>
									<div class="col-sm-8">
										<p id='vd_nama_topik' class="form-control-static"></p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Anggota 1</label>
									<div class="col-sm-8">
										<p id='vd_ak_1' class="form-control-static"></p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Anggota 2</label>
									<div class="col-sm-8">
										<p id='vd_ak_2' class="form-control-static"></p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Anggota 3</label>
									<div class="col-sm-8">
										<p id='vd_ak_3' class="form-control-static"></p>
									</div>
								</div>
								<div class="form-group">
									<h4><label class="col-sm-12 control-label" style="text-align: left;">Daftar Calon Pembimbing</label></h4>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<table class="table table-hover table-bordered table-striped" style="margin-top: 10px;">
											<thead>
												<tr>
													<th width="100">Urutan ke-</th>
													<th>Nama Calon Pembimbing</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Suprihanto</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Ani Rahmani</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Joe Lian Min</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Irwan Setiawan</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Yudi Widhiyasana</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<div class="col-sm-12">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal for Add Kelompok TA -->
			<div class="modal fade" id="modalTambahKelompokTAtemp" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Tambah Kelompok Sementara</h4>
						</div>
						<div class="modal-body">
							<form id="form_create_kota" name="form_create_kota" class="form-horizontal" action="<?php echo base_url().'c_mengelolaKelompokTA/inputKelompokTA' ?>" method="post">
								<div class="form-group">
									<label for="id_kota" class="col-sm-4 control-label">Kode Kelompok</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="id_kota" name="id_kota" />
									</div>
								</div>
								<div class="form-group">
									<label for="nama_topik" class="col-sm-4 control-label">Nama Topik Tugas Akhir</label>
									<div class="col-sm-6">
										<input id="nama_topik" class="form-control" name="nama_topik" type="text" />
									</div>
								</div>
								<div class="form-group">
									<label for="anggota_1" class="col-sm-4 control-label">Anggota 1</label>
									<div class="col-sm-6">
										<select id='anggota_1' class="form-control" name='anggota_1'>
											<option value='0'>--- Pilih Mahasiswa ---</option>
											<option value='121511015'>Januar Muhtadiin</option>
											<option value='121511027'>Rizki Pratama</option>
											<option value='121511032'>Yudha Arie Fargitha</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="anggota_2" class="col-sm-4 control-label">Anggota 2</label>
									<div class="col-sm-6">
										<select id='anggota_2' class="form-control" name='anggota_2'>
											<option value='0'>--- Pilih Mahasiswa ---</option>
											<option value='121511015'>Januar Muhtadiin</option>
											<option value='121511027'>Rizki Pratama</option>
											<option value='121511032'>Yudha Arie Fargitha</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="anggota_3" class="col-sm-4 control-label">Anggota 3</label>
									<div class="col-sm-6">
										<select id='anggota_3' class="form-control" name='anggota_3'>
											<option value='0'>--- Pilih Mahasiswa ---</option>
											<option value='121511015'>Januar Muhtadiin</option>
											<option value='121511027'>Rizki Pratama</option>
											<option value='121511032'>Yudha Arie Fargitha</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="pemb_1" class="col-sm-4 control-label">Calon Pembimbing</label>
									<div class="col-sm-6">
										<select class="form-control" style="margin-bottom: 10px;">
											<option>--- Pilih Calon Pembimbing ---</option>
											<option>Ani Rahmani</option>
											<option>Eddy Bambang Soewono</option>
											<option>Ida Suhartini</option>
											<option>Irwan Setiawan</option>
											<option>Joe Lian Min</option>
											<option>Santi Sundari</option>
											<option>Suprihanto</option>
											<option>Yadhi Aditya</option>
											<option>Yudi Widhiyasana</option>
										</select>
										<select class="form-control" style="margin-bottom: 10px;">
											<option>--- Pilih Calon Pembimbing ---</option>
											<option>Ani Rahmani</option>
											<option>Eddy Bambang Soewono</option>
											<option>Ida Suhartini</option>
											<option>Irwan Setiawan</option>
											<option>Joe Lian Min</option>
											<option>Santi Sundari</option>
											<option>Suprihanto</option>
											<option>Yadhi Aditya</option>
											<option>Yudi Widhiyasana</option>
										</select>
										<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah Calon Pembimbing</a>
									</div>
								</div>
								<div class="form-group hide">
									<div class="col-sm-offset-4 col-sm-6">
										<input id='submit_kota' class="btn btn-primary" name='submit_kota' type='submit' value='Buat Kelompok TA' />
									</div>
								</div>
							</form>
							<div class="alert alert-info" role="alert">
								<strong>Keterangan:</strong> Kelompok TA tidak dipublikasikan sebelum Anda melakukannya sendiri pada halaman Pengelolaan Kelompok TA.
							</div>
						</div>
						<div class="modal-footer">
							<div class="col-sm-6" style="text-align: left;">
								<label for="submit_kota" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;Buat Kelompok</label>
							</div>
							<div class="col-sm-6">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal for Edit Kelompok TA -->
			<div class="modal fade" id="modalEditKelompokTA" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Kelompok Sementara</h4>
						</div>
						<div class="modal-body">
							<form id="form_create_kota" name="form_create_kota" class="form-horizontal" action="<?php echo base_url().'c_mengelolaKelompokTA/inputKelompokTA' ?>" method="post">
								<div class="form-group">
									<label for="id_kota" class="col-sm-4 control-label">Kode Kelompok</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="id_kota" name="id_kota" value="KOTA 108" />
									</div>
								</div>
								<div class="form-group">
									<label for="nama_topik" class="col-sm-4 control-label">Nama Topik Tugas Akhir</label>
									<div class="col-sm-6">
										<input id="nama_topik" class="form-control" name="nama_topik" type="text" value="Pengelolaan Pelaksanaan Tugas Akhir POLBAN Berbasis Web" />
									</div>
								</div>
								<div class="form-group">
									<label for="anggota_1" class="col-sm-4 control-label">Anggota 1</label>
									<div class="col-sm-6">
										<select id='anggota_1' class="form-control" name='anggota_1'>
											<option value='0'>--- Pilih Mahasiswa ---</option>
											<option value='121511015' selected="true">Januar Muhtadiin</option>
											<option value='121511027'>Rizki Pratama</option>
											<option value='121511032'>Yudha Arie Fargitha</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="anggota_2" class="col-sm-4 control-label">Anggota 2</label>
									<div class="col-sm-6">
										<select id='anggota_2' class="form-control" name='anggota_2'>
											<option value='0'>--- Pilih Mahasiswa ---</option>
											<option value='121511015'>Januar Muhtadiin</option>
											<option value='121511027' selected="true">Rizki Pratama</option>
											<option value='121511032'>Yudha Arie Fargitha</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="anggota_3" class="col-sm-4 control-label">Anggota 3</label>
									<div class="col-sm-6">
										<select id='anggota_3' class="form-control" name='anggota_3'>
											<option value='0'>--- Pilih Mahasiswa ---</option>
											<option value='121511015'>Januar Muhtadiin</option>
											<option value='121511027'>Rizki Pratama</option>
											<option value='121511032' selected="true">Yudha Arie Fargitha</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="pemb_1" class="col-sm-4 control-label">Calon Pembimbing</label>
									<div class="col-sm-6">
										<select class="form-control" style="margin-bottom: 10px;">
											<option>Ani Rahmani</option>
											<option>Eddy Bambang Soewono</option>
											<option>Ida Suhartini</option>
											<option>Irwan Setiawan</option>
											<option>Joe Lian Min</option>
											<option>Santi Sundari</option>
											<option selected="true">Suprihanto</option>
											<option>Yadhi Aditya</option>
											<option>Yudi Widhiyasana</option>
										</select>
										<select class="form-control" style="margin-bottom: 10px;">
											<option selected="true">Ani Rahmani</option>
											<option>Eddy Bambang Soewono</option>
											<option>Ida Suhartini</option>
											<option>Irwan Setiawan</option>
											<option>Joe Lian Min</option>
											<option>Santi Sundari</option>
											<option>Suprihanto</option>
											<option>Yadhi Aditya</option>
											<option>Yudi Widhiyasana</option>
										</select>
										<div class="row">
											<div class="col-sm-10">
												<select class="form-control" style="margin-bottom: 10px;">
													<option>Ani Rahmani</option>
													<option>Eddy Bambang Soewono</option>
													<option>Ida Suhartini</option>
													<option>Irwan Setiawan</option>
													<option selected="true">Joe Lian Min</option>
													<option>Santi Sundari</option>
													<option>Suprihanto</option>
													<option>Yadhi Aditya</option>
													<option>Yudi Widhiyasana</option>
												</select>
											</div>
											<div class="col-sm-2" style="margin-left: -20px;">
												<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-10">
												<select class="form-control" style="margin-bottom: 10px;">
													<option>Ani Rahmani</option>
													<option>Eddy Bambang Soewono</option>
													<option>Ida Suhartini</option>
													<option selected="true">Irwan Setiawan</option>
													<option>Joe Lian Min</option>
													<option>Santi Sundari</option>
													<option>Suprihanto</option>
													<option>Yadhi Aditya</option>
													<option>Yudi Widhiyasana</option>
												</select>
											</div>
											<div class="col-sm-2" style="margin-left: -20px;">
												<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
											</div>
										</div>
										<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah Calon Pembimbing</a>
									</div>
								</div>
								<div class="form-group hide">
									<div class="col-sm-offset-4 col-sm-6">
										<input id='submit_kota' class="btn btn-primary" name='submit_kota' type='submit' value='Buat Kelompok TA' />
									</div>
								</div>
							</form>
							<div class="alert alert-info" role="alert">
								<strong>Keterangan:</strong> Kelompok TA tidak dipublikasikan sebelum Anda melakukannya sendiri pada halaman Pengelolaan Kelompok TA.
							</div>
						</div>
						<div class="modal-footer">
							<div class="col-sm-6" style="text-align: left;">
								<label for="submit_kota" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;Update Kelompok</label>
							</div>
							<div class="col-sm-6">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	

		<!-- Modal for Delete -->
		<div class="modal fade" id="modalKonfHapusKelompokTA" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Hapus Kelompok Sementara</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<p>Apakah Anda yakin ingin menghapus data sementara Kelompok TA untuk KOTA 108?</p>
					</div>
					<div class="modal-footer">
						<div class="col-sm-6" style="text-align: left;">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Ya, Hapus</button>
						</div>
						<div class="col-sm-6">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jasny-bootstrap.min.js"></script>
		<script type="text/javascript">
			$('#modalViewDetailKelompokTA').on('show.bs.modal', function(e) {
			    var id_kota = $(e.relatedTarget).data('id-kota');
			    var nama_topik = $(e.relatedTarget).data('nama-topik');
			    var ak_1 = $(e.relatedTarget).data('ak-1');
			    var ak_2 = $(e.relatedTarget).data('ak-2');
			    var ak_3 = $(e.relatedTarget).data('ak-3');
			    var pb_1 = $(e.relatedTarget).data('pb-1');
			    var pb_2 = $(e.relatedTarget).data('pb-2');

			    $(e.currentTarget).find('p#vd_id_kota').text(id_kota);
			    $(e.currentTarget).find('p#vd_nama_topik').text(nama_topik);
			    $(e.currentTarget).find('p#vd_ak_1').text(ak_1);
			    $(e.currentTarget).find('p#vd_ak_2').text(ak_2);
			    $(e.currentTarget).find('p#vd_ak_3').text(ak_3);
			    $(e.currentTarget).find('p#vd_pb_1').text(pb_1);
			    $(e.currentTarget).find('p#vd_pb_2').text(pb_2);
			});
		</script>
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