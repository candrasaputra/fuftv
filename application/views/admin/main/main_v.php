<h2 class="pd-rl"><?php echo $title; ?></h2>
<div class="col-md-10 pd-rl">
	<div class="pop-row">
		<div class="col-md-3 pd-rl">
			<a href="<?php echo base_url()?>admin/profile">
				<div class="halutbtn">
					<i class="fa fa-user-secret"></i>
					<div class="subhalutbtn">Profil</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 pd-rl">
			<a href="<?php echo base_url()?>admin/requestfilm">
				<div class="halutbtn">
					<i class="fa fa-bullhorn"></i>
					<div class="subhalutbtn">Req film</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 pd-rl">
			<a href="<?php echo base_url()?>admin/film">
				<div class="halutbtn">
					<i class="fa fa-th-list"></i>
					<div class="subhalutbtn">Daftar film</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 pd-rl">
			<a href="<?php echo base_url()?>admin/Episode">
				<div class="halutbtn">
					<i class="fa fa-list"></i>
					<div class="subhalutbtn">Daftar Episode</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 pd-rl">
			<a href="<?php echo base_url()?>admin/kategori">
				<div class="halutbtn">
					<i class="fa fa-tag"></i>
					<div class="subhalutbtn">Kategori</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 pd-rl">
			<a href="<?php echo base_url()?>admin/tag">
				<div class="halutbtn">
					<i class="fa fa-tags"></i>
					<div class="subhalutbtn">Tag/gendre</div>
				</div>
			</a>
		</div>
		<?php if ($this->account->validate_admin()): ?>
		<div class="col-md-3 pd-rl">
			<a href="<?php echo base_url()?>admin/user">
				<div class="halutbtn">
					<i class="fa fa-user"></i>
					<div class="subhalutbtn">User</div>
				</div>
			</a>
		</div>
		<?php endif ?>
		<div class="col-md-3 pd-rl">
			<a href="<?php echo base_url()?>admin/setting">
				<div class="halutbtn">
					<i class="fa fa-cog"></i>
					<div class="subhalutbtn">Setting</div>
				</div>
			</a>
		</div>
		<div class="sambungfloat"></div>
	</div>
</div>
<div class="col-md-2 pd-rl">
	<div class="rev-box bdr-btm">
		<div class="rev-ttl">PENGUNUNG HARIAN</div>
		<div class="rev-cont">1234</div>
	</div>
	<div class="rev-box bdr-btm">
		<div class="rev-ttl">JUMLAH UNDUHAN HARIAN</div>
		<div class="rev-cont">12</div>
	</div>
	<div class="rev-box">
		<div class="rev-ttl">USER BARU</div>
		<div class="rev-cont">0.</div>
	</div>
</div>
