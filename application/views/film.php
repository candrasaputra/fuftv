<div class="pop-row">
	<div class="col-md-8 pd-rl">
		<div class="mainbox">
			<h1 class="bdr-btm bts-bwh" style="margin-top:0px; padding-bottom:7px;">"<?php echo $title; ?>"</h1>
			<?php foreach ($daftar as $sdf ): ?>
			<div class="col-md-12 col-sm-12 col-xs-12 pd-rl">
				<div class="media udfpublishermedia">
					<div class="pull-left fuftv-post-img">
						<a href="<?php echo site_url('film/'.$sdf->alias); ?>"><img class="media-object udfpublisherimg" src="<?php echo base_url()?>asset/img/poster/<?php echo $sdf->posterfilm; ?>" width="100%" alt="<?php echo $sdf->jdlfilm; ?>" title="<?php echo $sdf->jdlfilm; ?>"></a>
						<a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $sdf->idkategori ?>"><div class="altlinksteamttl4"><?php echo $sdf->jdlkategori; ?></div></a>
					</div>
					<div class="media-body">
						<div class="box">
							<div class="countsaranfilm">
							<?php $mini = $this->main_m->get_menontonini($sdf->idfilm) ?>
							<?php if (!empty($mini)): ?>
								<?php echo $this->main_m->get_menontonini($sdf->idfilm) ?>
							<?php else: ?>
								<?php echo "0" ?>
							<?php endif ?>
							- Menonton ini.</div>
							<div class="sambungfloat"></div>
						</div>
						<a href="<?php echo site_url('film/'.$sdf->alias); ?>"><h4 class="media-heading post-tags fs-14" title="<?php echo $sdf->jdlfilm; ?>"><?php echo $sdf->jdlfilm; ?></h4></a>
						<div class="mediaisikoment pd-rl">Status : <?php echo $sdf->statusfilm; ?>,</div>
						<div class="mediaisikoment pd-rl">Ditayangkan : <?php echo $sdf->airedfilm; ?>,</div>
						<div class="mediaisikoment pd-rl showtitle"> Tag : 
							<?php 
								$this->db->join('tag','tag.idtag = relasitag.idtag');
								$this->db->where('idfilm', $sdf->idfilm);
								$rec_coba = $this->db->get('relasitag')->result_array();
							?>
							<?php foreach ($rec_coba as $tag): ?>
								<a href="<?php echo base_url(); ?>mainpage_c/tag/<?php echo $tag['tagalias'] ?>" title="<?php echo $tag['jdltag'] ?>"><b><?php echo $tag['jdltag'].", " ?></b></a>
							<?php endforeach ?>
						</div>
						<div class="mediaisikoment hiddeks2 pd-rl">
							<?php $limitdess = $sdf->deskripsifilm; echo character_limiter($limitdess, 220);?>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach ?>
			<div class="sambungfloat"></div>
		</div>
		<nav><ul class="pagination pagination-sm"><p><?php echo $links; ?></p></ul></nav>
	</div>
	<div class="col-md-4 pd-rl">
		<div class="mainbox">
			<div class="post-tags" style="margin-top:0px;"><i class="fa fa-coffee"></i> DISARANKAN</div>
			<div class="hidden-xs hidden-sm"><!--tampilan besar START-->
				<?php if (!empty($disarankan)): ?>
					<?php foreach ($disarankan as $lainnya ): ?>
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
					<div class="alert alert-danger tengah marb bts-ats"><b><i>Tidak Ada Episode Yang Tersedia!!</i></b></div>
				<?php endif ?>
			</div><!--tampilan besar END-->
			<div class="visible-xs visible-sm">
				<?php if (!empty($disarankan)): ?>
					<?php foreach ($disarankan as $reqeps ): ?>
						<div class="col-xs-12 pd-rl">
						<div class="media udfpublishermedia">
							<div class="pull-left fuftv-post-img">
								<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>">
									<img class="media-object udfpublisherimgxs" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $reqeps->imgeps; ?>" width="100%" alt="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia" title="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia">
									<div class="fuftv-post-lks-xs"><?php echo $reqeps->epsview ;?> <i class="fa fa-eye"></i></div>
								</a>
							</div>
							<div class="media-body">
								<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>"><h4 class="media-heading post-tags txt-biru fs-14" title="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia"><?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia</h4></a>
								<div class="fuftv-post-dec pd-rl">Oleh : 
									<?php 
									$this->db->where('iduser', $reqeps->iduser);
									$rec_coba = $this->db->get('user')->result_array();
									?>
									<?php foreach ($rec_coba as $user): ?>
										<?php echo $user['username'] ?>
									<?php endforeach ?>
								</div>
								<div class="post-dec pd-rl">
									<div class="fuftv-post-dec">tayang sejak <?php echo $this->timeago->time_ago("$reqeps->timeepisode")?></div>
									<div class="sambungfloat"></div>
								</div>
								<div class="fuftv-post-dec pd-rl showtitle hiddeks"><?php $desflm = $reqeps->deskripsifilm; echo character_limiter($desflm, 250);?></div>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				<?php else: ?>
					<div class="alert alert-danger tengah marb bts-ats"><b><i>Tidak Ada Episode Yang Tersedia!!</i></b></div>
				<?php endif ?>
			</div>
			<div class="sambungfloat"></div>
			<?php if (count($disarankan)==6): ?>
				<a href="<?php echo base_url(); ?>disarankan"><div class="seealleps2 txt-list">Saran lainnya</div></a>
			<?php endif ?>
		</div>
	</div>
	<div class="sambungfloat"></div>
</div>