<h3 class="pd-rl" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3>
<h5 class="pd-rl" style="margin-top:0px; margin-bottom:0px"><?php echo $tag; ?></h5><hr/>
<form action="<?php echo base_url('admin/film/prosesaddfilm'); ?>" method="post" enctype="multipart/form-data">
	<div class="col-md-12 paddingnone">
		<div class="col-md-9 pd-rl">
			<div class="adm-box">
				<div class="posting-jdl">
					<label class="post-lbl-size">Judul Film</label>
					<input type="text" class="form-control" name="jdlpost" placeholder="Judul Film" required>
				</div>
				<div class="posting-jdl">
					<label class="post-lbl-size">Type</label>
					<input type="text" class="form-control" name="typefilm" placeholder="TV, Movie, OVA" required>
				</div>
				<div class="posting-jdl">
					<label class="post-lbl-size">Status</label>
					<input type="text" class="form-control" name="statusfilm" placeholder="Mengudara, END">
				</div>
				<div class="posting-jdl">
					<label class="post-lbl-size">Production</label>
					<input type="text" class="form-control" name="productionfilm" placeholder="Production">
				</div>
				<div class="posting-jdl">
					<label class="post-lbl-size">Aired</label>
					<input type="text" class="form-control" name="airedfilm" placeholder="Di tayangkan pada">
				</div>
				<div class="posting-jdl">
					<label class="post-lbl-size">Total Episode</label>
					<input type="text" class="form-control" name="totalepsfilm" placeholder="Total Episode">
				</div>
				<div class="posting-jdl">
					<label class="post-lbl-size">Durasi Perepisode</label>
					<input type="text" class="form-control" name="durasifilm" placeholder="Durai Perepisode">
				</div>
				<div class="posting-jdl">
					<label class="post-lbl-size">Batas Usia</label>
					<input type="text" class="form-control" name="ratingfilm" placeholder="Rating">
				</div>
				<div class="posting-jdl">
					<label class="post-lbl-size">Deskripsi</label>
					<textarea class="form-control" name="deskripsifilm" rows="6" placeholder="Deskripsi film" required></textarea>
				</div>
			</div>
		</div>
		<div class="col-md-3 pd-rl">
			<div class="posting-jdl adm-box">
				<div class="jdl-post">Poster Image</div>
				<input type="file" class="filestyle" data-icon="false" name="foto" id="filedata" accept="image/*" />
				<img class="img-prev" id="preview" src="<?php echo base_url('asset/img/default.png'); ?>" alt="preview image" />
			</div>
			<div class="posting-jdl adm-box">
				<div class="jdl-post">Kategori</div>
				<div class="col-md-12 paddingnone">
					<select name="kategori" class="form-control">
						<?php foreach ($kat as $n): ?>
							<option value="<?php echo $n->idkategori; ?>"><?php echo $n->jdlkategori; ?></option>
						<?php endforeach ?>
					</select>
					<div class="sambungfloat"></div>
					<div class="alert alert-danger bts-ats tengah" style="margin-bottom:0px;">Piih kategori</div>
				</div>
				<div class="sambungfloat"></div>
			</div>
			<div class="posting-jdl adm-box">
				<div class="jdl-post">Tag</div>
				<div class="col-md-12 paddingnone">
					<?php foreach ($ambiltag as $n): ?>
						<div class="box-select">
							<div class="box-select-btn"><input type="checkbox" id="<?php echo $n->idtag; ?>" name="idtag[]" value="<?php echo $n->idtag; ?>" /></div>
							<div class="box-select-ttl"><label class="non-lbl" for="<?php echo $n->idtag; ?>"><b><?php echo $n->jdltag; ?></b></label></div>
						</div>
					<?php endforeach ?>
					<div class="sambungfloat"></div>
					<div class="add-takat">
						<div class="form-group has-error has-feedback bts-bwh">
							<input type="text" class="form-control fuftooltip" data-toggle="tooltip" data-placement="bottom" title="Sedang dikembangkan, gunakan checkbox diatas" placeholder="tag" readonly>
							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						</div>
					</div>
					<div class="alert alert-danger tengah" style="margin-bottom:0px;">Pisahkan dengan tanda <i>koma</i> (,)</div>
				</div>
				<div class="sambungfloat"></div>
			</div>
			<div class="posting-jdl adm-box">
				<div class="jdl-post">Publish</div>
				<div class="col-md-12 paddingnone">
					<table width="70%">
						<tr>
							<td width="25%">Status</td>
							<td width="5%">:</td>
							<td width="40%">Draft</td>
						</tr>
						<tr>
							<td width="25%">Visibli</td>
							<td width="5%">:</td>
							<td width="40%">Public</td>
						</tr>
						<tr>
							<td width="25%">Publish</td>
							<td width="5%">:</td>
							<td width="40%">Public </td>
						</tr>
					</table>
					<div class="add-takat">
						<button class="btn btn-danger btn-lg tengah" style="width:100%" name="buatfilm" >Buat film</button>
					</div>
				</div>
				<div class="sambungfloat"></div>
			</div>
		</div>
	</div>
</form>

<script type="text/javascript">
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
	$(document).ready(function(){
		$('.fuftooltip').tooltip();
	});
</script>