<div class="main-row">
	<div class="fuftvheader pd-rl">
		<div class="post-tags" style="margin-bottom:7px; margin-top:0px;"><i class="fa fa-trophy"></i> FILM DENGAN VIEWER TERBAYAK</div>
		<!--begin-->
		<div class="hidden-xs"> <!--tampilan besar START-->
			<?php foreach ($postertop as $ptsp ): ?>
				<div class="col-md-2 col-sm-2 col-xs-4 pd-rl">
					<div class="altlinksteamimg2 bdr1">
						<a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $ptsp->idkategori ?>"><div class="altlinksteamttl3"><?php echo $ptsp->jdlkategori; ?></div></a>
						<a href="<?php echo site_url('film/'.$ptsp->alias); ?>"><img src="<?php echo base_url();?>asset/img/poster/<?php echo $ptsp->posterfilm; ?>" alt="<?php echo $ptsp->jdlfilm; ?>" title="<?php echo $ptsp->jdlfilm;?>" width="100%"></a>
						<a href="<?php echo base_url('film/'.$ptsp->alias); ?>"><div class="altlinksteamttl2" title="<?php echo $ptsp->jdlfilm; ?>"><?php $limitdess = $ptsp->jdlfilm; echo character_limiter($limitdess, 20);?></div></a>
					</div>
				</div>
			<?php endforeach ?>
		</div><!--tampilan besar END-->
		<div class="visible-xs"><!--tampilan kecil START-->
			<?php foreach ($postertop as $ptsp ): ?>
				<div class="col-xs-12 pd-rl">
					<div class="media udfpublishermedia">
						<div class="pull-left fuftv-post-img">
							<a href="<?php echo site_url('film/'.$ptsp->alias); ?>"><img class="media-object udfpublisherimg" src="<?php echo base_url();?>asset/img/poster/<?php echo $ptsp->posterfilm; ?>" width="100%" alt="<?php echo $ptsp->jdlfilm; ?>" title="<?php echo $ptsp->jdlfilm; ?>"></a>
							<a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $ptsp->idkategori ?>"><div class="altlinksteamttl4"><?php echo $ptsp->jdlkategori; ?></div></a>
						</div>
						<div class="media-body">
							<div class="box">
								<div class="countsaranfilm">
								<?php $hah = $this->main_m->get_menontonini($ptsp->idfilm); ?>
									<?php if (!empty($hah)): ?>
										<?php echo $this->main_m->get_menontonini($ptsp->idfilm) ?>
									<?php else: ?>
										<?php echo "0" ?>
									<?php endif ?> - Menonton ini.</div>
									<div class="sambungfloat"></div>
								</div>
								<a href="<?php echo base_url('film/'.$ptsp->alias); ?>"><h4 class="media-heading post-tags fs-14" title="<?php echo $ptsp->jdlfilm; ?>"><?php echo $ptsp->jdlfilm; ?></h4></a>
								<div class="mediaisikoment pd-rl">Status : <?php echo $ptsp->statusfilm; ?>,</div>
								<div class="mediaisikoment pd-rl">Ditayangkan : <?php echo $ptsp->airedfilm; ?>,</div>
								<div class="mediaisikoment pd-rl showtitle" title="tag">Tag :
									<?php 
									$this->db->join('tag','tag.idtag = relasitag.idtag');
									$this->db->where('idfilm', $ptsp->idfilm);
									$rec_coba = $this->db->get('relasitag')->result_array();
									?>
									<?php foreach ($rec_coba as $tag): ?>
										<b><?php echo $tag['jdltag'].", " ?></b>
									<?php endforeach ?>
								</div>
								<div class="mediaisikoment pd-rl">
									<?php $limitdess = $ptsp->deskripsifilm; echo character_limiter($limitdess, 150);?>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div><!--tampilan kecil END-->
			<!--end-->
			<div class="sambungfloat"></div>
			<div class="seealleps2 txt-list"><a href="<?php echo base_url(); ?>tontonanpopuler">LIHAT LAINNYA</a></div>
		</div>
		<div class="mainbox">
			<div class="col-md-12 paddingnone">
				<div class="post-tags" style="margin-top:0px;"><i class="fa fa-coffee"></i> DISARANKAN</div>
				<?php if (!empty($disarankan)): ?>
					<?php foreach ($disarankan as $reqeps ): ?>
						<div class="hidden-sm hidden-xs">
							<div class="col-md-2 col-sm-4 col-xs-12 pd-rl2 hiddeks3">
								<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>"><div class="fuftv-post-img">
									<img src="<?php echo base_url()?>asset/img/epsimage/<?php echo $reqeps->imgeps; ?>" alt="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?>" title="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia" width="100%">
									<div class="fuftv-post-lks"><?php echo $reqeps->epsview ;?> <i class="fa fa-eye"></i></div>
								</div></a>
								<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>"><div class="fuftv-post-ttl" title="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia">
									<?php $jdlfilm = $reqeps->jdlfilm; echo character_limiter($jdlfilm, 12);?> <?php $jdleps = $reqeps->jdleps; $subs = "Subtitle Indonesia"; $spc = " "; echo character_limiter($jdleps.$spc.$subs, 29);?>
								</div></a>
								<div class="fuftv-post-dec">oleh : 
									<?php 
									$this->db->where('iduser', $reqeps->iduser);
									$rec_coba = $this->db->get('user')->result_array();
									?>
									<?php foreach ($rec_coba as $user): ?>
										<?php echo $user['username'] ?>
									<?php endforeach ?>
								</div>
								<div class="post-dec">
									<div class="fuftv-post-dec">tayang sejak <?php echo $this->timeago->time_ago("$reqeps->timeepisode")?></div>
								</div>
							</div>
						</div>
						<div class="visible-sm">
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
						</div>
						<div class="visible-xs">
							<div class="bts-ats"></div>
							<div class="col-xs-12 pd-rl">
								<div class="media udfpublishermedia">
									<div class="pull-left fuftv-post-img">
										<a href="<?php echo base_url('post/'.$reqeps->alias); ?>">
											<img class="media-object udfpublisherimgpost" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $reqeps->imgeps; ?>" width="100%" alt="<?php echo $reqeps->jdleps; ?>" title="<?php echo $reqeps->jdlfilm; ?> <?php echo $reqeps->jdleps; ?> Subtitle Indonesia">
											<div class="fuftv-post-lks-xs"><?php echo $reqeps->epsview ;?> <i class="fa fa-eye"></i></div>
										</a>
									</div>
									<div class="media-body">
										<a href="<?php echo base_url('post/'.$reqeps->alias); ?>"><h4 class="media-heading post-tags txt-hitam" title="<?php echo $reqeps->jdlfilm; ?> <?php echo $reqeps->jdleps; ?> Subtitle Indonesia"><?php $jdlfilm = $reqeps->jdlfilm; echo character_limiter($jdlfilm, 12);?> <?php $jdleps = $reqeps->jdleps; $subs = "Subtitle Indonesia"; $spc = " "; echo character_limiter($jdleps.$spc.$subs, 29);?></h4></a>
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
											<div class="fuftv-post-dec hiddeks5"><?php $desflm = $reqeps->deskripsifilm; echo character_limiter($desflm, 100);?></div>
											<div class="sambungfloat"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				<?php else: ?>
					<div class="alert alert-danger tengah marb bts-ats"><b><i>Tidak Ada Episode Yang Tersedia!!</i></b></div>
				<?php endif ?>
				<div class="sambungfloat"></div>
			</div>
			<div class="sambungfloat"></div>
			<?php if (count($disarankan)==6): ?>
				<div class="seealleps2 txt-list"><a href="<?php echo base_url(); ?>disarankan">LIHAT LAINNYA</a></div>
			<?php endif ?>
		</div>

		<?php foreach ($kategori as $kat): ?>
			<?php if ($this->main_m->count_film_by_kategori($kat->idkategori) != 0): ?>
				<div class="mainbox">
					<a href="<?php echo base_url(); ?>mainpage_c/kategori/<?php echo $kat->katalias ?>">
						<div class="noncountviewerbox pd-rl">
							<div class="countviewerkiri"><i class="fa fa-tags"></i> <b><?php echo $kat->jdlkategori; ?></b></div>
							<div class="countviewerkanan"><b><?php echo $this->main_m->count_film_by_kategori($kat->idkategori) ?> - film</b></div>
							<div class="boxdeskatmain hidden-xs"><?php $desbox = $kat->deskat; echo word_limiter($desbox, 10);?></div>
							<div class="boxdeskatmain visible-xs"><?php $desbox = $kat->deskat; echo word_limiter($desbox, 6);?></div>
							<div class="sambungfloat"></div>
						</div>
					</a>
					<?php foreach ($kategoriIsi[$kat->idkategori] as $epskat): ?>
						<div class="hidden-sm hidden-xs">
							<div class="col-md-2 col-sm-4 col-xs-12 pd-rl2 hiddeks3">
								<a href="<?php echo base_url('post/'.$epskat->alias); ?>"><div class="fuftv-post-img">
									<img src="<?php echo base_url()?>asset/img/epsimage/<?php echo $epskat->imgeps; ?>" alt="<?php echo $epskat->jdlfilm ;?> <?php echo $epskat->jdleps ;?>" title="<?php echo $epskat->jdlfilm ;?> <?php echo $epskat->jdleps ;?> Subtitle Indonesia" width="100%">
									<div class="fuftv-post-lks"><?php echo $epskat->epsview ;?> <i class="fa fa-eye"></i></div>
								</div></a>
								<a href="<?php echo base_url('post/'.$epskat->alias); ?>"><div class="fuftv-post-ttl" title="<?php echo $epskat->jdlfilm ;?> <?php echo $epskat->jdleps ;?> Subtitle Indonesia">
									<?php $jdlfilm = $epskat->jdlfilm; echo character_limiter($jdlfilm, 12);?> <?php $jdleps = $epskat->jdleps; $subs = "Subtitle Indonesia"; $spc = " "; echo character_limiter($jdleps.$spc.$subs, 29);?>
								</div></a>
								<div class="fuftv-post-dec">oleh : 
									<?php 
									$this->db->where('iduser', $epskat->iduser);
									$rec_coba = $this->db->get('user')->result_array();
									?>
									<?php foreach ($rec_coba as $user): ?>
										<?php echo $user['username'] ?>
									<?php endforeach ?>
								</div>
								<div class="post-dec">
									<div class="fuftv-post-dec">tayang sejak <?php echo $this->timeago->time_ago("$epskat->timeepisode")?></div>
								</div>
							</div>
						</div>
						<div class="visible-sm">
							<div class="bts-bwh"></div>
							<div class="col-xs-12 pd-rl">
								<div class="media udfpublishermedia">
									<div class="pull-left fuftv-post-img">
										<a href="<?php echo base_url('post/'.$epskat->alias); ?>">
											<img class="media-object udfpublisherimgxs" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $epskat->imgeps; ?>" width="100%" alt="<?php echo $epskat->jdlfilm ;?> <?php echo $epskat->jdleps ;?> Subtitle Indonesia" title="<?php echo $epskat->jdlfilm ;?> <?php echo $epskat->jdleps ;?> Subtitle Indonesia">
											<div class="fuftv-post-lks-xs"><?php echo $epskat->epsview ;?> <i class="fa fa-eye"></i></div>
										</a>
									</div>
									<div class="media-body">
										<a href="<?php echo base_url('post/'.$epskat->alias); ?>"><h4 class="media-heading post-tags txt-biru fs-14" title="<?php echo $epskat->jdlfilm ;?> <?php echo $epskat->jdleps ;?> Subtitle Indonesia"><?php echo $epskat->jdlfilm ;?> <?php echo $epskat->jdleps ;?> Subtitle Indonesia</h4></a>
										<div class="fuftv-post-dec pd-rl">Oleh : 
											<?php 
											$this->db->where('iduser', $epskat->iduser);
											$rec_coba = $this->db->get('user')->result_array();
											?>
											<?php foreach ($rec_coba as $user): ?>
												<?php echo $user['username'] ?>
											<?php endforeach ?>
										</div>
										<div class="post-dec pd-rl">
											<div class="fuftv-post-dec">tayang sejak <?php echo $this->timeago->time_ago("$epskat->timeepisode")?></div>
											<div class="sambungfloat"></div>
										</div>
										<div class="fuftv-post-dec pd-rl showtitle hiddeks"><?php $desflm = $epskat->deskripsifilm; echo character_limiter($desflm, 250);?></div>
									</div>
								</div>
							</div>
						</div>
						<div class="visible-xs">
							<div class="bts-ats"></div>
							<div class="col-xs-12 pd-rl">
								<div class="media udfpublishermedia">
									<div class="pull-left fuftv-post-img">
										<a href="<?php echo base_url('post/'.$epskat->alias); ?>">
											<img class="media-object udfpublisherimgpost" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $epskat->imgeps; ?>" width="100%" alt="<?php echo $epskat->jdleps; ?>" title="<?php echo $epskat->jdlfilm; ?> <?php echo $epskat->jdleps; ?> Subtitle Indonesia">
											<div class="fuftv-post-lks-xs"><?php echo $epskat->epsview ;?> <i class="fa fa-eye"></i></div>
										</a>
									</div>
									<div class="media-body">
										<a href="<?php echo base_url('post/'.$epskat->alias); ?>"><h4 class="media-heading post-tags txt-hitam" title="<?php echo $epskat->jdlfilm; ?> <?php echo $epskat->jdleps; ?> Subtitle Indonesia"><?php $jdlfilm = $epskat->jdlfilm; echo character_limiter($jdlfilm, 12);?> <?php $jdleps = $epskat->jdleps; $subs = "Subtitle Indonesia"; $spc = " "; echo character_limiter($jdleps.$spc.$subs, 29);?></h4></a>
										<div class="fuftv-post-dec pd-rl">Oleh : 
											<?php 
											$this->db->where('iduser', $epskat->iduser);
											$rec_coba = $this->db->get('user')->result_array();
											?>
											<?php foreach ($rec_coba as $user): ?>
												<?php echo $user['username'] ?>
											<?php endforeach ?>
										</div>
										<div class="post-dec pd-rl">
											<div class="fuftv-post-dec">tayang sejak <?php echo $this->timeago->time_ago("$epskat->timeepisode")?></div>
											<div class="fuftv-post-dec hiddeks5"><?php $desflm = $epskat->deskripsifilm; echo character_limiter($desflm, 100);?></div>
											<div class="sambungfloat"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
					<div class="sambungfloat"></div>
					<div class="seealleps2 txt-list"><a href="<?php echo base_url(); ?>mainpage_c/kategori/<?php echo $kat->katalias ?>">LIHAT LAINNYA</a></div>
				</div>
			<?php endif ?>

		<?php endforeach ?>

		<div class="main-post">
			<div class="col-md-12 paddingnone">
				<div class="post-tags"><i class="fa fa-pencil-square"></i> UPDATE-AN TERAKHIR</div>
				<?php if (!empty($latsupdate)): ?>
					<!--tampilan besar START-->
					<?php foreach ($latsupdate as $reqeps ): ?>
						<div class="hidden-sm hidden-xs">
							<div class="col-md-2 col-sm-4 col-xs-12 pd-rl2 hiddeks3">
								<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>"><div class="fuftv-post-img">
									<img src="<?php echo base_url()?>asset/img/epsimage/<?php echo $reqeps->imgeps; ?>" alt="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?>" title="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia" width="100%">
									<div class="fuftv-post-lks"><?php echo $reqeps->epsview ;?> <i class="fa fa-eye"></i></div>
								</div></a>
								<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>"><div class="fuftv-post-ttl" title="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia">
									<?php $jdlfilm = $reqeps->jdlfilm; echo character_limiter($jdlfilm, 12);?> <?php $jdleps = $reqeps->jdleps; $subs = "Subtitle Indonesia"; $spc = " "; echo character_limiter($jdleps.$spc.$subs, 29);?>
								</div></a>
								<div class="fuftv-post-dec">oleh : 
									<?php 
									$this->db->where('iduser', $reqeps->iduser);
									$rec_coba = $this->db->get('user')->result_array();
									?>
									<?php foreach ($rec_coba as $user): ?>
										<?php echo $user['username'] ?>
									<?php endforeach ?>
								</div>
								<div class="post-dec">
									<div class="fuftv-post-dec">tayang sejak <?php echo $this->timeago->time_ago("$reqeps->timeepisode")?></div>
								</div>
							</div>
						</div>
						<div class="visible-sm">
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
						</div>
						<div class="visible-xs">
							<div class="bts-ats"></div>
							<div class="col-xs-12 pd-rl">
								<div class="media udfpublishermedia">
									<div class="pull-left fuftv-post-img">
										<a href="<?php echo base_url('post/'.$reqeps->alias); ?>">
											<img class="media-object udfpublisherimgpost" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $reqeps->imgeps; ?>" width="100%" alt="<?php echo $reqeps->jdleps; ?>" title="<?php echo $reqeps->jdlfilm; ?> <?php echo $reqeps->jdleps; ?> Subtitle Indonesia">
											<div class="fuftv-post-lks-xs"><?php echo $reqeps->epsview ;?> <i class="fa fa-eye"></i></div>
										</a>
									</div>
									<div class="media-body">
										<a href="<?php echo base_url('post/'.$reqeps->alias); ?>"><h4 class="media-heading post-tags txt-hitam" title="<?php echo $reqeps->jdlfilm; ?> <?php echo $reqeps->jdleps; ?> Subtitle Indonesia"><?php $jdlfilm = $reqeps->jdlfilm; echo character_limiter($jdlfilm, 12);?> <?php $jdleps = $reqeps->jdleps; $subs = "Subtitle Indonesia"; $spc = " "; echo character_limiter($jdleps.$spc.$subs, 29);?></h4></a>
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
											<div class="fuftv-post-dec hiddeks5"><?php $desflm = $reqeps->deskripsifilm; echo character_limiter($desflm, 100);?></div>
											<div class="sambungfloat"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
					<div class="sambungfloat"></div>
					<div class="seealleps2 txt-list"><a href="<?php echo base_url(); ?>updatetanterakhir/">LIHAT LAINNYA</a></div>
					<!--tampilan besar END-->
				<?php else: ?>
					<div class="alert alert-danger tengah marb bts-ats"><b><i>Tidak Ada Episode Yang Tersedia!!</i></b></div>
				<?php endif ?>
			</div>
			<div class="sambungfloat"></div>
		</div>
	</div>