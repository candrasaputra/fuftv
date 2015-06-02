
<h3 class="pd-rl" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3><hr/>
<div class="col-md-4 pd-rl">
	<form action="<?php echo site_url('admin/kategori/pcsaddkat'); ?>" method="post">
		<div class="posting-jdl">
			<label class="post-lbl-size">Judul Kategori</label>
			<input type="text" class="form-control" name="jdlkategori" placeholder="Judul Kategori..." required>
		</div>
		<div class="posting-jdl">
			<label class="post-lbl-size">Deskripsi</label>
			<textarea class="form-control" name="deskat" rows="6" placeholder="Deskripsi Kategori..."></textarea>
		</div>
		<button type="submit" class="btn btn-danger btn-lg kanan" style="margin-bottom:3.5px;"><b>Buat Kategori</b></button>
		<div class="sambungfloat"></div>
	</form>
</div>
<div class="col-md-8 pd-rl">
	<label class="post-lbl-size">List Kategori <i class="fa fa-caret-down"></i></label>
	<div class="panel fuftv-danger">
		<div class="panel-heading fuftv-danger-heading">
			<div class="ttl-adm-list-15 txt-white">Tag</div>
			<div class="ttl-adm-list-15 txt-white">Alias</div>
			<div class="ttl-adm-list-50 txt-white">Deskripsi</div>
			<div class="ttl-adm-list-10 txt-white">Count</div>
			<div class="ttl-adm-list-10 txt-white tengah">Action</div>
			<div class="sambungfloat"></div>
		</div>
		<?php foreach ($ktgr as $n ): ?>
			<ul class="list-group">
				<li class="list-group-item">
					<div class="ttl-adm-list-15"><?php echo $n->jdlkategori; ?></div>
					<div class="ttl-adm-list-15"><?php echo $n->katalias; ?></div>
					<div class="ttl-adm-list-50"><?php echo $n->deskat; ?></div>
					<div class="ttl-adm-list-10"><?php echo $this->kategori_m->count_kategori_film($n->idkategori) ?></div>
					<div class="ttl-adm-list-10 ttl-adm-act">
						<a href="#" class="edit" data-toggle="modal" data-id="<?php echo $n->idkategori; ?>" data-target="#editkate">edit</a> | 
						<a href="<?php echo base_url('admin/kategori/deletekat/'.$n->idkategori); ?>">hapus</a>
					</div>
					<div class="sambungfloat"></div>
				</li>
			</ul>
		<?php endforeach ?>
	</div>
</div>
<!--Modal Untuk request film-->
	<div class="modal fade" id="editkate" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Edit kategori</h4>
				</div>
				<form action="<?php echo base_url('admin/kategori/updatekategori'); ?>" method="post">
					<input type="hidden" name="idkategori" class="idkategori">
					<div class="modal-body">
						<div class="posting-jdl">
							<div class="post-tags bts-bwh">Judul Kategori</div>
							<input type="text" class="form-control jdlkategori" name="jdlkategori" placeholder="Judul Kategori..." required>
						</div>
						<div class="posting-jdl">
							<div class="post-tags bts-bwh">Deskripsi kategori</div>
							<textarea class="form-control deskat" name="deskat" rows="3" placeholder="Deskripsi Kategori..."></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger">edit kategori</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.edit').click(function(event) {
			var id = $(this).data("id");
			$.ajax({
				url: '<?php echo site_url('admin/kategori/detail'); ?>',
				type: 'POST',
				dataType: 'JSON',
				data: {idkategori:id}
			})
			.done(function(msg) {
				$('.idkategori').val(msg.idkategori);
				$('.jdlkategori').val(msg.jdlkategori);
				$('.deskat').val(msg.deskat);
			})
			.fail(function() {
				alert("gagal");
			})
			.always(function() {
				console.log("complete");
			});
		});
	});
</script>