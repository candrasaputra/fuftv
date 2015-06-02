<div class="media-box">
	<h3 class="pd-rl kiri" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3>
	
	<div class="sambungfloat"></div>
</div>
<hr style="margin-top:11px;" />
<?php if ($this->session->flashdata('message')): ?>
	<div align="center" class="alert alert-success alert-dismissible bts-bwh" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong><?php echo $this->session->flashdata('message');?></strong>
	</div>
<?php endif ?>
<a href="<?php echo base_url(); ?>admin/setting/emptycache" class="btn btn-danger">Kosongkan Semua Cache</a>
<br/>
<br/>
<div class="col-md-12 paddingnone">
	
</div>