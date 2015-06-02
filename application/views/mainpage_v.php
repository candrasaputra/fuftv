<!DOCTYPE html>

<html>
<head>
	<title><?php echo $title; ?> | fuftv</title>
	<link rel="shortcut icon" href="<?php echo base_url('asset/img/brand.png'); ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('asset/css/fuftv.css'); ?>" type="text/css" />

	<!--facebook plugin share-->
	<meta name="description" content="<?php $limitdess = $deskripsi; echo character_limiter($limitdess, 150);?>">
	<meta name="keywords" content="<?php $limtagkey = $keywords; echo word_limiter($limtagkey, 10);?>">
	<meta property="og:type" content="article" />
	<meta property="og:site_name" content="fuftv streaming"/>
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:url" content="<?php echo base_url($url); ?>" />
	<meta property="og:image" content="<?php echo base_url($image); ?>" />
	<meta property="og:image:url" content="<?php echo base_url($image); ?>" />
	<meta property="og:description" content="<?php $limitdess = $deskripsi; echo character_limiter($limitdess, 150);?>" />
	<link rel="canonical" href="<?php echo base_url($url); ?>" />
</head>
<body>
	<div class="fuftv-nav hidden-sm hidden-xs"><!--Navbar tamppilan BESAR Start-->
		<div class="fuftv-nav navbar-fixed-top">
			<div class="fuftv-navbar">
				<div class="col-md-3 pd-rl">
					<div class="fuftv-nav-brand">
						<a href="<?php echo base_url(); ?>"><img class="imgbrandfuf" src="<?php echo base_url('asset/img/brand.png'); ?>" alt="Fuftv Logo" title="Home" width="100%"></a>
					</div>
					<div class="cubrandtag">
						FUFTV
					</div>
				</div>
				<div class="col-md-6 pd-rl">
					<div class="fuftv-navbar-menu">
					<form action="<?php echo site_url('mainpage_c/search'); ?>"  method="get">
						<div class="input-group">
							<input type="text" name="cari" class="form-control noradius" placeholder="Pencarian ...">
							<span class="input-group-btn">
								<button class="btn btn-default fufsearch"><i class="fa fa-search"></i></button>
							</span>
						</div>
		      		</form>
					</div>
				</div>
				<div class="col-md-3 pd-rl">
					<a href="#">
						<div class="fuftv-navbar-menu">
							<a href="#"><div class="fuftv-rq" data-toggle="modal" data-target="#requestfilm">REQUEST FILM <i class="fa fa-caret-right"></i></div></a>
						</div>
					</a>
				</div>
				<div class="sambungfloat"></div>
			</div>
		</div>
		<div class="sambungfloat"></div>
	</div><!--Navbar tamppilan BESAR End-->
	<div class="fuftv-nav"><!--Navbar tamppilan Kecil Start-->
		<div class="fuftv-nav">
			<div class="fuftv-navbar">
				<div class="col-md-3 pd-rl">
					<div class="fuftv-nav-brand">
						<a href="<?php echo base_url(); ?>"><img class="imgbrandfuf" src="<?php echo base_url('asset/img/brand.png'); ?>" alt="Fuftv Logo" title="Home" width="100%"></a>
					</div>
					<div class="cubrandtag">
						FUFTV
					</div>
				</div>
				<div class="col-md-6 pd-rl">
					<div class="fuftv-navbar-menu">
					<form action="<?php echo site_url('mainpage_c/search'); ?>"  method="get">
						<div class="input-group">
							<input type="text" name="cari" class="form-control noradius" placeholder="Pencarian ...">
							<span class="input-group-btn">
								<button class="btn btn-default fufsearch"><i class="fa fa-search"></i></button>
							</span>
						</div>
		      		</form>
					</div>
				</div>
				<div class="col-md-3 pd-rl">
					<a href="#">
						<div class="fuftv-navbar-menu">
							<a href="#"><div class="fuftv-rq" data-toggle="modal" data-target="#requestfilm">REQUEST FILM <i class="fa fa-caret-right"></i></div></a>
						</div>
					</a>
				</div>
				<div class="sambungfloat"></div>
			</div>
		</div>
		<div class="sambungfloat"></div>
	</div><!--Navbar tamppilan Kecil End-->
	<div class="col-md-12 paddingnone bts-ats">
		<div class="hidden-xs hidden-sm">
			<div class="col-md-2 pd-rl"></div>
			<nav class="col-md-2 pd-rl navfixbts navbar-fixed-top">
				<!-- <div class="iklanfuftv">
					<img src="<?php echo base_url('asset/img/iklan/iklan2.jpg'); ?>" alt="Iklan" title="iklan" width="100%">
				</div> -->
				<div class="aside-row">
					<div class="main-aside">
						<div class="aside-box">
							<a href="<?php echo base_url(); ?>">
								<div class="aside-menu">
									<div class="col-md-1 paddingnone"><i class="fa fa-desktop"></i></div>
									<div class="col-md-9 pd-rl fs-12">Home</div>
									<div class="col-md-2 paddingnone text-kanan"></div>
									<div class="sambungfloat"></div>
								</div>
							</a>
							<a href="<?php echo base_url(); ?>tontonanpopuler">
								<div class="aside-menu">
									<div class="col-md-1 paddingnone"><i class="fa fa-star-o"></i></div>
									<div class="col-md-9 pd-rl fs-12">Tontonan Populer</div>
									<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret"></i></div>
									<div class="sambungfloat"></div>
								</div>
							</a>
							<a href="<?php echo base_url(); ?>disarankan">
								<div class="aside-menu">
									<div class="col-md-1 paddingnone"><i class="fa fa-smile-o"></i></div>
									<div class="col-md-9 pd-rl fs-12">Disarankan</div>
									<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
									<div class="sambungfloat"></div>
								</div>
							</a>
							<?php foreach ($kategori as $key): ?>
								<?php if ($this->main_m->count_film_by_kategori($key->idkategori) != 0): ?>
								<a href="<?php echo base_url(); ?>kategori/<?php echo $key->katalias ?>">
								<div class="aside-menu">
									<div class="col-md-1 paddingnone"><i class="fa fa-hdd-o"></i></div>
									<div class="col-md-9 pd-rl fs-12">Baru di <?php echo $key->jdlkategori ?> </div>
									<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
									<div class="sambungfloat"></div>
								</div>
							</a>
								<?php endif ?>
							<?php endforeach ?>
							<a href="<?php echo base_url(); ?>genres">
								<div class="aside-menu">
									<div class="col-md-1 paddingnone"><i class="fa fa-hdd-o"></i></div>
									<div class="col-md-9 pd-rl fs-12">Tag/Genre</div>
									<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
									<div class="sambungfloat"></div>
								</div>
							</a>
							<a href="<?php echo base_url(); ?>updatetanterakhir">
								<div class="aside-menu">
									<div class="col-md-1 paddingnone"><i class="fa fa-hdd-o"></i></div>
									<div class="col-md-9 pd-rl fs-12">Update-an Terakhir</div>
									<div class="col-md-2 paddingnone text-kanan"><i class="fa fa-caret-right"></i></div>
									<div class="sambungfloat"></div>
								</div>
							</a>
						</div>
						<div class="aside-box">
							<div class="aside-ttl">
								<div class="col-md-12 paddingnone ttl">KATEGORI</div>
								<div class="col-md-3 paddingnone text-kanan"></div>
								<div class="sambungfloat"></div>
							</div>
							<a href="<?php echo base_url(); ?>daftarfilm">
								<div class="aside-menu">
									<div class="col-md-1 paddingnone"><i class="fa fa-plus-square-o"></i></div>
									<div class="col-md-11 pd-rl fs-12">
										Semua Film
										<span class="badge pull-right"><?php echo $this->main_m->count_film_by_kategori(0) ?></span>
									</div>
									<div class="sambungfloat"></div>
								</div>
							</a>
							<?php foreach ($kategori as $key): ?>
								<?php if ($this->main_m->count_film_by_kategori($key->idkategori) != 0): ?>
								<a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $key->idkategori ?>">
									<div class="aside-menu">
										<div class="col-md-1 paddingnone"><i class="fa fa-plus-square-o"></i></div>
										<div class="col-md-11 pd-rl fs-12">
											<?php echo $key->jdlkategori ?>
											<span class="badge pull-right"><?php echo $this->main_m->count_film_by_kategori($key->idkategori) ?></span>
										</div>
										<div class="sambungfloat"></div>
									</div>
								</a>
								<?php endif ?>
							<?php endforeach ?>
						</div>
						<div class="aside-box nbb">
							<div class="aside-ttl">
								<div class="col-md-12 paddingnone ttl">TAG FILM</div>
								<div class="col-md-3 paddingnone text-kanan"></div>
								<div class="sambungfloat"></div>
							</div>
							<div class="aside-ttl">
							<?php foreach ($gettag as $at): ?>
								<a href="<?php echo base_url(); ?>mainpage_c/tag/<?php echo $at->tagalias ?>">
									<div class="aside-menu pd-rl">
										<div class="col-md-1 paddingnone"><i class="fa fa-plus-square-o"></i></div>
										<div class="col-md-11 pd-rl fs-12">
											<?php echo $at->jdltag ?>
											<span class="badge pull-right"><?php echo $this->main_m->count_tag($at->idtag) ?></span>
										</div>
										<div class="sambungfloat"></div>
									</div>
								</a>
							<?php endforeach ?>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="visible-xs visible-sm">
			<div class="col-xs-12 pd-rl">
				<div class="mainbox">
					<div class="pop-row">
						<a href="<?php echo base_url(); ?>"><div class="col-xs-4 txt-list tengah fs-12 pd-rl"><i class="fa fa-globe"></i> <b>Home</b></div></a>
						<a href="<?php echo base_url(); ?>tontonanpopuler"><div class="col-xs-4 txt-list tengah fs-12 pd-rl"><i class="fa fa-trophy"></i> <b>Populer</b></div></a>
						<a href="<?php echo base_url(); ?>genres"><div class="col-xs-4 txt-list tengah fs-12 pd-rl"><i class="fa fa-tags"></i> <b>Kategori</b></div></a>
						<div class="sambungfloat"></div>
					</div>
				</div>
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="col-md-10 pd-rl">
			<?php if ($this->session->flashdata('message')): ?>
				<div class="alert alert-success alert-dismissible bts-bwh" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong><?php echo $this->session->flashdata('message');?></strong>
				</div>
			<?php endif ?>
			<?php $this->load->view($page); ?>
			<footer class="fuftvfooter pd-rl">
				<div class="col-md-8 pd-rl">
					<div class="media-box">
						<div class="fuftvfooterlbl kiri">FILM MOVIE/SERIES BARU</div>
						<a href="<?php echo base_url(); ?>daftarfilm"><div class="countviewerbox kanan">
							<div class="countviewerkiri">Lihat lainnya</div>
							<div class="countviewerkanan"><i class="fa fa-caret-down txt-list"></i></div>
							<div class="sambungfloat"></div>
						</div></a>
						<div class="sambungfloat"></div>
					</div>
					<div class="pop-row">
						<!--begin-->
						<div class="hidden-xs">
							<?php foreach ($filmbaru as $fbro ): ?>
								<div class="col-md-3 col-sm-3 col-xs-6 pd-rl">
									<div class="altlinksteamimg2">
										<a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $fbro->idkategori ?>"><div class="altlinksteamttl3"><?php echo $fbro->jdlkategori; ?></div></a>
										<a href="<?php echo base_url('film/'.$fbro->alias); ?>"><img src="<?php echo base_url();?>asset/img/poster/<?php echo $fbro->posterfilm; ?>" alt="<?php echo $fbro->jdlfilm; ?>" title="<?php echo $fbro->jdlfilm;?>" width="100%"></a>
										<a href="<?php echo base_url('film/'.$fbro->alias); ?>"><div class="altlinksteamttl2" title="<?php echo $fbro->jdlfilm; ?>"><?php $limitdess = $fbro->jdlfilm; echo character_limiter($limitdess, 20);?></div></a>
									</div>
								</div>
							<?php endforeach ?>
						</div>
						<div class="visible-xs"><!--tampilan kecil START-->
							<?php foreach ($filmbaru as $fbro ): ?>
								<div class="col-xs-12 pd-rl">
									<div class="media udfpublishermedia">
										<div class="pull-left fuftv-post-img">
											<a href="<?php echo base_url('film/'.$fbro->alias); ?>"><img class="media-object udfpublisherimg" src="<?php echo base_url();?>asset/img/poster/<?php echo $fbro->posterfilm; ?>" width="100%" alt="<?php echo $fbro->jdlfilm; ?>" title="<?php echo $fbro->jdlfilm; ?>"></a>
											<a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $fbro->idkategori ?>"><div class="altlinksteamttl4"><?php echo $fbro->jdlkategori; ?></div></a>
										</div>
										<div class="media-body">
											<div class="box">
												<div class="countsaranfilm">
													<?php $getini = $this->main_m->get_menontonini($fbro->idfilm); if (!empty($getini)): ?>
														<?php echo $getini ?>
													<?php else: ?>
														<?php echo "0" ?>
													<?php endif ?>
												 - Menonton ini.</div>
												<div class="sambungfloat"></div>
											</div>
											<a href="<?php echo base_url('film/'.$fbro->alias); ?>"><h4 class="media-heading post-tags fs-14" title="<?php echo $fbro->jdlfilm; ?>"><?php echo $fbro->jdlfilm; ?></h4></a>
											<div class="mediaisikoment pd-rl">Status : <?php echo $fbro->statusfilm; ?>,</div>
											<div class="mediaisikoment pd-rl">Ditayangkan : <?php echo $fbro->airedfilm; ?>,</div>
											<div class="mediaisikoment pd-rl showtitle">Tag :
												<?php 
												$this->db->join('tag','tag.idtag = relasitag.idtag');
												$this->db->where('idfilm', $fbro->idfilm);
												$rec_coba = $this->db->get('relasitag')->result_array();
												?>
												<?php foreach ($rec_coba as $tag): ?>
													<a href="<?php echo base_url(); ?>mainpage_c/tag/<?php echo $tag['tagalias'] ; ?>"><b><?php echo $tag['jdltag'].", " ?></b></a>
												<?php endforeach ?>
											</div>
											<div class="mediaisikoment pd-rl">
												<?php $limitdess = $fbro->deskripsifilm; echo character_limiter($limitdess, 150);?>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div><!--tampilan kecil END-->
						<!--end-->
						<div class="sambungfloat"></div>
					</div>
				</div>
				<div class="col-md-4 pd-rl">
					<div class="fuftvfooterlbl">PARTNER KERJA FUFTV</div>
					<!--begin-->
					<div class="col-md-12 komusrnmbox">
						<div class="kiri">
							<div class="patnerimg"><img src="<?php echo base_url('asset/img/mal.png'); ?>" alt="gambar" title="gambar" width="100%"></div>
						</div>
						<div class="kiri">
							<div class="komusrnm txt-list"><b>MyANimeList</b></div>
							<div class="komusrnm">MyAnimeList.net is a property of MyAnimeList,</div>
						</div>
						<div class="sambungfloat"></div>
					</div>
					<!--end-->
				</div>
				<div class="sambungfloat"></div>
				<div class="copyrightfuftv">
					<div class="kiri">
						<div class="desttlpost2 bg-merah bdr-merah txt-putih kiri"><i class="fa facopuright"></i> Streamingfuftv <?php echo date('Y'); ?></div>
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
			</footer>
		</div>
	</div>
	<!--Modal Untuk request film-->
	<div class="modal fade" id="requestfilm" tabindex="-1" role="dialog" aria-labelledby="uploadimglabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Request Film.</h4>
				</div>
				<form action="<?php echo base_url('mainpage_c/reqfilm'); ?>" method="post">
					<div class="modal-body">
						<div class="posting-jdl">
							<textarea class="form-control bts-ats" name="isireqfilm" rows="3" placeholder="Masukan request film" required autofocus></textarea>
						</div>
						<div class="alert alert-info" style="margin-bottom:0px; margin-top:-7px;"><i class="fa fa-warning"></i> Jika perlu, cantumkan <b>tahun</b> perilisan film yang akan di request (tidak wajib).</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger">Request film</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>