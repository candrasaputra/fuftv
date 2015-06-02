<div class="pop-row hidden-xs hidden-sm">
	<div class="col-md-8 pd-rl">
		<div class="userdetailfilmbox">
			<div class="pop-row">
				<div class="col-md-4 pd-rl">
					<div class="bts-bwh bdr1">
						<img src="<?php echo base_url();?>asset/img/poster/<?php echo $asda->posterfilm; ?>" width="100%">
					</div>
					<div class="detailfim-jdl">Informasi lain :</div>
					<div class="userdetailistmbox">
						<div class="detailfim-dec">
							<div class="media detailusermedia">
								<div class="pull-left dfumleft">Status</div>
								<div class="media-body">
									<div class="detailusermediades"><?php echo $asda->statusfilm; ?></div>
								</div>
							</div>
						</div>
						<div class="detailfim-dec">
							<div class="media detailusermedia">
								<div class="pull-left dfumleft">Episode</div>
								<div class="media-body">
									<div class="detailusermediades"><?php echo $asda->totalepsfilm; ?></div>
								</div>
							</div>
						</div>
						<div class="detailfim-dec">
							<div class="media detailusermedia">
								<div class="pull-left dfumleft">Durasi</div>
								<div class="media-body">
									<div class="detailusermediades"><?php echo $asda->durasifilm; ?></div>
								</div>
							</div>
						</div>
						<div class="detailfim-dec">
							<div class="media detailusermedia nbb">
								<div class="pull-left dfumleft">Batas Usia</div>
								<div class="media-body">
									<div class="detailusermediades"><?php echo $asda->btsusiafilm; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 pd-rl">
					<h1 class="detaiuserfilmttl">"<?php echo $asda->jdlfilm; ?>"</h1>
					<div class="media-box">
						<div class="kiri">
							<div class="detailfim-jdl">Informasi :</div>
						</div>
						<div class="kanan">
							<div class="countviewerbox">
								<div class="countviewerkiri">Menonton ini -</div>
								<div class="countviewerkanan">
									<?php echo $jmlmenontonini ?>
								</div>
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
									<div class="detailusermediades"><?php echo $asda->typefilm; ?></div>
								</div>
							</div>
						</div>
						<div class="detailfim-dec">
							<div class="media detailusermedia">
								<div class="pull-left dfumleft">Kategori</div>
								<div class="media-body">
									<div class="detailusermediades"><a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $asda->idkategori ?>" class="txt-list"><b><?php echo $asda->jdlkategori; ?></b></a></div>
								</div>
							</div>
						</div>
						<div class="detailfim-dec">
							<div class="media detailusermedia">
								<div class="pull-left dfumleft">Genre</div>
								<div class="media-body">
									<div class="detailusermediades">
									<?php 
									$this->db->join('tag','tag.idtag = relasitag.idtag');
									$this->db->where('idfilm', $asda->idfilm);
									$rec_coba = $this->db->get('relasitag')->result_array();
									?>
									<?php foreach($rec_coba as $rec_tag): ?>
										<a href="<?php echo base_url('mainpage_c/tag');?>/<?php echo $rec_tag['tagalias'] ?>" class="txt-list"><b><?php echo $rec_tag['jdltag'].", " ?></b></a>
									<?php endforeach; ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="detailfim-dec">
							<div class="media detailusermedia">
								<div class="pull-left dfumleft">Produser</div>
								<div class="media-body">
									<div class="detailusermediades"><?php echo $asda->productionfilm; ?></div>
								</div>
							</div>
						</div>
						<div class="dfumdeskripsi">Deskripsi :</div>
						<div class="detailusermediades2">
							<?php echo $asda->deskripsifilm; ?>
						</div>
					</div>
					<div class="sambungfloat"></div>
				</div>
				<div class="sambungfloat"></div>
			</div>
		</div>
		<div class="userdetailfilmbox">
			<div class="detailfim-jdl">List Episode</div>
			<?php if (!empty($listepisode)): ?>
				<?php foreach ($listepisode as $le): ?>
					<div class="col-xs-12 pd-rl">
						<div class="media udfpublishermedia">
							<div class="pull-left fuftv-post-img">
								<a href="<?php echo base_url('post/'.$le->alias); ?>"><img class="media-object udflistepsdetfilm" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $le->imgeps; ?>" width="100%" alt="<?php echo $le->jdleps; ?>" title="<?php echo $asda->jdlfilm; ?> <?php echo $le->jdleps; ?> Subtitle Indonesia"></a>
							</div>
							<div class="media-body">
								<div class="kiri">
									<a href="<?php echo base_url('post/'.$le->alias); ?>"><h4 class="media-heading post-tags txt-list" title="<?php echo $asda->jdlfilm; ?> <?php echo $le->jdleps; ?> Subtitle Indonesia"><?php echo $asda->jdlfilm; ?> <?php echo $le->jdleps; ?> Subtitle Indonesia</h4></a>
									<div class="fuftv-post-dec pd-rl kiri">Oleh : RobotAdminFufTv</div>
									<div class="post-dec pd-rl kiri">
										<div class="fuftv-post-dec"><?php echo $le->epsview ;?>x tayang <?php echo $this->timeago->time_ago("$le->timeepisode")?></div>
										<div class="sambungfloat"></div>
									</div>
									<div class="sambungfloat"></div>
								</div>
								<a href="<?php echo base_url('post/'.$le->alias); ?>"><div class="wachnowiconbox"><i class="fa fa-play"></i></div></a>
							</div>
						</div>
					</div>
					<div class="sambungfloat"></div>
				<?php endforeach ?>
			<?php else: ?>
				<div class="alert alert-danger tengah non-lbl bts-ats"><b><i>Tidak Ada Episode!!</i></b></div>
			<?php endif ?>
		</div>
	</div>
	<div class="col-md-4 pd-rl">
		<div class="userdetailfilmbox">
			<div class="udfpublisherbox">
				<?php 
				$this->db->where('iduser', $asda->iduser);
				$rec_coba = $this->db->get('user')->result_array();
				?>
				<?php foreach ($rec_coba as $user): ?>
				<div class="media udfpublishermedia">
					<div class="pull-left">
						<img class="media-object udfpublisherimg" src="<?php echo base_url('asset/img/userimage/'.$user['imguser']); ?>" width="100%">
					</div>
					<div class="media-body">
						<div class="udfpublishermediabox"><i class="fa fa-puzzle-piece"></i> Publisher</div>
						<h4 class="media-heading udfpmttl "><?php echo $user['username'] ?></h4>
						<div class="udfpmdes">Diupload : <?php echo $this->timeago->time_ago("$asda->timefilm")?></div>
						<div class="udfpmdes">Disukai : 34</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="userdetailfilmbox">
			<div class="othersamefilmbox">
				<div class="post-tags">Film yang serupa.</div>
				<div class="bts-ats">
					<!--list sarang start-->
					<?php foreach ($serupa as $serupa): ?>
						<div class="media udfpublishermedia">
							<div class="pull-left">
								<a href="<?php echo base_url('film/'.$serupa->alias); ?>"><img class="media-object udfpublisherimg" src="<?php echo base_url();?>asset/img/poster/<?php echo $serupa->posterfilm; ?>" width="100%" title="<?php echo $serupa->jdlfilm; ?>" alt="<?php echo $serupa->jdlfilm; ?>"></a>
							</div>
							<div class="media-body">
								<div class="box">
									<div class="countsaranfilm bts-bwh">
									<?php $hah = $this->main_m->get_menontonini($serupa->idfilm); ?>
										<?php if (!empty($hah)): ?>
											<?php echo $this->main_m->get_menontonini($serupa->idfilm) ?>
										<?php else: ?>
											<?php echo "0" ?>
										<?php endif ?>
									 - Menonton ini.</div>
									<div class="sambungfloat"></div>
								</div>
								<a href="<?php echo base_url('film/'.$serupa->alias); ?>"><h4 class="media-heading post-tags "><?php echo $serupa->jdlfilm; ?></h4></a>
								<div class="fz12 pd-rl">
									<?php $deskripsi = $serupa->deskripsifilm; echo character_limiter($deskripsi, 172);?>
								</div>
							</div>
						</div>
					<?php endforeach ?>
					<?php if (count($postertop)==6): ?>
						<a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $asda->idkategori; ?>"><div class="seealleps2 txt-list">Lihat lainnya</div></a>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
	<div class="sambungfloat"></div>
