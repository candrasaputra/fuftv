<!--facebook script-->
<script type="text/javascript">
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '622776271191787',
			xfbml      : true,
			version    : 'v2.3'
		});
	};
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.3&appId=622776271191787";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));		
</script>
<div class="pop-row">
	<div class="col-md-8 pd-rl">
		<!-- <div class="steamlink">
			<img src="<?php echo base_url()?>asset/img/epsimage/<?php echo @$getpost->imgeps; ?>" alt="gambar" title="gambar" width="100%">
		</div> -->
		<a name="up"></a>
		<?php foreach ($linkstreaming as $k=>$ls): ?>
			<div class="steamlink streaming<?php echo $k; ?> <?php echo ($k == 0) ? 'show' : 'hide'; ?>">
				<?php echo $ls->codelinkstreaming ?>
				<!-- <div class="sambungfloat"></div> -->
			</div>
		<?php endforeach ?>
		<div class="toolslinksteam">
			<div class="pd-rl">
				<h1 class="titlepost"><?php echo @$getpost->jdlfilm; ?> <?php echo @$getpost->jdleps;?> Subtitle Indonesia</h1>
				<div class="desttlpostbox">
					<div class="pop-row">
						<a href="<?php echo base_url(); ?>mainpage_c/daftarfilmbykategori/<?php echo $getpost->idkategori; ?>"><div class="desttlpost bg-merah txt-putih kiri bdr-merah"><?php echo @$getkategori->jdlkategori; ?></div></a>
						<?php 
						$this->db->join('tag','tag.idtag = relasitag.idtag');
						$this->db->where('idfilm', $getpost->idfilm);
						$rec_coba = $this->db->get('relasitag')->result_array();
						?>
						<?php if (!empty($rec_coba)): ?>
							<?php foreach($rec_coba as $rec_tag): ?>
								<a href="<?php echo base_url(); ?>mainpage_c/tag/<?php echo $rec_tag['tagalias'] ?>"><div class="desttlpost txt-list kiri"><?php echo $rec_tag['jdltag'] ?></div></a>
							<?php endforeach; ?>
						<?php else: ?>
							<div class="desttlpost txt-list kiri">Tidak ada tag</div>
						<?php endif ?>
						<div class="desttlpost kanan"><?php echo $cc ;?> - Menonton ini.</div>
						<div class="sambungfloat"></div>
					</div>
				</div>
				<div class="pop-row">
					<div class="sharelinksteam">
						<div class="kiri">
							<div class="desttlpost kiri">Oleh : 
								<?php 
								$this->db->where('iduser', $getpost->iduser);
								$rec_coba = $this->db->get('user')->result_array();
								?>
								<?php foreach ($rec_coba as $user): ?>
									<?php echo $user['username'] ?>
								<?php endforeach ?>
							</div>
							<div class="desttlpost kiri"><?php echo $this->timeago->time_ago("$getpost->timeepisode")?></div>
							<div class="sambungfloat"></div>
						</div>
						<div class="kanan">
							<div class="desttlpost kanan txt-list"><i class="fa fa-thumbs-o-down"></i> Tidak suka</div>
							<div class="desttlpost kanan txt-hijau"><i class="fa fa-thumbs-o-up"></i> Suka</div>
							<div class="sambungfloat"></div>
						</div>
						<div class="sambungfloat"></div>
					</div>
					<div class="sambungfloat"></div>
				</div>
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="toolslinksteam">
			<div class="dessteamttl"><i class="fa fa-video-camera"></i> GUNAKAN LINK DIBAWAH INI JIKA VIDEO UTAMA MENGALAMI KERUSAKAN</div>
			<div class="pop-row">
				<?php foreach ($linkstreaming as $k=>$ls): ?>
					<a onclick="javascript:chooseStream(<?php echo $k; ?>)" href="#up">
						<div class="col-md-3 col-sm-3 col-xs-6 altlinksteam pd-rl">
							<div class="altlinksteamimg">
								<img src="<?php echo base_url()?>asset/img/epsimage/<?php echo $getpost->imgeps; ?>" alt="<?php echo $getpost->jdlfilm; ?> <?php echo $getpost->jdleps;?> Subtitle Indonesia" title="<?php echo $getpost->jdlfilm; ?> <?php echo $getpost->jdleps;?> Subtitle Indonesia" width="100%">
								<div class="altlinksteamttl"><?php echo $ls->jdllinkstreaming; ?></div>
							</div>
						</div>
					</a>
				<?php endforeach ?>
				<div class="sambungfloat"></div>
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="toolslinksteam">
			<div class="dessteamttl"><i class="fa fa-info-circle"></i> DESKRIPSI</div>
			<div class="dessteamdes">
				<?php echo @$getpost->deseps; ?><br/><br/>
				<?php echo @$getpost->deskripsifilm; ?>
			</div>
		</div>
		<div class="toolslinksteam">
			<div class="dessteamttl"><i class="fa fa-download"></i>  LINK DOWNLOAD</div>
			<div class="dessteamdes">
				<div class="dessteamttl">480px</div>
				<?php foreach ($linkdownload as $ld): ?>
					<?php if ($ld->quality == "480"): ?>
						<a href="<?php echo $ld->codelinkdownload; ?>" target="_blank" class="btn btn-default linkshared kiri" title="<?php echo $ld->jdllinkdownload; ?>"><?php echo $ld->jdllinkdownload; ?></a>
					<?php endif ?>
				<?php endforeach ?>
				<div class="sambungfloat"></div>

				<div class="dessteamttl">720px</div>
				<?php foreach ($linkdownload as $ld): ?>
					<?php if ($ld->quality == "720"): ?>
						<a href="<?php echo $ld->codelinkdownload; ?>" target="_blank" class="btn btn-default linkshared kiri" title="<?php echo $ld->jdllinkdownload; ?>"><?php echo $ld->jdllinkdownload; ?></a>
					<?php endif ?>
				<?php endforeach ?>
				<div class="sambungfloat"></div>

				<div class="dessteamttl">1080px</div>
				<?php foreach ($linkdownload as $ld): ?>
					<?php if ($ld->quality == "1080"): ?>
						<a href="<?php echo $ld->codelinkdownload; ?>" target="_blank" class="btn btn-default linkshared kiri" title="<?php echo $ld->jdllinkdownload; ?>"><?php echo $ld->jdllinkdownload; ?></a>
					<?php endif ?>
				<?php endforeach ?>
				<div class="sambungfloat"></div>
			</div>

			<div class="sambungfloat"></div>
		</div>
		<div class="toolslinksteam">
			<!--<div class="dessteamttl"><i class="fa fa-comments-o"></i> KOMENTAR</div>
			<div class="alert alert-danger tengah marb bts-ats"><b><i>Tidak ada komentar</i></b></div>
			comment start
			<div class="media">
				<div class="media-left media-top">
					<a href="#"><img class="media-object" src="<?php //echo base_url('asset/img/userimage/usr4.png'); ?>" alt="Profil"></a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">RobotFufTV</h4>
					<div class="mediaisikoment">Mantap gan</div>
				</div>
			</div>-->
			<div class="fb-comments" data-href="<?php echo base_url('post/'.$getpost->epsalias); ?>" data-width="100%" data-numposts="5" data-colorscheme="light" data-version="v2.3" style="width:100%"></div>
		</div>
	</div>
	<div class="col-md-4 pd-rl">
		<div class="seealleps txt-list">
			<div class="post-tags bts-bwh">EPISODE LAINNYA</div>
			<!--list post-->
			<?php if (!empty($tontonanlainnya)): ?>
				<?php foreach ($tontonanlainnya as $lainnya ): ?>
					<?php if ($lainnya->alias == $idepisodesaatini): ?>
						<div class="col-xs-12 pd-rl">
							<div class="media udfpublishermedia">
								<div class="pull-left fuftv-post-img">
									<a href="<?php echo base_url('post/'.$lainnya->alias); ?>">
										<img class="media-object udfpublisherimgpost" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $lainnya->imgeps; ?>" width="100%" alt="<?php echo $getkategori->jdlfilm; ?> <?php echo $lainnya->jdleps; ?>" title="<?php echo $getkategori->jdlfilm; ?> <?php echo $lainnya->jdleps; ?>">
										<div class="fuftv-post-lks-xs"><?php echo $lainnya->epsview ;?> <i class="fa fa-eye"></i></div>
									</a>
								</div>
								<div class="media-body">
									<a href="<?php echo base_url('post/'.$lainnya->alias); ?>"><h4 class="media-heading post-tags txt-hitam" title="<?php echo $getkategori->jdlfilm; ?> <?php echo $lainnya->jdleps; ?>"><?php echo $getkategori->jdlfilm; ?> <?php echo $lainnya->jdleps; ?></h4></a>
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
										<div class="fuftv-post-dec">tayang dari <?php echo $this->timeago->time_ago("$lainnya->timeepisode")?></div>
										<div class="sambungfloat"></div>
									</div>
								</div>
							</div>
							<div class="altlinksteamttl5">Sedang di tayangkan.</div>
						</div>
					<?php else: ?>
						<div class="col-xs-12 pd-rl">
							<div class="media udfpublishermedia">
								<div class="pull-left fuftv-post-img">
									<a href="<?php echo base_url('post/'.$lainnya->alias); ?>">
										<img class="media-object udfpublisherimgpost" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $lainnya->imgeps; ?>" width="100%" alt="<?php echo $getkategori->jdlfilm; ?> <?php echo $lainnya->jdleps; ?>" title="<?php echo $getkategori->jdlfilm; ?> <?php echo $lainnya->jdleps; ?>">
										<div class="fuftv-post-lks-xs"><?php echo $lainnya->epsview ;?> <i class="fa fa-eye"></i></div>
									</a>
								</div>
								<div class="media-body">
									<a href="<?php echo base_url('post/'.$lainnya->alias); ?>"><h4 class="media-heading post-tags txt-hitam" title="<?php echo $getkategori->jdlfilm; ?> <?php echo $lainnya->jdleps; ?>"><?php echo $getkategori->jdlfilm; ?> <?php echo $lainnya->jdleps; ?></h4></a>
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
										<div class="fuftv-post-dec">tayang dari <?php echo $this->timeago->time_ago("$lainnya->timeepisode")?></div>
										<div class="sambungfloat"></div>
									</div>
								</div>
							</div>
						</div>
					<?php endif ?>
				<?php endforeach ?>
			<?php else: ?>
				<div class="alert alert-danger tengah marb bts-ats"><b><i>Tidak Ada Episode Lainnya!!</i></b></div>
			<?php endif ?>
			<div class="sambungfloat"></div>
			<div class="seealleps2 txt-buram"><a href="<?php echo site_url('film/'.$getpost->alias); ?>">Selengkapnya</a></div>
		</div>
		<div class="seealleps">
			<div class="post-tags bts-bwh">FILM SERUPA</div>
			<!--list post-->
			<?php foreach ($serupa as $lainnya ): ?>
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
								<div class="fuftv-post-dec">tayang dari<?php echo $this->timeago->time_ago("$lainnya->timeepisode")?></div>
								<div class="sambungfloat"></div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
			<!--list post end-->
			<div class="sambungfloat"></div>
			<?php if (count($disarankan)==6): ?>
				<a href="#"><div class="seealleps2 txt-buram"><a href="#">Serupa Lainnya</a></div></a>
			<?php endif ?>
		</div>
	</div>
	<div class="sambungfloat"></div>
</div>

<script type="text/javascript">
	function chooseStream(id) {
		$('.steamlink').removeClass('show').addClass('hide');
		$('.streaming' + id).removeClass('hide').addClass('show');
	}
</script>