<h3 class="pd-rl" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3>
<h5 class="pd-rl" style="margin-top:0px; margin-bottom:0px"><?php echo $tag; ?></h5><hr/>

<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
  Ubah Password
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Password</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo site_url('admin/profile/proses_ubah_pass'); ?>" >
            <table hight="80px">
                <tr>
                    <td>New Password </td>
                    <td><input type="password" name="pass" class="form-control" required/></td>
                </tr>
            </table>
                      
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Ubah">
          </div>
      </form>
    </div>
  </div>
</div>
<br/>

<div class="col-md-6 paddingnone">
	<div class="pd-rl">
		<form action="<?php echo site_url('admin/profile/proseseditprofile'); ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="iduser" value="<?php echo $profil->iduser;?>" >
			<div class="col-md-12 paddingnone lbl-bts bdr-btm">
				<div class="lbl-ttl">Informasi Dasar</div>
				<div class="col-md-12 paddingnone bts-form fuftooltip" data-toggle="tooltip" data-placement="top" title="Username tidak dapat diubah.">
					<div class="col-md-2 paddingnone lbl-form">Username</div>
					<div class="col-md-10 paddingnone usbox">
						<?php echo $profil->username;?>
						<span class="glyphicon glyphicon-remove form-control-feedback txt-list"></span>
					</div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Longname</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="longname" value="<?php echo $profil->longname;?>" required /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Email</div>
					<div class="col-md-10 paddingnone"><input type="email" class="form-control" name="email" value="<?php echo $profil->email;?>" required /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">No Hp</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="handphone" value="<?php echo $profil->handphone;?>" placeholder="Nomor Handphone" /></div>
				</div>
			</div>
			<div class="col-md-12 paddingnone lbl-bts bdr-btm" style="margin-top:15px;">
				<div class="lbl-ttl kiri">Media Sosial</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Facebook</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="facebook" value="<?php echo $profil->fb;?>" placeholder="Facebook" /></div>
				</div>
				<div class="col-md-12 paddingnone bts-form">
					<div class="col-md-2 paddingnone lbl-form">Twitter</div>
					<div class="col-md-10 paddingnone"><input type="text" class="form-control" name="twitter" value="<?php echo $profil->tw;?>" placeholder="Twitter" /></div>
				</div>
			</div>
			<input type="hidden" name="fotousersaatini" value="<?php echo $profil->imguser;?>" />
			<input type="hidden" name="idusersaatini" value="<?php echo $profil->iduser;?>" />
			<button type="submit" class="btn btn-danger btn-lg bts-ats kanan" style="margin-bottom:3.5px;">Simpan Perubahan</button>
		
	</div>
</div>
<div class="col-md-6 paddingnone">
	<div class="col-md-6 pd-rl">
		<div class="lbl-ttl">Foto Profil</div>
		<div class="bts-ats">
			<input type="file" class="filestyle" data-icon="false" name="userimage" id="filedata">
			<img class="img-prev" id="preview" src="<?php echo base_url(); ?>/asset/img/userimage/<?php echo $profil->imguser;?>" alt="preview image" />
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
