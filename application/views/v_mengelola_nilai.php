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
				<li class="active"><a href="<?php echo base_url().'c_mengelolaNilai' ?>">Pengelolaan Nilai</a></li>
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
					<li><a href="#">Pengelolaan Nilai</a></li>
				</ol></small></h1>
			</div>
			<?php if ($status_is_created === true) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Pembuatan data nilai Tugas Akhir berhasil!</strong> Silakan lanjutkan penambahan data nilai Tugas Akhir lainnya, atau lakukan kegiatan lainnya.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($status_is_created === false) { ?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Pembuatan data nilai Tugas Akhir gagal!</strong> Silakan coba lagi, atau lakukan kegiatan lainnya.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($status_is_updated === true) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Perubahan data nilai Tugas Akhir berhasil!</strong> Silakan lanjutkan perubahan data nilai Tugas Akhir lainnya, atau lakukan kegiatan lainnya.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($status_is_updated === false) { ?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Perubahan data nilai Tugas Akhir gagal!</strong> Silakan coba lagi, atau lakukan kegiatan lainnya.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($status_is_deleted === true) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Penghapusan data nilai Tugas Akhir berhasil!</strong> Silakan lanjutkan penghapusan data nilai Tugas Akhir lainnya, atau lakukan kegiatan lainnya.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($status_is_deleted === false) { ?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Penghapusan data nilai Tugas Akhir gagal!</strong> Silakan coba lagi, atau lakukan kegiatan lainnya.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($status_is_published === true) { ?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Publikasi data nilai Tugas Akhir berhasil!</strong> Jangan lupa untuk melakukan publikasi setiap setelah melakukan penambahan atau perubahan data.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } elseif ($status_is_published === false) { ?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Success:</span>
				<strong>Publikasi data nilai Tugas Akhir gagal!</strong> Silakan coba lagi, atau lakukan kegiatan lainnya.
				<button type="button" class="close" data-dismiss="alert" data-toggle="tooltip" data-placement="top" title="Tutup" style="margin-top: -2px;">&times;</button>
			</div>
			<?php } ?>
			<div class="row">
				<div class="col-md-6">
					<a href="#" id='btn_addnew' class="btn btn-primary" name='btn_publish' type="button" data-toggle="modal" data-target="#modalTambahDataNilai">
						<span class="glyphicon glyphicon-plus"></span>
						&nbsp;Tambah Data Nilai
					</a>
				</div>
				<div class="col-md-6" align="right">
					<a href="#" id='btn_addnew' class="btn btn-success" name='btn_publish' type="button" data-toggle="modal" data-target="#modalPublikasiDataNilai">
						<span class="glyphicon glyphicon-bullhorn"></span>
						&nbsp;Publikasikan Semua Data Nilai
					</a>
				</div>
			</div>
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th width="50" rowspan="2" style="text-align: center;">No</th>
						<th width="20" rowspan="2" style="text-align: center;">NIM</th>
						<th rowspan="2" style="text-align: center;">Nama</th>
						<th class="info" width="270" colspan="3" style="text-align: center;">Nilai Kegiatan</th>
						<th class="info" width="90" rowspan="2" style="text-align: center;">Nilai Pembimbing</th>
						<th class="success" width="90" rowspan="2" style="text-align: center;">Nilai Akhir</th>
						<th rowspan="2" width="80" style="text-align: center;">Edit</th>
						<th rowspan="2" width="80" style="text-align: center;">Hapus</th>
					</tr>
					<tr>
						<th class="info" width="90" style="text-align: center;">Seminar 2</th>
						<th class="info" width="90" style="text-align: center;">Seminar 3</th>
						<th class="info" width="90" style="text-align: center;">Sidang</th>
					</tr>
				</thead>
				<tbody>
					<tr align="center">
						<td>1</td>
						<td>121511015</td>
						<td style="text-align: left;">Januar Muhtadiin</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<tr align="center">
						<td>2</td>
						<td>121511016</td>
						<td style="text-align: left;">Kevin Yoasman Tupu</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<tr align="center">
						<td>3</td>
						<td>121511017</td>
						<td style="text-align: left;">Medina Nur Fauziah</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<tr align="center">
						<td>4</td>
						<td>121511018</td>
						<td style="text-align: left;">Muhammad Adiputra</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<tr align="center">
						<td>5</td>
						<td>121511019</td>
						<td style="text-align: left;">Muhammad Dimas Dewantara</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<tr align="center">
						<td>6</td>
						<td>121511020</td>
						<td style="text-align: left;">Muhammad Taufiq Ismail</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<tr align="center">
						<td>7</td>
						<td>121511022</td>
						<td style="text-align: left;">Nurul Rasti Wahyuni</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<tr align="center">
						<td>8</td>
						<td>121511024</td>
						<td style="text-align: left;">Putri Amalia</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<tr align="center">
						<td>9</td>
						<td>121511025</td>
						<td style="text-align: left;">Rafli Ahmad Zulfikar</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<tr align="center">
						<td>10</td>
						<td>121511026</td>
						<td style="text-align: left;">Ritman Sigit Kurniawan</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<tr align="center">
						<td>11</td>
						<td>121511027</td>
						<td style="text-align: left;">Rizki Pratama</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>80</td>
						<td>90</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-primary cell" type="button" data-toggle="modal" data-target="#modalEditNilai">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td>
							<a href="#" id="" name='btn_addnew' class="btn btn-danger cell" type="button" data-toggle="modal" data-target="#modalHapusDataNilai">
							<span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
				</tbody>
			</table>	
		</div>

		<!-- Modal for Add -->
		<div class="modal fade" id="modalTambahDataNilai" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tambah Data Nilai</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">NIM</label>
								<div class="col-md-6">
									<p id='ed_nim_ro' class="form-control-static"><i>NIM akan muncul jika Anda sudah memilih Nama Mahasiswa pada field Nama Mahasiswa</i></p>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nama Mahasiswa</label>
								<div class="col-md-6">
									<select class="form-control">
										<option>--- Pilih Nama Mahasiswa ---</option>
										<optgroup label="KoTA 101">
											<option>Ahmad Fadel Khairi</option>
											<option>Fahmi Iqbal Abdillah</option>	
											<option>Medina Nur Fauziah</option>
										</optgroup>
										<optgroup label="KoTA 102">
											<option>Andri Astra P. Siagian</option>
											<option>Caesario Shiddieq Pamungkas</option>
											<option>Hasbah Bunyamin</option>
										</optgroup>
										<optgroup label="KoTA 103">
											<option>Bagus Al-Qodri</option>
											<option>Dani Prihat Bren</option>
											<option>Ritman Sigit Kurniawan</option>
										</optgroup>
										<optgroup label="KoTA 104">
											<option>Dimas Jodi Prakoso</option>
											<option>Putri Amalia</option>
											<option>Rafli Ahmad Zulfikar</option>
										</optgroup>
										<optgroup label="KoTA 105">
											<option>Dinar Hartanto</option>
											<option>Khairil Tasnim Nasution</option>
											<option>Sannie Ragistia</option>
										</optgroup>
										<optgroup label="KoTA 106">
											<option>Gilang Surya Gumilar</option>
											<option>Muhammad Dimas Dewantara</option>
											<option>Muhammad Taufiq Ismail</option>
										</optgroup>
										<optgroup label="KoTA 107">
											<option>Harris Chaerul Irsan</option>
											<option>Muhammad Adiputra</option>
											<option>Trisna Ari Roshinta</option>	
										</optgroup>
										<optgroup label="KoTA 108">
											<option>Januar Muhtadiin</option>
											<option>Rizki Pratama</option>
											<option>Yudha Arie Fargita</option>
										</optgroup>
										<optgroup label="KoTA 109">
											<option>Kevin Yoasman Tupu</option>
											<option>Nurul Rasti Wahyuni</option>
											<option>Stephanus Soekendar</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nilai Seminar 2</label>
								<div class="col-md-2">
									<input type="number" class="form-control" min="0" max="100" />
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nilai Seminar 3</label>
								<div class="col-md-2">
									<input type="number" class="form-control" min="0" max="100" />
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nilai Sidang</label>
								<div class="col-md-2">
									<input type="number" class="form-control" min="0" max="100" />
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nilai Pembimbing</label>
								<div class="col-md-2">
									<input type="number" class="form-control" min="0" max="100" />
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nilai Akhir</label>
								<div class="col-md-2">
									<input type="number" class="form-control" readonly />
								</div>
							</div>				  
						</form>
					</div>
					<div class="modal-footer">
						<div class="col-md-6" style="text-align: left;">
							<label for="submit_jadwal_seminar_satu" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> &nbsp;Simpan Data</label>
						</div>
						<div class="col-md-6">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for Edit -->
		<div class="modal fade" id="modalEditNilai" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Data Nilai</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">NIM</label>
								<div class="col-md-6">
									<p id='ed_nim_ro' class="form-control-static">121511015</p>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nama</label>
								<div class="col-md-6">
									<p id='ed_nama_ro' class="form-control-static">Januar Muhtadiin</p>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nilai Seminar 2</label>
								<div class="col-md-2">
									<input type="number" class="form-control" value="80" min="0" max="100" />
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nilai Seminar 3</label>
								<div class="col-md-2">
									<input type="number" class="form-control" value="80" min="0" max="100" />
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nilai Sidang</label>
								<div class="col-md-2">
									<input type="number" class="form-control" value="80" min="0" max="100" />
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nilai Pembimbing</label>
								<div class="col-md-2">
									<input type="number" class="form-control" value="80" min="0" max="100" />
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-md-4 control-label">Nilai Akhir</label>
								<div class="col-md-2">
									<input type="number" class="form-control" readonly value="80" min="0" max="100" />
								</div>
							</div>				  
						</form>
					</div>
					<div class="modal-footer">
						<div class="col-md-6" style="text-align: left;">
							<label for="submit_jadwal_seminar_satu" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> &nbsp;Simpan Data</label>
						</div>
						<div class="col-md-6">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for Delete -->
		<div class="modal fade" id="modalHapusDataNilai" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Hapus Data Nilai</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<p>Apakah Anda yakin ingin menghapus data nilai untuk mahasiswa dengan nama Januar Muhtadiin (NIM: 121511015)?</p>
					</div>
					<div class="modal-footer">
						<div class="col-md-6" style="text-align: left;">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Ya, Hapus</button>
						</div>
						<div class="col-md-6">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for Publish -->
		<div class="modal fade" id="modalPublikasiDataNilai" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Publikasi Data Nilai</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<p>Apakah Anda yakin ingin mempublikasi semua data nilai yang ada ke mahasiswa yang bersangkutan?</p>
					</div>
					<div class="modal-footer">
						<div class="col-md-6" style="text-align: left;">
							<a href="<?php echo base_url().'c_mengelolaNilai/postDataNilai' ?>" class="btn btn-success">Publikasikan</a>
						</div>
						<div class="col-md-6">
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