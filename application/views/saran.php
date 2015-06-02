<div class="pop-row">
	<div class="col-md-12 pd-rl">
		<div class="mainbox">
			<div class="bdr-btm bts-bwh">
				<h1 style="margin-top:0px;">"<?php echo $title; ?>"</h1>
			</div>
			<?php if (!empty($allsaran)): ?>
				<?php foreach ($allsaran as $reqeps ): ?>
					<div class="hidden-sm hidden-xs">
						<div class="col-md-2 col-sm-4 col-xs-12 pd-rl2 hiddeks3">
							<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>"><div class="fuftv-post-img">
								<img src="<?php echo base_url()?>asset/img/epsimage/<?php echo $reqeps->imgeps; ?>" alt="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?>" title="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia" width="100%">
								<div class="fuftv-post-lks"><?php echo $reqeps->epsview ;?> <i class="fa fa-eye"></i></div>
							</div></a>
							<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>"><div class="fuftv-post-ttl" title="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia">
								<?php $jdlfilm = $reqeps->jdlfilm; echo character_limiter($jdlfilm, 12);?> <?php $jdleps = $reqeps->jdleps; $subs = "Subtitle Indonesia"; $spc = " "; echo character_limiter($jdleps.$spc.$subs, 29);?>
							</div></a>
							<div class="fuftv-post-dec">oleh 
								<?php 
								$this->db->where('iduser', $reqeps->iduser);
								$rec_coba = $this->db->get('user')->result_array();
								?>
								<?php foreach ($rec_coba as $user): ?>
									<?php echo $user['username'] ?>
								<?php endforeach ?>
							</div>
							<div class="post-dec">
								<div class="fuftv-post-dec">tayang dari<?php echo $this->timeago->time_ago("$reqeps->timeepisode")?></div>
							</div>
						</div>
					</div>
					<div class="visible-sm">
						<div class="col-md-2 col-sm-4 col-xs-12 pd-rl2 hiddeks4">
							<a href="<<?php echo base_url('post/'.$reqeps->epsalias); ?>"><div class="fuftv-post-img">
								<img src="<?php echo base_url()?>asset/img/epsimage/<?php echo $reqeps->imgeps; ?>" alt="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?>" title="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia" width="100%">
								<div class="fuftv-post-lks"><?php echo $reqeps->epsview ;?> <i class="fa fa-eye"></i></div>
							</div></a>
							<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>"><div class="fuftv-post-ttl2" title="<?php echo $reqeps->jdlfilm ;?> <?php echo $reqeps->jdleps ;?> Subtitle Indonesia">
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
								<div class="fuftv-post-dec">tayang dari <?php echo $this->timeago->time_ago("$reqeps->timeepisode")?></div>
							</div>
						</div>
					</div>
					<div class="visible-xs">
						<div class="col-xs-12 pd-rl">
							<div class="media udfpublishermedia">
								<div class="pull-left fuftv-post-img">
									<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>">
										<img class="media-object udfpublisherimgpost" src="<?php echo base_url()?>asset/img/epsimage/<?php echo $reqeps->imgeps; ?>" width="100%" alt="<?php echo $reqeps->jdleps; ?>" title="<?php echo $reqeps->jdleps; ?>">
										<div class="fuftv-post-lks-xs"><?php echo $reqeps->epsview ;?> <i class="fa fa-eye"></i></div>
									</a>
								</div>
								<div class="media-body">
									<a href="<?php echo base_url('post/'.$reqeps->epsalias); ?>"><h4 class="media-heading post-tags txt-hitam" title="<?php echo $reqeps->jdleps; ?>"><?php echo $reqeps->jdlfilm; ?> <?php echo $reqeps->jdleps; ?></h4></a>
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
										<div class="fuftv-post-dec">tayang dari<?php echo $this->timeago->time_ago("$reqeps->timeepisode")?></div>
										<div class="sambungfloat"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			<div class="sambungfloat"></div>
			<?php else: ?>
				<div class="alert alert-danger tengah marb bts-ats"><b><i>Tidak Ada Saran</i></b></div>
			<?php endif ?>
		</div>
	</div>
	<div class="sambungfloat"></div>
</div>
<center>
	<nav><ul class="pagination pagination-lg"><p><?php echo $links; ?></p></ul></nav>
</center>