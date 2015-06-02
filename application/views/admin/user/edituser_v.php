<h3 class="pd-rl" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3>
<div class="col-md-6 paddingnone">
	<div class="pd-rl">
		<form action="<?php echo site_url('admin/user/prosesedit'); ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="iduser" value="<?php echo $edit->iduser;?>" >
			<div class="col-md-12 paddingnone lbl-bts bdr-btm">
				<div class="lbl-ttl">Informasi Dasar</div>
				<div class="col-md-12 paddingnone bts-form fuftooltip" data-toggle="tooltip" data-placement="top" title="Username tidak dapat diubah.">
					<div class="col-md-2 paddingnone lbl-form">Username</div>
					<div class="col-md-10 paddingnone usbox">
						<?php echo $edit->username;?>
						<span class="glyphicon glyphicon-remove form-control-feedback txt-list"></span>
					</div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Longname</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="longname" value="<?php echo $edit->longname;?>" required /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Email</div>
					<div class="col-md-10 paddingnone"><input type="email" class="form-control" name="email" value="<?php echo $edit->email;?>" required /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">No Hp</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="handphone" value="<?php echo $edit->handphone;?>" placeholder="Nomor Handphone" /></div>
				</div>
			</div>
			<div class="col-md-12 paddingnone lbl-bts bdr-btm" style="margin-top:15px;">
				<div class="lbl-ttl kiri">Media Sosial</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Facebook</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="facebook" value="<?php echo $edit->fb;?>" placeholder="Facebook" /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Twitter</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="twitter" value="<?php echo $edit->tw;?>" placeholder="Twitter" /></div>
				</div>
			</div>
			<input type="hidden" name="fotousersaatini" value="<?php echo $edit->imguser;?>" />
			<input type="hidden" name="idusersaatini" value="<?php echo $edit->iduser;?>" />
			<button type="submit" class="btn btn-danger btn-lg bts-ats kanan" style="margin-bottom:3.5px;">Simpan Perubahan</button>
		
	</div>
</div>
<div class="col-md-6 paddingnone">
	<div class="col-md-6 pd-rl">
		<div class="lbl-ttl">Foto edit</div>
		<div class="bts-ats">
			<input type="file" class="filestyle" data-icon="false" name="userimage" id="filedata">
			<img class="img-prev" id="preview" src="<?php echo base_url(); ?>/asset/img/userimage/<?php echo $edit->imguser;?>" alt="preview image" />
		</div>
	</div>
	<div class="col-md-6 pd-rl"></div>
</div>
</form>
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
