<?php 
date_default_timezone_set("Asia/Jakarta");
 ?>

<div class="pop-row">
	<div class="col-md-8 pd-rl">
		<div class="mainbox">
			<div class="bdr-btm bts-bwh">
				<h1 style="margin-top:0px;">"<?php echo $title; ?>"</h1>
			</div>
			<form action="<?php echo base_url('mainpage_c/reqfilm'); ?>" method="post">
				<div class="posting-jdl pd-rl">
					<div class="post-tags bts-ats">REQUEST FILM</div>
					<textarea class="form-control bts-ats" name="isireqfilm" rows="3" placeholder="Masukan request film" required></textarea>
					
					<button type="submit" class="btn btn-info kanan bts-ats">Request</button>
				</div>
				<div class="sambungfloat"></div>
			</form>
		</div>
		<div class="mainbox">
			<?php foreach ($reqfilmm as $rqf ): ?>
				<div class="req-box">
					<div class="kiri"><?php  echo $rqf->isireqfilm; ?></div>
					<div class="kanan"><i><?php echo $this->timeago->time_ago("$rqf->timereqfilm")?></i></div>
					<div class="sambungfloat"></div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div class="col-md-4 pd-rl">
		<div class="mainbox">
			<div class="fuftvfooterlbl pd-rl">DISARANKAN</div>
			<!--list sarang start-->
			<?php foreach ($disarankan as $saranadmin ): ?>
				<div class="media udfpublishermedia2">
					<div class="pull-left">
						<a href="<?php echo base_url('film/'.$saranadmin->idfilm); ?>"><img class="media-object udfpublisherimg" src="<?php echo base_url()?>asset/img/poster/<?php echo $saranadmin->posterfilm; ?>" title="<?php echo $saranadmin->jdlfilm; ?>" alt="<?php echo $saranadmin->jdlfilm; ?>" width="100%"></a>
					</div>
					<div class="media-body">
						<div class="box">
							<div class="countsaranfilm">1.334 - Menonton ini.</div>
							<div class="sambungfloat"></div>
						</div>
						<h4 class="media-heading post-tags "><a href="<?php echo base_url('film/'.$saranadmin->idfilm); ?>"><?php echo $saranadmin->jdlfilm ; ?></a></h4>
						<div class="fz12 pd-rl">
							<?php $limitdess = $saranadmin->deskripsifilm; echo character_limiter($limitdess, 190);?>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div class="sambungfloat"></div>
</div>