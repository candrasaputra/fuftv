<div class="pop-row">
	<div class="col-md-8 pd-rl">
		<div class="mainbox">
			<div class="bdr-btm bts-bwh">
				<h1 style="margin-top:0px;">"<?php echo $title; ?>"</h1>
			</div>
			<?php if (!empty($daftar)): ?>
			<?php foreach ($daftar as $sdf ): ?>
				<div class="col-md-6 col-sm-6 col-xs-12 maxboxheight pd-rl">
					<div class="media udfpublishermedia">
						<div class="pull-left fuftv-post-img">
							<a href="<?php echo site_url('film/'.$sdf->alias); ?>"><img class="media-object udfpublisherimg" src="<?php echo base_url()?>asset/img/poster/<?php echo $sdf->posterfilm; ?>" width="100%" alt="<?php echo $sdf->jdlfilm; ?>" title="<?php echo $sdf->jdlfilm; ?>"></a>
							<a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $sdf->idkategori ?>"><div class="altlinksteamttl4"><?php echo $sdf->jdlkategori; ?></div></a>
						</div>
						<div class="media-body">
							<div class="box">
								<div class="countsaranfilm">
								<?php $mini = $this->main_m->get_menontonini($sdf->idfilm); ?>
									<?php if (!empty($mini)): ?>
										<?php echo $this->main_m->get_menontonini($sdf->idfilm) ?>
									<?php else: ?>
										<?php echo "0" ?>
									<?php endif ?>
								 - Menonton ini.</div>
								<div class="sambungfloat"></div>
							</div>
							<a href="<?php echo site_url('film/'.$sdf->alias); ?>"><h4 class="media-heading post-tags fs-14" title="<?php echo $sdf->jdlfilm; ?>"><?php $limitjdl = $sdf->jdlfilm; echo character_limiter($limitjdl, 20);?></h4></a>
							<div class="mediaisikoment pd-rl">Aired : <?php echo $sdf->airedfilm; ?></div>
							<div class="mediaisikoment pd-rl showtitle">Tag :
								<?php 
									$this->db->join('tag','tag.idtag = relasitag.idtag');
									$this->db->where('idfilm', $sdf->idfilm);
									$rec_coba = $this->db->get('relasitag')->result_array();
								?>
								<?php foreach ($rec_coba as $tag): ?>
									<a href="<?php echo base_url(); ?>mainpage_c/tag/<?php echo $tag['tagalias'] ?>" title="<?php echo $tag['jdltag']?>"><b><?php echo $tag['jdltag'].", " ?></b></a>
								<?php endforeach ?>
							</div>
							<div class="mediaisikoment pd-rl">
								<?php $limitdess = $sdf->deskripsifilm; echo character_limiter($limitdess, 95);?>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
			<?php else: ?>
				<h4 align="center">Tidak Ada Film</h4>
			<?php endif ?>
			<div class="sambungfloat"></div>
		</div>
	</div>
	<div class="col-md-4 pd-rl">
		<div class="mainbox">
			<div class="post-tags bts-bwh" style="margin-top:0px;">FILM TONTONAN TERBANYAK</div>
			<?php if (!empty($postertop)): ?>
				<?php foreach ($postertop as $sdf ): ?>
					<div class="col-md-12 col-sm-12 col-xs-12 maxboxheight pd-rl">
						<div class="media udfpublishermedia">
							<div class="pull-left fuftv-post-img">
								<a href="<?php echo site_url('film/'.$sdf->alias); ?>"><img class="media-object udfpublisherimg" src="<?php echo base_url()?>asset/img/poster/<?php echo $sdf->posterfilm; ?>" width="100%" alt="<?php echo $sdf->jdlfilm; ?>" title="<?php echo $sdf->jdlfilm; ?>"></a>
								<a href=""><div class="altlinksteamttl4"><?php echo $sdf->jdlkategori; ?></div></a>
							</div>
							<div class="media-body">
								<div class="box">
									<div class="countsaranfilm">
									<?php $mini2 = $this->main_m->get_menontonini($sdf->idfilm); ?>
										<?php if (!empty($mini2)): ?>
											<?php echo $this->main_m->get_menontonini($sdf->idfilm) ?>
										<?php else: ?>
											<?php echo "0" ?>
										<?php endif ?>
									 - Menonton ini.</div>
									<div class="sambungfloat"></div>
								</div>
								<a href="<?php echo site_url('film/'.$sdf->alias); ?>"><h4 class="media-heading post-tags fs-14" title="<?php echo $sdf->jdlfilm; ?>"><?php $limitjdl = $sdf->jdlfilm; echo character_limiter($limitjdl, 20);?></h4></a>
								<div class="mediaisikoment pd-rl">Aired : <?php echo $sdf->airedfilm; ?></div>
								<div class="mediaisikoment pd-rl showtitle" title="tag">Tag :
									<?php 
									$this->db->join('tag','tag.idtag = relasitag.idtag');
									$this->db->where('idfilm', $sdf->idfilm);
									$rec_coba = $this->db->get('relasitag')->result_array();
									?>
									<?php foreach ($rec_coba as $tag): ?>
										<a href="<?php echo base_url(); ?>mainpage_c/tag/<?php echo $tag['tagalias'] ?>" title="<?php echo $tag['jdltag'] ?>"><?php echo $tag['jdltag'].", " ?></a>
									<?php endforeach ?>
								</div>
								<div class="mediaisikoment pd-rl">
									<?php $limitdess = $sdf->deskripsifilm; echo character_limiter($limitdess, 90);?>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			<?php else: ?>
				<div class="alert alert-danger tengah non-lbl bts-ats"><b><i>Tidak Ada Film yg Disarankan!</i></b></div>
			<?php endif ?>
			<div class="sambungfloat"></div>
			<?php if (count($postertop)==6): ?>
				<a href="#"><div class="seealleps2 txt-list"><a href="#">Lihat lainnya</a></div></a>
			<?php endif ?>
		</div>
		<div class="mainbox">
			<div class="post-tags bts-bwh" style="margin-top:0px;">DISARANKAN</div>
			<?php if (!empty($saraneps)): ?>
				<?php foreach ($saraneps as $lainnya ): ?>
					<div class="col-xs-12 pd-rl">
						<div class="media udfpublishermedia">
							<div class="pull-left fuftv-post-img">
								<a href="<?php echo base_url('post/'.$lainnya->epsalias); ?>">
									<img class="media-object udfpublisherimgpost" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $lainnya->imgeps; ?>" width="100%" alt="<?php echo $lainnya->jdleps; ?>" title="<?php echo $lainnya->jdlfilm; ?> <?php echo $lainnya->jdleps; ?> Subtitle Indonesia">
									<div class="fuftv-post-lks-xs"><?php echo $lainnya->epsview ;?> <i class="fa fa-eye"></i></div>
								</a>
							</div>
							<div class="media-body">
								<a href="<?php echo base_url('post/'.$lainnya->epsalias); ?>"><h4 class="media-heading post-tags txt-hitam" title="<?php echo $lainnya->jdlfilm; ?> <?php echo $lainnya->jdleps; ?> Subtitle Indonesia"><?php $jdlfilm = $lainnya->jdlfilm; echo character_limiter($jdlfilm, 12);?> <?php $jdleps = $lainnya->jdleps; $subs = "Subtitle Indonesia"; $spc = " "; echo character_limiter($jdleps.$spc.$subs, 29);?></h4></a>
								<div class="fuftv-post-dec pd-rl">Oleh : 
									<?php 
									$this->db->where('iduser', $lainnya->iduser);
									$rec_coba = $this->db->get('user')->result_array();
									?>
									<?php foreach ($rec_coba as $user): ?>
										<?php echo $user['username'] ?>
									<?php endforeach ?>
								</div>
								<div class="post-dec pd-rl">
									<div class="fuftv-post-dec">tayang sejak <?php echo $this->timeago->time_ago("$lainnya->timeepisode")?></div>
									<div class="sambungfloat"></div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
				<?php else: ?>
					<div class="alert alert-danger tengah marb bts-ats"><b><i>Tidak Ada Saran</i></b></div>
				<?php endif ?>
			<div class="sambungfloat"></div>
			<?php if (count($saraneps)==6): ?>
				<a href="#"><div class="seealleps2 txt-list"><a href="#">Saran lainnya</a></div></a>
			<?php endif ?>
		</div>
	</div>
	<div class="sambungfloat"></div>
</div>