</div>
<div class="visible-sm">
	<div class="mainbox">
		<div class="col-sm-4 pd-rl">
			<div class="bts-bwh bdr1">
				<img src="<?php echo base_url();?>asset/img/poster/<?php echo $asda->posterfilm; ?>" width="100%">
			</div>
			<div class="detailfim-jdl">Informasi lain :</div>
			<div class="userdetailistmbox">
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Status</div>
						<div class="media-body">
							<div class="detailusermediades"><?php echo $asda->statusfilm; ?></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Episode</div>
						<div class="media-body">
							<div class="detailusermediades"><?php echo $asda->totalepsfilm; ?></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Durasi</div>
						<div class="media-body">
							<div class="detailusermediades"><?php echo $asda->durasifilm; ?></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia nbb">
						<div class="pull-left dfumleft">Batas Usia</div>
						<div class="media-body">
							<div class="detailusermediades"><?php echo $asda->btsusiafilm; ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-8 pd-rl">
			<h1 class="detaiuserfilmttl">"<?php echo $asda->jdlfilm; ?>"</h1>
			<div class="media-box">
				<div class="kiri">
					<div class="detailfim-jdl">Informasi :</div>
				</div>
				<div class="kanan">
					<div class="countviewerbox">
						<div class="countviewerkiri">Menonton ini -</div>
						<div class="countviewerkanan">
						<?php $mini = $this->main_m->get_menontonini($asda->idfilm); ?>
							<?php if (!empty($mini)): ?>
								<?php echo $this->main_m->get_menontonini($asda->idfilm) ?>
							<?php else: ?>
								<?php echo "0" ?>
							<?php endif ?>
						</div>
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
							<div class="detailusermediades"><?php echo $asda->typefilm; ?></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Kategori</div>
						<div class="media-body">
							<div class="detailusermediades"><a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $asda->idkategori ?>" class="txt-list"><b><?php echo $asda->jdlkategori; ?></b></a></div>
						</div>
					</div>
				</div>
				<div class="detailfim-dec">
					<div class="media detailusermedia">
						<div class="pull-left dfumleft">Genre</div>
						<div class="media-body">
							<div class="detailusermediades">
								<?php 
									$this->db->join('tag','tag.idtag = relasitag.idtag');
									$this->db->where('idfilm', $asda->idfilm);
									$rec_coba = $this->db->get('relasitag')->result_array();
									?>
									<?php foreach($rec_coba as $rec_tag): ?>
										<a href="#" class="txt-list"><b><?php echo $rec_tag['jdltag'].", " ?></b></a>
									<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="detailfim-dec">
							<div class="media detailusermedia">
								<div class="pull-left dfumleft">Produser</div>
								<div class="media-body">
									<div class="detailusermediades"><?php echo $asda->productionfilm; ?></div>
								</div>
							</div>
						</div>
						<div class="dfumdeskripsi">Deskripsi :</div>
						<div class="detailusermediades2">
							<?php echo $asda->deskripsifilm; ?>
						</div>
					</div>
					<div class="sambungfloat"></div>
				</div>
				<div class="sambungfloat"></div>
	</div>
