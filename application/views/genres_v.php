<form method="POST" action="<?php echo site_url('mainpage_c/genres'); ?>">

<div class="pop-row">
	<div class="col-md-8 pd-rl">
		<div class="mainbox">
			<h1 class="bdr-btm bts-bwh" style="margin-top:0px; padding-bottom:7px;">"<?php echo $title; ?>"</h1>
			<?php foreach ($tag as $n): ?>
				<div class="col-md-3 col-sm-6 col-xs-6 pd-rl">
					<div class="box-select3" for="cek">
						<div class="box-select-btn3"><input type="checkbox" id="<?php echo $n->idtag; ?>" name="idtag[]" value="<?php echo $n->idtag; ?>" /></div>
						<div class="box-select-ttl3"><label class="non-lbl"><label class="non-lbl" for="<?php echo $n->idtag; ?>"><b><?php echo $n->jdltag; ?></b></label></label></div>
						<div class="box-select-count3"><?php echo $this->main_m->count_tag($n->idtag); ?></div>
						<div class="sambungfloat"></div>
					</div>
				</div>
			<?php endforeach ?>
			<div class="sambungfloat"></div>
			<div class="pd-rl">
				<button name="filter" class="btn btn-lg btn-danger filterbtn"><b>filter</b></button>
			</div>
		</div>
		<div class="mainbox">
			<?php if (isset($_POST['filter'])): ?>
			<?php if (!empty($filter_tag)): ?>		
				<?php foreach ($filter_tag as $key): ?>
					<?php
					$selecku[$key->alias]['jdlfilm'] = $key->jdlfilm;
					$selecku[$key->alias]['statusfilm'] = $key->statusfilm;
					$selecku[$key->alias]['idfilm'] = $key->idfilm;
					$selecku[$key->alias]['posterfilm'] = $key->posterfilm;
					$selecku[$key->alias]['airedfilm'] = $key->airedfilm;
					$selecku[$key->alias]['deskripsifilm'] = $key->deskripsifilm;
					?>
				<?php endforeach ?>
				<?php foreach ($selecku as $key=>$value): ?>
				<div class="col-md-12 col-sm-12 col-xs-12 pd-rl">
					<div class="media udfpublishermedia">
						<div class="pull-left fuftv-post-img">
							<a href="<?php echo site_url('film/'.$key); ?>"><img class="media-object udfpublisherimg" src="<?php echo base_url()?>asset/img/poster/<?php echo $value['posterfilm']; ?>" width="100%" alt="<?php echo $value['jdlfilm']; ?>" title="<?php echo $value['jdlfilm']; ?>"></a>
						</div>
						<div class="media-body">
							<div class="box">
								<div class="countsaranfilm">
								<?php $mini = $this->main_m->get_menontonini($value['idfilm']); ?>
								<?php if (!empty($mini)): ?>
									<?php echo $this->main_m->get_menontonini($value['idfilm']) ?>
								<?php else: ?>
									<?php echo "0" ?>
								<?php endif ?>
								- Menonton ini.</div>
								<div class="sambungfloat"></div>
							</div>
							<a href="<?php echo site_url('film/'.$key); ?>"><h4 class="media-heading post-tags fs-14" title="<?php echo $value['jdlfilm']; ?>"><?php echo $value['jdlfilm']; ?></h4></a>
							<div class="mediaisikoment pd-rl">Status : <?php echo $value['statusfilm']; ?>,</div>
							<div class="mediaisikoment pd-rl">Ditayangkan : <?php echo $value['airedfilm']; ?>,</div>
							<div class="mediaisikoment pd-rl showtitle"> Tag : 
								<?php 
									$this->db->join('tag','tag.idtag = relasitag.idtag');
									$this->db->where('idfilm', $value['idfilm']);
									$rec_coba = $this->db->get('relasitag')->result_array();
								?>
								<?php foreach ($rec_coba as $tag): ?>
									<a href="<?php echo base_url(); ?>mainpage_c/tag/<?php echo $tag['tagalias'] ?>" title="<?php echo $tag['jdltag'] ?>"><b><?php echo $tag['jdltag'].", " ?></b></a>
								<?php endforeach ?>
							</div>
							<div class="mediaisikoment hiddeks2 pd-rl">
								<?php $limitdess = $value['deskripsifilm']; echo character_limiter($limitdess, 220);?>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			<?php else: ?>
				<div class="alert alert-danger tengah marb bts-ats"><b><i>Tidak Ada Film Pada Genre Yang di Pilih!!</i></b></div>
			<?php endif ?>
				<?php else: ?>
					<div class="pd-rl">
						<div class="alert alert-info tengah" style="margin-bottom:0px;"><b>Klik filter untuk melihat hasil.</b></div>
					</div>
			<?php endif ?>
		<div class="sambungfloat"></div>
		</div>
	</div>
	<div class="col-md-4 pd-rl">
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
								<div class="fuftv-post-dec pd-rl">Oleh : RobotAdminFufTv</div>
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
				<a href="<?php echo base_url(); ?>disarankan"><div class="seealleps2 txt-list">Saran lainnya</div></a>
			<?php endif ?>
		</div>
	</div>
	<div class="sambungfloat"></div>
</div>
</form>