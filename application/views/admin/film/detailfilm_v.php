<div class="col-md-8 pd-rl bts-ats">
	<?php if ($this->session->flashdata('critical')): ?>
	<div align="center" class="alert alert-danger alert-dismissible bts-bwh" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong><?php echo $this->session->flashdata('critical');?></strong>
	</div>
	<?php endif ?>
	<?php if ($this->session->flashdata('success')): ?>
		<div align="center" class="alert alert-success alert-dismissible bts-bwh" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong><?php echo $this->session->flashdata('success');?></strong>
		</div>
	<?php endif ?>
	<div class="pop-row">
		<div class="col-md-4 pd-rl">
			<div class="detailfim-dec bdr1"><a href="<?php echo base_url('admin/film/editfilm/'.$admdetaillist->idfilm); ?>" class="btn btn-danger btn-lg" style="width:100%;"><b>Edit Preview</b></a></div>
			<div class="bts-bwh bdr1">
				<img src="<?php echo base_url();?>asset/img/poster/<?php echo $admdetaillist->posterfilm; ?>" title="<?php echo $admdetaillist->jdlfilm; ?>" alt="<?php echo $admdetaillist->jdlfilm; ?>" width="100%">
			</div>
			<div class="detailfim-jdl">Informasi lain :</div>
			<div class="userdetailistmbox">
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Status</div>
						<div class="media-body">
							<div class="detailusermediades"><?php echo $admdetaillist->statusfilm; ?></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Episode</div>
						<div class="media-body">
							<div class="detailusermediades"><?php echo $admdetaillist->totalepsfilm; ?></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Durasi</div>
						<div class="media-body">
							<div class="detailusermediades"><?php echo $admdetaillist->durasifilm; ?></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia nbb">
						<div class="pull-left dfumleft">Batas Usia</div>
						<div class="media-body">
							<div class="detailusermediades"><?php echo $admdetaillist->btsusiafilm; ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 pd-rl">
			<h1 class="detaiuserfilmttl">"<?php echo $admdetaillist->jdlfilm; ?>"</h1>
			<div class="media-box">
				<div class="kiri">
					<div class="detailfim-jdl">Informasi :</div>
				</div>
				<div class="kanan">
					<div class="countviewerbox">
						<div class="countviewerkiri">Menonton ini -</div>
						<div class="countviewerkanan">1.344</div>
						<div class="sambungfloat"></div>
					</div>
				</div>
				<div class="sambungfloat"></div>
			</div>
			<div class="userdetailistmbox">
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Type</div>
						<div class="media-body">
							<div class="detailusermediades"><a href="#" class="txt-list"><b><?php echo $admdetaillist->typefilm; ?></b></a></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Kategori</div>
						<div class="media-body">
							<div class="detailusermediades"><a href="#" class="txt-list"><b><?php echo $admdetaillist->jdlkategori; ?></b></a></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Produser</div>
						<div class="media-body">
							<div class="detailusermediades"><?php echo $admdetaillist->productionfilm; ?></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Genre</div>
						<div class="media-body">
							<div class="detailusermediades">
								<a href="#" class="txt-list"><b>Action</b></a>,
								<a href="#" class="txt-list"><b>Mecha</b></a>,
								<a href="#" class="txt-list"><b>Sci-fi</b></a>
							</div>
						</div>
					</div>
				</div>
				<div class="dfumdeskripsi">Deskripsi :</div>
				<div class="detailusermediades2">
					<?php echo $admdetaillist->deskripsifilm; ?>
				</div>
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="sambungfloat"></div>
	</div>
	<div class="col-md-12 paddingnone"></div>
	<div class="media-box">
		<div class="kiri"><div class="detailfim-jdl">List Episode</div></div>
		<div class="kanan"><div class="detailfim-jdl txt-list text-kanan bts-ats"><a href="<?php echo base_url('admin/myepisode/addepisode/'.$admdetaillist->idfilm); ?>" class="btn btn-danger"><b>Tambah episode</b></a></div></div>
		<div class="sambungfloat"></div>
	</div>
	<!--list episode-->
	<?php if (!empty($listepisode)): ?>
		<?php foreach ($listepisode as $le): ?>
		<div class="episode-box">
			<div class="episode-dec">
				<div class="kiri">
					<img class="imgdetepsindetfilm" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $le->imgeps; ?>" width="100%" title="<?php echo $le->jdleps; ?>" alt="<?php echo $le->jdleps; ?>">
				</div>
				<div class="kiri">
					<div class="episode-jdl"><a href="#"><?php echo $le->jdleps; ?></a></div>
					<div class="kiri">by Robotfuftv</div>
					<div class="kiri" style="margin-left:5px;">1234x tayang</div>
					<div class="kiri" style="margin-left:5px;"><?php echo $this->timeago->time_ago("$le->timeepisode")?></div>
					<div class="sambungfloat"></div>
				</div>
				<div class="kanan txt-list">
					<?php if ($this->session->userdata('c_id') == $this->Myepisode_m->get_iduser_episode($le->idepisode)): ?>
					<a href="<?php echo base_url();?>admin/myepisode/edit/<?php echo "$le->idepisode"; ?>/<?php echo $admdetaillist->idfilm; ?>"><button>Edit</button></a>
					
					<form method="POST" action="<?php echo base_url();?>admin/myepisode/delete/">
						<input type="hidden" name="idepisode" value="<?php echo $le->idepisode; ?>" />
						<input type="hidden" name="idfilm" value="<?php echo $admdetaillist->idfilm; ?>" />
						<button>Hapus</button>
					</form>
					<?php endif ?>
				</div>
				<div class="sambungfloat"></div>
			</div>
		</div>
	<?php endforeach ?>
	<?php else: ?>
		Tidak ada episode
	<?php endif ?>
</div>
<div class="col-md-4 pd-rl bts-ats">
	<div class="udfpublisherbox bdr-btm">
		<div class="media udfpublishermedia">
			<div class="pull-left">
				<img class="media-object udfpublisherimg" src="<?php echo base_url('asset/img/brand.png'); ?>" width="100%">
			</div>
			<div class="media-body">
				<div class="udfpublishermediabox"><i class="fa fa-puzzle-piece"></i> Publisher</div>
				<h4 class="media-heading udfpmttl ">SuperRobotFufTV</h4>
				<div class="udfpmdes">Diupload : 9 menit yg lalu</div>
				<div class="udfpmdes">Disukai : 34</div>
			</div>
		</div>
	</div>
</div>