<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?> | FUFTV</title>
	<link rel="shortcut icon" href="<?php echo base_url('asset/img/brand.png'); ?>" alt="forufans Brand">
	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.css'); ?>" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url('asset/js/jquery-2.1.3.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap-filestyle.js'); ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('asset/css/fuftv.css'); ?>" type="text/css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/datatables/jquery.dataTables.css" />

	<style type="text/css" class="init">

		div.container {
			width: 80%;
		}

		.custom-date-style {
			background-color: red !important;
		}

	</style>
	<script type="text/javascript" language="javascript" src="<?php echo base_url()?>asset/datatables/jquery.dataTables.js"></script>

	<script type="text/javascript" language="javascript" class="init">

		$(document).ready(function() {
			$('#example').dataTable();
		} );

		$(document).ready(function() {
			$('#example2').dataTable();
		} );

		$(document).ready(function() {
			$('#example3').dataTable();
		} );

		$(document).ready(function() {
			$('#example4').dataTable();
		} );

	</script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/datepicker/jquery.datetimepicker.css'); ?>" />
	<script type="text/javascript" src="<?php echo base_url('asset/datepicker/jquery.datetimepicker.js'); ?>"></script>
</head>
<body>
	<nav class="fuftv-nav">
		<div class="fuftv-nav">
			<div class="fuftv-navbar">
				<div class="col-md-9">
					<div class="fuftv-nav-brand">fuftv.com</div>
				</div>
				<div class="col-md-3">
					<a href="#">
						<div class="user-dec">
							<span style="margin-right:5px;"><b><?php echo $this->session->userdata('c_usr'); ?></b></span>
							<i class="fa fa-user" style="margin-right:5px;"></i>
							<a href="<?php echo base_url()?>admin/login/logout"><i class="fa fa-power-off"></i></a>
						</div>
					</a>
					<a href="<?php echo base_url()?>" target="_blank">
						<div class="btn-back">
							<b>Lihat Website <i class="fa fa-globe"></i></b>
						</div>
					</a>
				</div>
				<div class="sambungfloat"></div>
			</div>
		</div>
	</nav>
	<div class="col-md-12 paddingnone bts-ats">
		<div class="col-md-2 pd-rl">
			<div class="aside-row">
				<div class="main-aside">
					<div class="aside-box">
						<a href="<?php echo base_url()?>admin/film/addfilm">
							<div class="aside-menu-add"><i class="fa fa-plus-circle"></i> <b>Buat film baru</b></div>
						</a>
						<a href="<?php echo base_url()?>admin">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-desktop"></i></div>
								<div class="col-md-9 pd-rl fs-12">Halaman Utama</div>
								<div class="col-md-2 paddingnone text-kanan"></div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<a href="<?php echo base_url()?>admin/profile">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-user-secret"></i></div>
								<div class="col-md-9 pd-rl fs-12">Profile</div>
								<div class="col-md-2 paddingnone text-kanan"></div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<a href="<?php echo base_url()?>admin/requestfilm">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-bullhorn"></i></div>
								<div class="col-md-9 pd-rl fs-12">Request Film</div>
								<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<a href="<?php echo base_url()?>admin/film">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-list-alt"></i></div>
								<div class="col-md-9 pd-rl fs-12">Daftar film</div>
								<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<?php if ($this->account->validate_admin()): ?>
						<a href="<?php echo base_url()?>admin/Episode">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-list"></i></div>
								<div class="col-md-9 pd-rl fs-12">Daftar episode/subfilm</div>
								<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<?php endif ?>
						<a href="<?php echo base_url()?>admin/kategori">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa  fa-tag"></i></div>
								<div class="col-md-9 pd-rl fs-12">Kategori</div>
								<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<a href="<?php echo base_url()?>admin/tag">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-tags"></i></div>
								<div class="col-md-9 pd-rl fs-12">Tag</div>
								<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<?php if ($this->account->validate_admin()): ?>
						<a href="<?php echo base_url()?>admin/user">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-user-plus"></i></div>
								<div class="col-md-9 pd-rl fs-12">User</div>
								<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<?php endif ?>
						<a href="<?php echo base_url()?>admin/setting">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-code"></i></div>
								<div class="col-md-9 pd-rl fs-12">Setting</div>
								<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
								<div class="sambungfloat"></div>
							</div>
						</a>
					</div>
					<div class="aside-box nbb">
						<div class="aside-ttl">
							<div class="col-md-12 paddingnone ttl">SISTEM</div>
							<div class="col-md-3 paddingnone text-kanan"></div>
							<div class="sambungfloat"></div>
						</div>
						<a href="#">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-eye"></i></div>
								<div class="col-md-8 pd-rl fs-12">Viewer terbanyak</div>
								<div class="col-md-3 paddingnone text-kanan fs-11">404</div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<a href="#">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-thumbs-o-up"></i></div>
								<div class="col-md-8 pd-rl fs-12">Liker terbanyak</div>
								<div class="col-md-3 paddingnone text-kanan fs-11">404</div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<a href="#">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-plus-square-o"></i></div>
								<div class="col-md-8 pd-rl fs-12">K-drama (드라마)</div>
								<div class="col-md-3 paddingnone text-kanan fs-11">404</div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<a href="#">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-plus-square-o"></i></div>
								<div class="col-md-8 pd-rl fs-12">J-drama (ドラマ)</div>
								<div class="col-md-3 paddingnone text-kanan fs-11">404</div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<a href="#">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-plus-square-o"></i></div>
								<div class="col-md-8 pd-rl fs-12">Indonesia</div>
								<div class="col-md-3 paddingnone text-kanan fs-11">404</div>
								<div class="sambungfloat"></div>
							</div>
						</a>
						<a href="#">
							<div class="aside-menu">
								<div class="col-md-1 paddingnone"><i class="fa fa-plus-square-o"></i></div>
								<div class="col-md-8 pd-rl fs-12">Thailand</div>
								<div class="col-md-3 paddingnone text-kanan fs-11">404</div>
								<div class="sambungfloat"></div>
							</div>
						</a>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-10 pd-rl">
			<div class="main-post">
				<?php $this->load->view($page); ?>
				<div class="sambungfloat"></div>
			</div>
			<div class="copyrightfuftv toolslinksteam">
				<div class="kiri">
					<div class="desttlpost2 bg-merah txt-putih kiri"><i class="fa facopuright"></i> Streamingfuftv <?php echo date('Y'); ?></div>
					<div class="desttlpost2 txt-list kiri"><a href="#" class="txt-list"><b>Tentang FUFTV</b></a></div>
					<div class="desttlpost2 txt-list kiri"><a href="#" class="txt-list"><b>Periklanan</b></a></div>
					<div class="desttlpost2 txt-list kiri"><a href="#" class="txt-list"><b>Contact</b></a></div>
					<div class="desttlpost2 txt-list kiri"><a href="#" class="txt-list"><b>Prifacy Policy</b></a></div>
					<div class="desttlpost2 txt-list kiri"><a href="#" class="txt-list"><b>Mitra</b></a></div>
					<div class="desttlpost2 txt-list kiri"><a href="#" class="txt-list"><b>FUFTV</b></a></div>
					<div class="sambungfloat"></div>
				</div>
				<div class="sambungfloat"></div>
			</div>
		</div>
	</div>
</body>
</html>