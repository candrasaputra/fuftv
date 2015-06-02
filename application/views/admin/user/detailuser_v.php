<h3 class="pd-rl" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3>
<div class="col-md-6 paddingnone">
	<div class="pd-rl">
			<div class="col-md-12 paddingnone lbl-bts bdr-btm">
				<div class="lbl-ttl">Informasi Dasar</div>
				<div class="col-md-12 paddingnone bts-form fuftooltip" data-toggle="tooltip" data-placement="top" title="Username tidak dapat diubah.">
					<div class="col-md-2 paddingnone lbl-form">Username</div>
					<div class="col-md-10 paddingnone usbox">
						<?php echo $detail->username;?>
						<span class="glyphicon glyphicon-remove form-control-feedback txt-list"></span>
					</div>
				</div>
				<div class="col-md-12 paddingnone bts-form" >
					<div class="col-md-2 paddingnone lbl-form">Longname</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="longname" value="<?php echo $detail->longname;?>" disabled /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Email</div>
					<div class="col-md-10 paddingnone"><input type="email" class="form-control" name="email" value="<?php echo $detail->email;?>" disabled /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">No Hp</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="handphone" value="<?php echo $detail->handphone;?>" placeholder="Nomor Handphone" disabled /></div>
				</div>
			</div>
			<div class="col-md-12 paddingnone lbl-bts bdr-btm" style="margin-top:15px;">
				<div class="lbl-ttl kiri">Media Sosial</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Facebook</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="facebook" value="<?php echo $detail->fb;?>" placeholder="Facebook" disabled /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Twitter</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="twitter" value="<?php echo $detail->tw;?>" placeholder="Twitter" disabled /></div>
				</div>
			</div>
		
	</div>
</div>
<div class="col-md-6 paddingnone">
	<div class="col-md-6 pd-rl">
		<div class="lbl-ttl">Foto detail</div>
		<div class="bts-ats">
			<img class="img-prev" id="preview" src="<?php echo base_url(); ?>/asset/img/userimage/<?php echo $detail->imguser;?>" alt="preview image" />
		</div>
	</div>
	<div class="col-md-6 pd-rl"></div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.fuftooltip').tooltip();
	});
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#preview').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#filedata").change(function(){
		readURL(this);
	});
</script>
