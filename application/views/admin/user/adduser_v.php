<?php if($this->input->post('submit')){ 
                        echo $message;  // bagian untuk menampilkan message
                    }
            ?>

<h3 class="pd-rl" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3><hr>
<div class="col-md-6 paddingnone">
	<div class="pd-rl">
		<form action="<?php echo site_url('admin/user/prosesadd'); ?>" method="post" enctype="multipart/form-data">
			<div class="col-md-12 paddingnone lbl-bts bdr-btm">
				<div class="lbl-ttl">Informasi Dasar</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">username</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="username" required /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Longname</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="longname" required /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Email</div>
					<div class="col-md-10 paddingnone"><input type="email" class="form-control" name="email" required /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">No Hp</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="handphone" placeholder="Nomor Handphone" /></div>
				</div>
			</div>
			<div class="col-md-12 paddingnone lbl-bts bdr-btm" style="margin-top:15px;">
				<div class="lbl-ttl kiri">Media Sosial</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Facebook</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="facebook" placeholder="Facebook" /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Twitter</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="twitter" placeholder="Twitter" /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Level</div>
					<div class="col-md-10 paddingnone">
						<select name="idlevel" class="form-control">
							<option value="1">Admin</option>
							<option value="2">Publisher</option>
							<option value="3">viewer</option>
						</select>
					</div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Gender</div>
					<div class="col-md-10 paddingnone">
						<select name="gender" class="form-control">
							<option value="L">Laki-Laki</option>
							<option value="P">Wanita</option>
						</select>
					</div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Password</div>
					<div class="col-md-10 paddingnone">
						<input type="password" name="pwd" class="form-control" />
					</div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Konfirmasi Password</div>
					<div class="col-md-10 paddingnone">
						<input type="password" name="pwd2" class="form-control" />
					</div>
				</div>
			</div>
			<input type="submit" name="submit" class="btn btn-danger btn-lg bts-ats kanan" style="margin-bottom:3.5px;" value="Buat User" >
		
	</div>
</div>
<div class="col-md-6 paddingnone">
	<div class="col-md-6 pd-rl">
		<div class="lbl-ttl">Masukan foto profil</div>
		<div class="bts-ats">
			<input type="file" class="filestyle" data-icon="false" name="userimage" id="filedata">
			<img class="img-prev" id="preview" src="<?php echo base_url(); ?>/asset/img/userimage/avatar.png?>" alt="preview image" />
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
