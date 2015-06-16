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
		<nav class="navbar navbar-inverse">
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
		<div class="container flex-container">
			<div class="page-header">
				<h1><small>Pengelolaan Seminar / Jadwal Seminar 1</small></h1>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<input id='btn_addnew' class="btn btn-primary" name='btn_addnew' type="button" value="Tambah Jadwal Seminar" data-toggle="modal" data-target="#modalTambahKelompokTA" />
				</div>
				<div class="col-md-6" align="right">
					<input id='btn_addnew' class="btn btn-primary" name='btn_addnew' type="button" value="Publikasikan Semua Jadwal" onclick="location.href='c_mengelolaKelompokTA/postKelompokTA'" />
				</div>
			</div>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Tanggal</th>
						<th>ID Kelompok</th>
						<th width="80" style="text-align: center;">Status</th>
						<th width="80" style="text-align: center;">Detail</th>
						<th width="80" style="text-align: center;">Edit</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($list_detail_kota as $value_ldk) { ?>
					<tr>
						<td class="id_kota"><?php echo $id_kota = $value_ldk['id_kota']; ?></td>
						<td class="nama_topik"><?php echo $nama_topik = $value_ldk['nama_topik']; ?></td>
					<?php
					$idx = 0;
					foreach ($value_ldk['list_ak']->result() as $value_lak) 
					{ 
						$ak_nim[$idx] = $value_lak->nim;
						$ak_nama[$idx] = $value_lak->nama_mahasiswa;
						$idx++;
					} 

					$idx = 0;
					foreach ($value_ldk['list_pb']->result() as $value_lpb) 
					{
						$pb_kode[$idx] = $value_lpb->kode_dosen;
						$pb_nama[$idx] = $value_lpb->nama_dosen;
						$idx++; 
					}
					?>
						<td style="text-align: center;">
							<?php if ($value_ldk['ispublished'] == true) { ?>
							<div class="alert alert-success cell" role="alert">Published</div>
							<?php } else { ?>
							<div class="alert alert-warning cell" role="alert">Not Published</div>
							<?php } ?>
						</td>
						<td style="text-align: center;"><a href="#" class="btn btn-info btn-lg cell" data-toggle="modal" data-target="#modalViewDetailKelompokTA"
							data-id-kota="<?php echo $id_kota; ?>"
							data-nama-topik="<?php echo $nama_topik; ?>"
							data-ak-1="<?php echo $ak_nama[0]; ?>"
							data-ak-2="<?php echo $ak_nama[1]; ?>"
							data-ak-3="<?php echo $ak_nama[2]; ?>"
							data-pb-1="<?php echo $pb_nama[0]; ?>"
							data-pb-2="<?php echo $pb_nama[1]; ?>"
							><span class="glyphicon glyphicon-info-sign"></span></a></td>
						<td style="text-align: center;"><a href="#" class="btn btn-primary btn-lg cell" data-toggle="modal" data-target="#modalEditKelompokTA"><span class="glyphicon glyphicon-pencil"></span></a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>

			<!-- Modal for View Detail -->
			<div class="modal fade" id="modalViewDetailKelompokTA" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Detail Kelompok TA</h4>
						</div>
						<div class="modal-body">
							<form id="form_viewdet_kota" name="form_viewdet_kota" class="form-signin" action='' method=''>
								<table>
									<tr> 
										<td width="120"><label for='vd_id_kota'>Kode Kelompok</label></td>
										<td><input id='vd_id_kota' class="form-control" name='vd_id_kota' type='text' disabled="disabled"></td>
									</tr>
									<tr> 
										<td><label for='vd_nama_topik'>Topik TA</label></td>
										<td><input id='vd_nama_topik' class="form-control" name='vd_nama_topik' type='text' disabled="disabled"></td>
									</tr>
									<tr>
										<td><label for='vd_ak_1'>Anggota 1</label></td>
										<td>
											<input id='vd_ak_1' class="form-control" name='vd_ak_1' type="text" disabled="disabled" />
										</td>
									</tr>
									<tr> 
										<td><label for='vd_ak_2'>Anggota 2</label></td>
										<td>
											<input id='vd_ak_2' class="form-control" name='vd_ak_2' type="text" disabled="disabled" />
										</td>
									</tr>
									<tr> 
										<td><label for='vd_ak_3'>Anggota 3</label></td>
										<td>
											<input id='vd_ak_3' class="form-control" name='vd_ak_3' type="text" disabled="disabled" />
										</td>
									</tr>
									<tr> 
										<td><label for='vd_pb_1'>Pembimbing 1</label></td>
										<td>
											<input id='vd_pb_1' class="form-control" name='vd_pb_1' type="text" disabled="disabled" />
										</td>
									</tr>
									<tr> 
										<td><label for='vd_pb_2'>Pembimbing 2</label></td>
										<td>
											<input id='vd_pb_2' class="form-control" name='vd_pb_2' type="text" disabled="disabled" />
										</td>
									</tr>
								</table>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal for Add Kelompok TA -->
			<div class="modal fade" id="modalTambahKelompokTA" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Tambah Baru Kelompok TA</h4>
						</div>
						<div class="modal-body">
							<form id="form_create_kota" name="form_create_kota" class="form-signin" action='c_mengelolaKelompokTA/inputKelompokTA' method='post'>
								<table>
									<tr> 
										<td width="120"><label for='id_kota'>Kode Kelompok</label></td>
										<td><input id='id_kota' class="form-control" name='id_kota' type='text'></td>
									</tr>
									<tr> 
										<td><label for='nama_topik'>Topik TA</label></td>
										<td><input id='nama_topik' class="form-control" name='nama_topik' type='text'></td>
									</tr>
									<tr>
										<td><label for='anggota_1'>Anggota 1</label></td>
										<td>
											<select id='anggota_1' class="form-control" name='anggota_1'>
												<option value='0'>--- Pilih Mahasiswa ---</option>
												<?php foreach ($list_mhs->result() as $data) { ?>
												<option value='<?php echo $data->NIM ?>'><?php echo $data->NAMA_MAHASISWA ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<tr> 
										<td><label for='anggota_2'>Anggota 2</label></td>
										<td>
											<select id='anggota_2' class="form-control" name='anggota_2'>
												<option value='0'>--- Pilih Mahasiswa ---</option>
												<?php foreach ($list_mhs->result() as $data) { ?>
												<option value='<?php echo $data->NIM ?>'><?php echo $data->NAMA_MAHASISWA ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<tr> 
										<td><label for='anggota_3'>Anggota 3</label></td>
										<td>
											<select id='anggota_3' class="form-control" name='anggota_3'>
												<option value='0'>--- Pilih Mahasiswa ---</option>
												<?php foreach ($list_mhs->result() as $data) { ?>
												<option value='<?php echo $data->NIM ?>'><?php echo $data->NAMA_MAHASISWA ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<tr> 
										<td><label for='pemb_1'>Pembimbing 1</label></td>
										<td>
											<select id='pemb_1' class="form-control" name='pemb_1'>
												<option value='0'>--- Pilih Dosen ---</option>
												<?php foreach ($list_dsn->result() as $data) { ?>
												<option value='<?php echo $data->KODE_DOSEN ?>'><?php echo $data->NAMA_DOSEN ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<tr> 
										<td><label for='pemb_2'>Pembimbing 2</label></td>
										<td>
											<select id='pemb_2' class="form-control" name='pemb_2'>
												<option value='0'>--- Pilih Dosen ---</option>
												<?php foreach ($list_dsn->result() as $data) { ?>
												<option value='<?php echo $data->KODE_DOSEN ?>'><?php echo $data->NAMA_DOSEN ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<!--tr> 
										<td>isPublished</td>
										<td><input type='checkbox' name='isPublished' value='0' disabled></td>
									</tr-->
									<tr> 
										<td colspan="2"><input id='submit_kota' class="btn btn-primary" name='submit_kota' type='submit' value='Create Kelompok TA' /></td>
									</tr>
								</table>
							</form>
							<div class="alert alert-info" role="alert">
								<strong>Keterangan:</strong> Kelompok TA tidak dipublikasikan sebelum Anda melakukannya sendiri pada halaman Pengelolaan Kelompok TA.
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
							<h4 class="modal-title">Edit Kelompok TA</h4>
						</div>
						<div class="modal-body">
							<form id="form_create_kota" name="form_create_kota" class="form-signin" action='c_mengelolaKelompokTA/inputKelompokTA' method='post'>
								<table>
									<tr> 
										<td width="120"><label for='id_kota'>Kode Kelompok</label></td>
										<td><input id='id_kota' class="form-control" name='id_kota' type='text'></td>
									</tr>
									<tr> 
										<td><label for='nama_topik'>Topik TA</label></td>
										<td><input id='nama_topik' class="form-control" name='nama_topik' type='text'></td>
									</tr>
									<tr>
										<td><label for='anggota_1'>Anggota 1</label></td>
										<td>
											<select id='anggota_1' class="form-control" name='anggota_1'>
												<option value='0'>--- Pilih Mahasiswa ---</option>
												<?php foreach ($list_mhs->result() as $data) { ?>
												<option value='<?php echo $data->NIM ?>'><?php echo $data->NAMA_MAHASISWA ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<tr> 
										<td><label for='anggota_2'>Anggota 2</label></td>
										<td>
											<select id='anggota_2' class="form-control" name='anggota_2'>
												<option value='0'>--- Pilih Mahasiswa ---</option>
												<?php foreach ($list_mhs->result() as $data) { ?>
												<option value='<?php echo $data->NIM ?>'><?php echo $data->NAMA_MAHASISWA ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<tr> 
										<td><label for='anggota_3'>Anggota 3</label></td>
										<td>
											<select id='anggota_3' class="form-control" name='anggota_3'>
												<option value='0'>--- Pilih Mahasiswa ---</option>
												<?php foreach ($list_mhs->result() as $data) { ?>
												<option value='<?php echo $data->NIM ?>'><?php echo $data->NAMA_MAHASISWA ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<tr> 
										<td><label for='pemb_1'>Pembimbing 1</label></td>
										<td>
											<select id='pemb_1' class="form-control" name='pemb_1'>
												<option value='0'>--- Pilih Dosen ---</option>
												<?php foreach ($list_dsn->result() as $data) { ?>
												<option value='<?php echo $data->KODE_DOSEN ?>'><?php echo $data->NAMA_DOSEN ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<tr> 
										<td><label for='pemb_2'>Pembimbing 2</label></td>
										<td>
											<select id='pemb_2' class="form-control" name='pemb_2'>
												<option value='0'>--- Pilih Dosen ---</option>
												<?php foreach ($list_dsn->result() as $data) { ?>
												<option value='<?php echo $data->KODE_DOSEN ?>'><?php echo $data->NAMA_DOSEN ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<!--tr> 
										<td>isPublished</td>
										<td><input type='checkbox' name='isPublished' value='0' disabled></td>
									</tr-->
									<tr> 
										<td colspan="2"><input id='submit_kota' class="btn btn-primary" name='submit_kota' type='submit' value='Create Kelompok TA' /></td>
									</tr>
								</table>
							</form>
							<div class="alert alert-info" role="alert">
								<strong>Keterangan:</strong> Kelompok TA tidak dipublikasikan sebelum Anda melakukannya sendiri pada halaman Pengelolaan Kelompok TA.
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

			    $(e.currentTarget).find('input[name="vd_id_kota"]').val(id_kota);
			    $(e.currentTarget).find('input[name="vd_nama_topik"]').val(nama_topik);
			    $(e.currentTarget).find('input[name="vd_ak_1"]').val(ak_1);
			    $(e.currentTarget).find('input[name="vd_ak_2"]').val(ak_2);
			    $(e.currentTarget).find('input[name="vd_ak_3"]').val(ak_3);
			    $(e.currentTarget).find('input[name="vd_pb_1"]').val(pb_1);
			    $(e.currentTarget).find('input[name="vd_pb_2"]').val(pb_2);
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