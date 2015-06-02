<div class="media-box">
	<h3 class="pd-rl kiri" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3>
	<div class="detailfim-jdl kiri">
		<a href="<?php echo base_url()?>admin/film/addfilm" class="btn btn-danger kiri btn-ats"><b>tambah film baru</b></a>
	</div>
	<div class="sambungfloat"></div>
</div>
<hr style="margin-top:11px;" />
<div class="col-md-12 paddingnone">
	<table id="example" class="table table-hover" cellspacing="0" width="100%" >
		<thead>
			<tr class="fs-12">
				<th width="10%">Img</th>
				<th>Judul</th>
				<th class="tengah">Kategori</th>
				<th class="tengah">Status</th>
				<th class="tengah">Aired</th>
				<th class="tengah">Action</th>
			</tr>
		</thead>

		<tfoot>
			<tr class="fs-12">
				<th>Img</th>
				<th>Judul</th>
				<th class="tengah">Kategori</th>
				<th class="tengah">Status</th>
				<th class="tengah">Aired</th>
				<th class="tengah">Action</th>
			</tr>
		</tfoot>

		<tbody>
			<?php foreach ($showlistfilm as $allfilm): ?>
				<tr class="fs-12">
					<td>
						<div class="lisimageset">
							<a href="<?php echo base_url('admin/film/detailfilm/'.$allfilm->idfilm); ?>"><img src="<?php echo base_url()?>asset/img/poster/<?php echo $allfilm->posterfilm; ?>" width="100%"></a>
						</div>
					</td>
					<td><a href="<?php echo base_url('admin/film/detailfilm/'.$allfilm->idfilm); ?>" class="txt-list"><b><?php echo $allfilm->jdlfilm; ?></b></a></td>
					<td class="tengah"><?php echo $allfilm->jdlkategori; ?></td>
					<td class="tengah"><?php echo $allfilm->statusfilm; ?></td>
					<td class="tengah"><?php echo $allfilm->airedfilm; ?></td>
					<td class="tengah">
						<a href="<?php echo base_url('admin/episode/addepisode/'.$allfilm->idfilm); ?>" class="btn btn-default listbtnadm" title="tambah episode"><i class="fa fa-plus"></i></a>
						<a href="<?php echo base_url('admin/film/editfilm/'.$allfilm->idfilm); ?>" class="btn btn-default listbtnadm" title="edit film"><i class="fa fa-pencil-square"></i></a>
						<?php if ($this->account->validate_admin()): ?>
						<a href="<?php echo base_url('admin/film/deletefilm/'.$allfilm->idfilm); ?>" class="btn btn-default listbtnadm" title="hapus"><i class="fa fa-trash"></i></a>
						<?php endif ?>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>