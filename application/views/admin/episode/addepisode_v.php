<form action="<?php echo base_url('admin/episode/prosesaddepisode'); ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="idfilm" value="<?php echo $idfilm;?>">
<div class="bdr-btm" style="padding-bottom:3.5px;">
	<div class="kiri">
		<h1 class="pd-rl" style="margin-top:5px; margin-bottom:0px"><?php echo $title; ?> untuk <?php echo $detail->jdlfilm;?></h1>
	</div>
	<div class="kanan btnmakeeps">
		<input type="hidden" name="idepisode" value="<?php echo $this->db->insert_id() ?>" />
		<button class="btn btn-danger btn-lg" style="min-width:270px; border:2px solid #C0392B;">Buat Episode</button>
	</div>
	<div class="sambungfloat"></div>
</div>
<div class="col-md-12 paddingnone bts-ats">
	<div class="col-md-9 pd-rl">
		<div class="adm-box">
			<div class="posting-jdl">
				<label class="post-lbl-size">Episode</label>
				<input type="hidden" value="<?php echo $detail->jdlfilm;?>" name="jdlfilm">
				<input type="text" class="form-control" name="jdleps" placeholder="1, 2, 3, OVA, MOVIE" required>
			</div>
			<div class="posting-jdl">
				<label class="post-lbl-size">Deskripsi Episode ( Jika ada )</label>
				<textarea class="form-control" name="deseps" rows="6" placeholder="Deskripsi Episode" required></textarea>
			</div>
			<div class="pop-row bts-bwh">
				<div class="col-md-6 col-sm-6 col-xs-12 pd-rl bts-ats">
					<div style="border:1px solid #e2e2e2; padding:7px;">
						<div class="detailfim-dec txt-list"><a href="javascript:addLinkV()" class="btn btn-danger btn-lg fullsideko" data-target="#addvideolink"><i class="fa fa-video-camera"></i> <b>Tambah Link Video Streaming</b></a></div>
						<div class="alert alert-danger bts-ats tengah classVideo" style="margin-bottom:0px;"><i class="fa fa-warning"></i> Tidak ada link video streaming.</div>
						<!--daftar link jika ada-->
						<div class="elementLinkV"></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 pd-rl bts-ats">
					<div style="border:1px solid #e2e2e2; padding:7px;">
						<div class="detailfim-dec txt-list"><a href="javascript:addLinkD()" class="btn btn-danger btn-lg fullsideko" data-target="#adddownloadlink"><i class="fa fa-download"></i> <b>Tambah Link Download</b></a></div>
						<div class="alert alert-danger bts-ats tengah classDownload" style="margin-bottom:0px;"><i class="fa fa-warning"></i> Tidak ada link download.</div>
						<div class="elementLinkD"></div>
					</div>
				</div>
				<div class="sambungfloat"></div>
			</div>
		</div>
	</div>
	<div class="col-md-3 pd-rl">
		<div class="posting-jdl adm-box">
			<div class="jdl-post">Visibility</div>
			<select class="form-control" name="visibility">
				<option value="publish">Publish</option>
				<option value="draff">Draff</option>
				<option value="berjadwal">Berjadwal</option>
			</select>
			<br/>
			<label>Tentukan Jadwal</label>
			<input type="text" class="form-control" id="default_datetimepicker" name="timeepisode"/>
			*Untuk dapat menggunakan jadwal visibility ubah menjadi 'berjadwal'
		</div>
		<div class="posting-jdl adm-box">
			<div class="jdl-post">Poster Film</div>
			<div class="col-md-12 paddingnone">
				<div class="postimagejadi">
					<img src="<?php echo base_url();?>/asset/img/poster/<?php echo $detail->posterfilm;?>" alt="<?php echo $detail->jdlfilm;?>" width="100%">
				</div>
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="posting-jdl adm-box">
			<div class="jdl-post">Screen Shoot Episode</div>
			<input type="file" class="filestyle" data-icon="false" name="epsimage" id="filedata">
			<img class="img-prev" id="preview" src="<?php echo base_url('asset/img/epsimage/default.jpg'); ?>" alt="preview image" />
		</div>
	</div>
</div>
</form>
<!--Modal Untuk tambah Link video-->
<div class="modal fade" id="addvideolink" tabindex="-1" role="dialog" aria-labelledby="uploadimglabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Tambah Link Download</h4>
			</div>
			<div class="modal-body">
				<div class="posting-jdl">
					<div class="post-tags">Label link</div>
					<input class="form-control bts-ats" id="labelLinkV" name="labelLinkV" type="text" placeholder="tusfile, usercloud, solidfiles, dll">
					<div class="post-tags bts-ats">Kode link video</div>
					<textarea class="form-control bts-ats" id="linkStreamV" name="linkStreamV" rows="3" placeholder="kode link video streaming" required></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<!-- <button type="button" id="tambahLinkV" class="btn btn-danger">Tambah Link</button> -->
				<a href="javascript:saveButtonV()" class="btn btn-danger btnLinkV">Tambah Link</a>
			</div>
		</div>
	</div>