</div>
<div class="visible-xs">
	<div class="mainbox">
		<h1 class="detaiuserfilmttl tengah fs-30">"<?php echo $asda->jdlfilm; ?>"</h1>
		<div class="bts-bwh bdr1">
			<img src="<?php echo base_url();?>asset/img/poster/<?php echo $asda->posterfilm; ?>" width="100%">
		</div>
		<div class="userdetailistmbox">
			<div class="detailfim-dec">
				<div class="media detailusermedia">
					<div class="pull-left dfumleft">Penonton</div>
					<div class="media-body">
						<div class="detailusermediades">
						<?php $mini2 = $this->main_m->get_menontonini($asda->idfilm); ?>
							<?php if (!empty($mini2)): ?>
								<?php echo $this->main_m->get_menontonini($asda->idfilm) ?>
							<?php else: ?>
								<?php echo "0" ?>
							<?php endif ?>
						 - Menonton ini.</div>
					</div>
				</div>
			</div>
			<div class="detailfim-dec">
				<div class="media detailusermedia">
					<div class="pull-left dfumleft">Type</div>
					<div class="media-body">
						<div class="detailusermediades"><?php echo $asda->typefilm; ?></div>
					</div>
				</div>
			</div>
			<div class="detailfim-dec">
				<div class="media detailusermedia">
					<div class="pull-left dfumleft">Kategori</div>
					<div class="media-body">
						<div class="detailusermediades"><a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $asda->idkategori ?>" class="txt-list"><b><?php echo $asda->jdlkategori; ?></b></a></div>
					</div>
				</div>
			</div>
			<div class="detailfim-dec">
				<div class="media detailusermedia">
					<div class="pull-left dfumleft">Genre</div>
					<div class="media-body">
						<div class="detailusermediades">
							<?php 
							$this->db->join('tag','tag.idtag = relasitag.idtag');
							$this->db->where('idfilm', $asda->idfilm);
							$rec_coba = $this->db->get('relasitag')->result_array();
							?>
							<?php foreach($rec_coba as $rec_tag): ?>
								<a href="#" class="txt-list"><b><?php echo $rec_tag['jdltag'].", " ?></b></a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="detailfim-dec">
				<div class="media detailusermedia">
					<div class="pull-left dfumleft">Produser</div>
					<div class="media-body">
						<div class="detailusermediades"><?php echo $asda->productionfilm; ?></div>
					</div>
				</div>
			</div>
			<div class="detailfim-dec">
				<div class="media detailusermedia">
					<div class="pull-left dfumleft">Status</div>
					<div class="media-body">
						<div class="detailusermediades"><?php echo $asda->statusfilm; ?></div>
					</div>
				</div>
			</div>
			<div class="detailfim-dec">
				<div class="media detailusermedia">
					<div class="pull-left dfumleft">Episode</div>
					<div class="media-body">
						<div class="detailusermediades"><?php echo $asda->totalepsfilm; ?></div>
					</div>
				</div>
			</div>
			<div class="detailfim-dec">
				<div class="media detailusermedia">
					<div class="pull-left dfumleft">Durasi</div>
					<div class="media-body">
						<div class="detailusermediades"><?php echo $asda->durasifilm; ?></div>
					</div>
				</div>
			</div>
			<div class="detailfim-dec">
				<div class="media detailusermedia">
					<div class="pull-left dfumleft">Batas Usia</div>
					<div class="media-body">
						<div class="detailusermediades"><?php echo $asda->btsusiafilm; ?></div>
					</div>
				</div>
			</div>
			<div class="dfumdeskripsi">Deskripsi :</div>
			<div class="detailusermediades2">
				<?php echo $asda->deskripsifilm; ?>
			</div>
		</div>
	</div>
