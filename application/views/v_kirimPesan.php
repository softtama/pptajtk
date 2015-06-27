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
				<li><a href="<?php echo base_url().'c_mengelolaKelompokTA' ?>">Pengelolaan Kelompok</a></li>
				<li>
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
				<li>
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
				<h1><small>Kirim Pesan</small></h1>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<input id='btn_addnew' class="btn btn-primary" name='btn_addnew' type="button" value="Pesan Baru" data-toggle="modal" data-target="#modalTambahKelompokTA" />
				</div>
				<div class="col-md-6" align="right">
					
				</div>
			</div>
	    </div>
		<br>
		<div class="col-md-12">
			<div class="panel" style="max-width: 700px;">
				<div class="panel-body" style="min-height: 500px;">
					<div class="tabbable tabs-left">
						<ul class="nav nav-tabs" style="min-height: 300px;">
							<li class="active"><a href="#a" data-toggle="tab">Januar</a></li>
							<li><a href="#b" data-toggle="tab">Joe</a></li>
							<li><a href="#c" data-toggle="tab">Santi</a></li>
							<li><a href="#d" data-toggle="tab">Ida</a></li>
						</ul>
						<div class="panel" style="margin-bottom: 0px;">
							<div class="panel-body">
								<div class="tab-content">
									<div class="tab-pane active" id="a">
										<h3>Januar Muhtadiin</h3>
										<div style="height: 250px; max-height: 250px; overflow-y: scroll;" >Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. 
										Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
										</div>
									</div>
									<div class="tab-pane" id="b">
										<h3>Joe Lian Min</h3>
										<div style="height: 250px; max-height: 250px; overflow-y: scroll;" >Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. 
										Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
										</div>
									</div>
									<div class="tab-pane" id="c">
										<h3>Santi Sundari</h3>
										<div style="height: 250px; max-height: 250px; overflow-y: scroll;" >Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. 
										Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
										</div>
									</div>
									<div class="tab-pane" id="d">
										<h3>Ida Suhartini</h3>
										<div style="height: 250px; max-height: 250px; overflow-y: scroll;" >Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. 
										Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
										</div>
									</div>
								</div>
							</div>
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