</div>
<!--Modal Untuk tambah Link download-->
<div class="modal fade" id="adddownloadlink" tabindex="-1" role="dialog" aria-labelledby="uploadimglabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Tambah Link Download</h4>
			</div>
			<div class="modal-body">
				<div class="posting-jdl">
					<div class="pop-row">
						<div class="col-md-8 pd-rl">
							<div class="post-tags">Label link</div>
							<input class="form-control bts-ats" id="labelLinkD" type="text" placeholder="tusfile, usercloud, solidfiles, dll">
						</div>
						<div class="col-md-4 pd-rl">
							<div class="post-tags">Kualitas video</div>
							<select class="form-control bts-ats" name="quality" id="kualitasD">
								<option value="480">480px</option>
								<option value="720">720px</option>
								<option value="1080">1080px</option>
							</select>
						</div>
						<div class="sambungfloat"></div>
					</div>
					<div class="post-tags bts-ats">Kode link download</div>
					<textarea class="form-control bts-ats" name="linkdownload" id="linkDownload" rows="3" placeholder="kode link download" required></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-danger" id="tambahLinkD">Tambah Link</button> -->
				<a href="javascript:saveButtonD()" class="btn btn-danger btnLinkD">Tambah Link</a>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="counterLinkV" value="0" />
<input type="hidden" id="counterLinkD" value="0" />