</div>
<div class="visible-sm visible-xs">
	<div class="userdetailfilmbox">
		<div class="detailfim-jdl bts-bwh">List Episode</div>
		<!--list episode-->
		<?php if (!empty($listepisode)): ?>
				<?php foreach ($listepisode as $le): ?>
					<div class="col-xs-12 pd-rl">
						<div class="media udfpublishermedia">
							<div class="pull-left fuftv-post-img">
								<a href="<?php echo base_url('post/'.$le->alias); ?>"><img class="media-object udflistepsdetfilm" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $le->imgeps; ?>" width="100%" alt="<?php echo $le->jdleps; ?>" title="<?php echo $asda->jdlfilm; ?> <?php echo $le->jdleps; ?> Subtitle Indonesia"></a>
							</div>
							<div class="media-body">
								<a href="<?php echo base_url('post/'.$le->alias); ?>"><h4 class="media-heading post-tags txt-list" title="<?php echo $asda->jdlfilm; ?> <?php echo $le->jdleps; ?> Subtitle Indonesia"><?php echo $asda->jdlfilm; ?> <?php echo $le->jdleps; ?> Subtitle Indonesia</h4></a>
								<div class="fuftv-post-dec pd-rl kiri">Oleh : RobotAdminFufTv</div>
								<div class="post-dec pd-rl kiri">
									<div class="fuftv-post-dec"><?php echo $le->epsview ;?>x tayang <?php echo $this->timeago->time_ago("$le->timeepisode")?></div>
									<div class="sambungfloat"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="sambungfloat"></div>
				<?php endforeach ?>
			<?php else: ?>
				<div class="alert alert-danger tengah non-lbl bts-ats"><b><i>Tidak Ada Episode!!</i></b></div>
			<?php endif ?>
		<!--list episode-->
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fuftooltip').tooltip();
	});
</script>