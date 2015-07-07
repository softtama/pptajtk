<!DOCTYPE HTML>
<html>
	<head>
		<title>Koordinator</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jasny-bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	</head>
	<body>
		<!-- Fixed Left Sidebar Nav Menu -->
		<nav class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm" role="navigation">
			<a class="navmenu-brand" href="#">Pengelolaan Pelaksanaan TA JTK</a>

			<ul class="nav navmenu-nav">
				<li><a href="<?php echo base_url() ?>">Beranda</a></li>
				<li><a href="<?php echo base_url().'c_mengelolaKelompokTAtemp' ?>">Pengelolaan Kelompok Sementara</a></li>
				<li class=""><a href="<?php echo base_url().'c_mengelolaKelompokTA' ?>">Pengelolaan Kelompok</a></li>
				<li class="active">
					<a href="#" class="dropdown-toggle">Pengelolaan Seminar <b class="caret"></b></a>
					<ul class="dropdown-menu navmenu-nav" role="menu">
						<li class="dropdown-header">Seminar 1</li>
						<li><a href="<?php echo base_url().'c_mengelolaSeminarSatu/daftarDokumenProposal' ?>">Daftar Dokumen Proposal TA Kelompok</a></li>
						<li class="active"><a href="<?php echo base_url().'c_mengelolaSeminarSatu/lihatJadwalSeminarSatu' ?>">Jadwal Seminar 1</a></li>
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
					<li><a href="#">Seminar 1</a></li>
					<li><a href="#">Jadwal Seminar 1</a></li>
				</ol></small></h1>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<a href="#" id="" name='btn_addnew' class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalAddJadwalSeminarSatu"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Tambah Jadwal Seminar</a>
				</div>
				<div class="col-md-6" align="right">
					<a href="<?php echo base_url().'' ?>" id="" name="btn_addnew" class="btn btn-success" type="button"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;&nbsp;Publikasikan Semua Jadwal</a>
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
							KOTA 108 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminarSatu"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 103 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 105 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 201 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 203 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a>
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
							KOTA 101 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 104 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 106 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 202 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 204 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a>
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
							KOTA 107 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 109 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 205 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 207 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 102 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a>
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
							KOTA 206 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 208 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 209 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a><br>
							KOTA 210 <a href="#" class="btn btn-info btn-sm cell" data-toggle="modal" data-target="#modalViewDetailJadwalSeminar"><span class="glyphicon glyphicon-info-sign"></span></a>
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

		<!-- Modal for Tambah Jadwal Seminar Satu -->
		<div class="modal fade" id="modalAddJadwalSeminarSatu" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tambah Jadwal Seminar 1</h4>
					</div>
					<div class="modal-body">
						<form id="form_viewdet_kota" class="form-horizontal" name="form_viewdet_kota">
							<div class="form-group">
								<label class="col-md-4 control-label">Kode Kelompok</label>
								<div class="col-md-6">
									<select id="input_id_kota" class="form-control" name="input_id_kota">
										<option>--- Pilih Kelompok TA ---</option>
										<optgroup label="Dokumen Sudah Divalidasi dan Layak">
											<option>KOTA 101</option>
											<option>KOTA 102</option>
											<option>KOTA 103</option>
											<option>KOTA 105</option>
											<option>KOTA 108</option>
											<option>KOTA 109</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Nama Topik Tugas Akhir</label>
								<div class="col-md-8">
									<p id="show_topik_ta" class="form-control-static"><i>Nama Topik Tugas Akhir akan muncul jika Anda sudah memilih Kelompok TA pada field Kode Kelompok</i></p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Tanggal Seminar</label>
								<div class="col-md-6">
									<div class='input-group date' id='input-date-picker'>
					                    <input id='input-date' name='input-date' type='text' class="form-control" />
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Jam Seminar</label>
								<div class="col-md-6">
									<div class='input-group date' id='input-time-picker'>
					                    <input id='input-time' name='input-time' type='text' class="form-control" />
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-time"></span>
					                    </span>
					                </div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Ruangan Seminar</label>
								<div class="col-md-6">
									<select id="input_rng_seminar" class="form-control" name="input_rng_seminar">
										<option>--- Pilih Ruangan ---</option>
										<optgroup label="Ruangan">
											<option>A201</option>
											<option>A202</option>
											<option>A203</option>
											<option>Ruang Rapat</option>
											<option>Ruang Serba Guna</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Penguji Seminar</label>
								<div class="col-md-6">
									<select id="input_penguji_seminar" class="form-control" name="input_penguji_seminar">
										<option>--- Pilih Penguji Satu ---</option>
										<optgroup label="Penguji Seminar">
											<option>Eddy Bambang Soewono</option>
											<option>Ida Suhartini</option>
											<option>Santi Sundari</option>
											<option>Suprihanto</option>
											<option>Yadhi Aditya</option>
											<option>Yudi Widhiyasana</option>
										</optgroup>
									</select>

									<select id="input_penguji_seminar" class="form-control" name="input_penguji_seminar">
										<option>--- Pilih Penguji Dua ---</option>
										<optgroup label="Penguji Seminar">
											<option>Eddy Bambang Soewono</option>
											<option>Ida Suhartini</option>
											<option>Santi Sundari</option>
											<option>Suprihanto</option>
											<option>Yadhi Aditya</option>
											<option>Yudi Widhiyasana</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="form-group hide">
								<div class="col-md-offset-4 col-md-6">
									<input id="submit_jadwal_seminar_satu" name="submit_jadwal_seminar_satu" class="btn btn-primary" type="submit" value="Buat Jadwal" />
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="col-md-6" style="text-align: left;">
							<label for="submit_jadwal_seminar_satu" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;Buat Jadwal</label>
						</div>
						<div class="col-md-6">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for View Detail Jadwal Seminar Satu -->
		<div class="modal fade" id="modalViewDetailJadwalSeminarSatu" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Detail Jadwal Seminar 1</h4>
					</div>
					<div class="modal-body">
						<form id="form_viewdet_kota" class="form-horizontal" name="form_viewdet_kota">
							<div class="form-group">
								<label class="col-md-4 control-label">Kode Kelompok</label>
								<div class="col-md-8">
									<p id='vd_id_kota' class="form-control-static">KOTA 108</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Nama Topik Tugas Akhir</label>
								<div class="col-md-8">
									<p id="show_topik_ta" class="form-control-static">Pengelolaan Pelaksanaan Tugas Akhir POLBAN Berbasis Web</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Tanggal Seminar</label>
								<div class="col-md-8">
									<p id="show_stat_proposal" class="form-control-static">Senin, 2 Maret 2015</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Jam Seminar</label>
								<div class="col-md-8">
									<p id="show_stat_proposal" class="form-control-static">08.40 WIB</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Ruangan Seminar</label>
								<div class="col-md-8">
									<p id="show_stat_proposal" class="form-control-static">Ruang A201</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Penguji Seminar</label>
								<div class="col-md-8">
									<p id="show_stat_proposal" class="form-control-static">Santi Sundari</p>
									<p id="show_stat_proposal" class="form-control-static">Suprihanto</p>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="col-md-6" style="text-align: left;">
							<a class="btn btn-primary" data-toggle="modal" data-target="#modalEditJadwalSeminarSatu" data-dismiss="modal"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit Jadwal</a>
						</div>
						<div class="col-md-6">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for Edit Jadwal Seminar Satu -->
		<div class="modal fade" id="modalEditJadwalSeminarSatu" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Jadwal Seminar 1</h4>
					</div>
					<div class="modal-body">
						<form id="form_viewdet_kota" class="form-horizontal" name="form_viewdet_kota">
							<div class="form-group">
								<label class="col-md-4 control-label">Kode Kelompok</label>
								<div class="col-md-6">
									<p id='vd_id_kota' class="form-control-static">KOTA 108</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Nama Topik Tugas Akhir</label>
								<div class="col-md-8">
									<p id="show_topik_ta" class="form-control-static">Pengelolaan Pelaksanaan Tugas Akhir POLBAN Berbasis Web</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Tanggal Seminar</label>
								<div class="col-md-6">
									<div class='input-group date' id='input-date-picker'>
					                    <input id='input-date' name='input-date' type='text' class="form-control" value="02/03/2015" />
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Jam Seminar</label>
								<div class="col-md-6">
									<div class='input-group date' id='input-time-picker'>
					                    <input id='input-time' name='input-time' type='text' class="form-control" value="08:40" />
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-time"></span>
					                    </span>
					                </div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Ruangan Seminar</label>
								<div class="col-md-6">
									<select id="input_rng_seminar" class="form-control" name="input_rng_seminar">
										<option>--- Pilih Ruangan ---</option>
										<optgroup label="Ruangan">
											<option selected="true">A201</option>
											<option>A202</option>
											<option>A203</option>
											<option>Ruang Rapat</option>
											<option>Ruang Serba Guna</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Penguji Seminar</label>
								<div class="col-md-6">
									<select id="input_penguji_seminar" class="form-control" name="input_penguji_seminar">
										<option>--- Pilih Penguji Satu ---</option>
										<optgroup label="Penguji Seminar">
											<option>Eddy Bambang Soewono</option>
											<option>Ida Suhartini</option>
											<option selected="true">Santi Sundari</option>
											<option>Suprihanto</option>
											<option>Yadhi Aditya</option>
											<option>Yudi Widhiyasana</option>
										</optgroup>
									</select>

									<select id="input_penguji_seminar" class="form-control" name="input_penguji_seminar">
										<option>--- Pilih Penguji Dua ---</option>
										<optgroup label="Penguji Seminar">
											<option>Eddy Bambang Soewono</option>
											<option>Ida Suhartini</option>
											<option>Santi Sundari</option>
											<option selected="true">Suprihanto</option>
											<option>Yadhi Aditya</option>
											<option>Yudi Widhiyasana</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="form-group hide">
								<div class="col-md-offset-4 col-md-6">
									<input id="submit_jadwal_seminar_satu" name="submit_jadwal_seminar_satu" class="btn btn-primary" type="submit" value="Buat Jadwal" />
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="col-md-6" style="text-align: left;">
							<label for="submit_jadwal_seminar_satu" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;Simpan Jadwal</label>
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
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/moment-with-locales.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jasny-bootstrap.min.js"></script>
		<script type="text/javascript">
			$("[data-toggle=popover-login]").popover({
			    html: true, 
				content: function() {
		        	return $('#popover-login-content').html();
		        }
			});
		</script>
		<script type="text/javascript">
            $(function () {
                $('#input-date-picker').datetimepicker({
                	format: 'DD/MM/YYYY',
                    locale: 'id',
                    daysOfWeekDisabled: [6,0],
                    showTodayButton: true
                });
            });
            $(function () {
                $('#input-time-picker').datetimepicker({
                    format: 'LT',
                    locale: 'id'
                });
            });
        </script>
	</body>
</html>