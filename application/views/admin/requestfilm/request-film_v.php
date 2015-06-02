<?php 
date_default_timezone_set("Asia/Jakarta");
 ?>

<h2 class="pd-rl"><?php echo $title; ?></h2>
<?php $reqf = $this->rf->get_reqfilm(); ?>
<?php if (!empty($reqf)) {?>
	 
	<?php foreach($reqfilm as $n):?>
	<div class="req-box">
		<div class="kiri"><a href="requestfilm/delete/<?php echo "$n->idreqfilm"?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span></a href="requestfilm/delete"><?php echo "&nbsp;&nbsp;$n->isireqfilm"?></div>
		<div class="kanan"><i><?php echo $this->timeago->time_ago("$n->timereqfilm")?></i></div>
		<div class="sambungfloat"></div>
	</div>
	<?php endforeach?>
<?php }else{?>
	<div class="alert alert-danger tengah marb bts-ats"><b><i>Tidak Ada Request Film Yang Tersedia!!</i></b></div>
<?php } ?>