<script type="text/javascript">
	$(document).ready(function() {
		// Link streaming
		// $('#tambahLinkV').click(function(event) {
		// 	var labelLink = $('#labelLinkV').val();
		// 	var isiLink = $('#linkStreamV').val();
		//
		// 	addElementV(0, labelLink, isiLink);
		//
		// 	$('#labelLinkV').val(null);
		// 	$('#linkStreamV').val(null);
		//
		// 	$(".classVideo").addClass("hide");
		// });
		// $('#editLinkV').click(function(event) {
		// 	var idLink = $('#idLinkV').val();
		// 	var labelLink = $('#labelLinkV').val();
		// 	var isiLink = $('#linkStreamV').val();
		//
		// 	addElementV(idLink, labelLink, isiLink);
		//
		// 	$('#labelLinkV').val(null);
		// 	$('#linkStreamV').val(null);
		//
		// 	$(".classVideo").addClass("hide");
		// 	$('#addvideolink').modal('hide');
		// });

		// Link download
		// $('#tambahLinkD').click(function(event) {
		// 	var labelLink = $('#labelLinkD').val();
		// 	var isiLink = $('#linkDownload').val();
		// 	var kualitas = $('#kualitasD').val();
		//
		// 	addElementD(labelLink, isiLink, kualitas);
		//
		// 	$('#labelLinkD').val(null);
		// 	$('#linkDownload').val(null);
		//
		// 	$(".classDownload").addClass("hide");
		// });
	});

	// link streaming
	function addLinkV() {
		$('.btnLinkV').attr('href', 'javascript:saveButtonV(0)');
		$('.btnLinkV').html('Tambah Link');

		$('#labelLinkV').val(null);
		$('#linkStreamV').val(null);
		$('#addvideolink').modal('show');
	}

	function editLinkV(id) {
		$('.btnLinkV').attr('href', 'javascript:saveButtonV('+id+')');
		$('.btnLinkV').html('Simpan Link');

		var labelLink = $('#labelLinkV'+id).val();
		var isiLink = $('#codeLinkV'+id).val();

		$('#labelLinkV').val(labelLink);
		$('#linkStreamV').val(isiLink);
		$('#addvideolink').modal('show');
	}

	function deleteLinkV(id) {
		$('.elmLinkV'+id).remove();
	}

	function saveButtonV(mode) {
		if (mode < 1) {
			var labelLink = $('#labelLinkV').val();
			var isiLink = $('#linkStreamV').val();

			addElementV(0, labelLink, isiLink);

			$('#labelLinkV').val(null);
			$('#linkStreamV').val(null);

			$(".classVideo").addClass("hide");
		} else {
			var labelLink = $('#labelLinkV').val();
			var isiLink = $('#linkStreamV').val();

			addElementV(mode, labelLink, isiLink);

			$('#labelLinkV').val(null);
			$('#linkStreamV').val(null);

			$(".classVideo").addClass("hide");
			$('#addvideolink').modal('hide');
		}
	}

	function addElementV(id, labelLink, isiLink) {
		if (parseInt(id) < 1) {
			// get counter
			var counter = parseInt($('#counterLinkV').val());
			var elm = '<div class="bts-ats bungkus elmLinkV'+(counter+1)+'">'
								+'<div class="kiri">'
								+'<div class="post-tags kiri labelLinkV'+(counter+1)+'">'+labelLink+'</div>'
								+'<input type="hidden" id="labelLinkV'+(counter+1)+'" name="jdllinkstreaming[]" value="'+labelLink.replace(/\"/g,"\'")+'" />'
								+'<input type="hidden" id="codeLinkV'+(counter+1)+'" name="codelinkstreaming[]" value="'+isiLink.replace(/\"/g,"\'")+'" />'
								// +'<div class="post-tags kiri" style="color:#777; font-weight:normal">1080px</div>'
								+'<div class="sambungfloat"></div>'
								+'</div>'
								+'<div class="kanan">'
								+'<a href="javascript:editLinkV('+(counter+1)+')" class="btn btn-default editLinkV" data-target="#addvideolink" style="padding: 3px 6px;"><i class="fa fa-pencil-square"></i></a>'
								+'<a href="javascript:deleteLinkV('+(counter+1)+')" class="btn btn-default deleteLinkV" style="padding: 3px 6px;"><i class="fa fa-trash"></i></a>'
								+'</div>'
								+'<div class="sambungfloat"></div>'
								+'</div>';
			$('.elementLinkV').after(elm);
			// update counter
			$('#counterLinkV').val(counter+1);
		} else {
			$('.labelLinkV'+id).html(labelLink);
			$('#labelLinkV'+id).val(labelLink);
			$('#codeLinkV'+id).val(isiLink);
		}
	}

	// link download
	function addLinkD() {
		$('.btnLinkD').attr('href', 'javascript:saveButtonD(0)');
		$('.btnLinkD').html('Tambah Link');

		$('#labelLinkD').val(null);
		$('#linkDownload').val(null);
		$('#adddownloadlink').modal('show');
	}

	function editLinkD(id) {
		$('.btnLinkD').attr('href', 'javascript:saveButtonD('+id+')');
		$('.btnLinkD').html('Simpan Link');

		var labelLink = $('#labelLinkD'+id).val();
		var isiLink = $('#codeLinkD'+id).val();
		var kualitas = $('#kualitasD'+id).val();

		$('#labelLinkD').val(labelLink);
		$('#linkDownload').val(isiLink);
		$("#kualitasD").val(kualitas);
		$('#adddownloadlink').modal('show');
	}

	function deleteLinkD(id) {
		$('.elmLinkD'+id).remove();
	}

	function saveButtonD(mode) {
		if (mode < 1) {
			var labelLink = $('#labelLinkD').val();
			var isiLink = $('#linkDownload').val();
			var kualitas = $('#kualitasD').val();

			addElementD(0, labelLink, isiLink, kualitas);

			$('#labelLinkD').val(null);
			$('#linkDownload').val(null);

			$(".classDownload").addClass("hide");
		} else {
			var labelLink = $('#labelLinkD').val();
			var isiLink = $('#linkDownload').val();
			var kualitas = $('#kualitasD').val();

			addElementD(mode, labelLink, isiLink, kualitas);

			$('#labelLinkD').val(null);
			$('#linkDownload').val(null);

			$(".classDownload").addClass("hide");
			$('#adddownloadlink').modal('hide');
		}
	}

	function addElementD(id, labelLink, isiLink, kualitas) {
		if (parseInt(id) < 1) {
			// get counter
			var counter = parseInt($('#counterLinkD').val());
			var elm = '<div class="bts-ats bungkus elmLinkD'+(counter+1)+'">'
								+'<div class="kiri">'
								+'<div class="post-tags kiri labelLinkD'+(counter+1)+'">'+labelLink+'</div>'
								+'<input type="hidden" id="labelLinkD'+(counter+1)+'" name="jdllinkdownload[]" value="'+labelLink+'" />'
								+'<input type="hidden" id="codeLinkD'+(counter+1)+'" name="codelinkdownload[]" value="'+isiLink+'" />'
								+'<input type="hidden" id="kualitasD'+(counter+1)+'" name="quality[]" value="'+kualitas+'" />'
								+'<div class="post-tags kiri kualitasD'+(counter+1)+'" style="color:#777; font-weight:normal">'+kualitas+'px</div>'
								+'<div class="sambungfloat"></div>'
								+'</div>'
								+'<div class="kanan">'
								+'<a href="javascript:editLinkD('+(counter+1)+')" class="btn btn-default editLinkD" data-target="#adddownloadlink" style="padding: 3px 6px;"><i class="fa fa-pencil-square"></i></a>'
								+'<a href="javascript:deleteLinkD('+(counter+1)+')" class="btn btn-default deleteLinkD" style="padding: 3px 6px;"><i class="fa fa-trash"></i></a>'
								+'</div>'
								+'<div class="sambungfloat"></div>'
								+'</div>';
			$('.elementLinkD').after(elm);
			// update counter
			$('#counterLinkD').val(counter+1);
		} else {
			$('.labelLinkD'+id).html(labelLink);
			$('.kualitasD'+id).html(kualitas);
			$('#labelLinkD'+id).val(labelLink);
			$('#codeLinkD'+id).val(isiLink);
			$('#kualitasD'+id).val(kualitas);
		}
	}
</script>

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

	$('#default_datetimepicker').datetimepicker({
		formatTime:'H:i',
		formatDate:'d.m.Y',
		//defaultDate:'8.12.1986', // it's my birthday
		//defaultDate:'+03.01.1970', // it's my birthday
		//defaultTime:'10:00',
		timepickerScrollbar:true
	});
</script>