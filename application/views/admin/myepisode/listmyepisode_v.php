<div class="media-box">
	<h3 class="pd-rl kiri" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3>
	<div class="sambungfloat"></div>
</div>
<hr style="margin-top:11px;" />
<?php if ($this->session->flashdata('critical')): ?>
	<div align="center" class="alert alert-danger alert-dismissible bts-bwh" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong><?php echo $this->session->flashdata('critical');?></strong>
	</div>
<?php endif ?>
<?php if ($this->session->flashdata('success')): ?>
	<div align="center" class="alert alert-success alert-dismissible bts-bwh" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong><?php echo $this->session->flashdata('success');?></strong>
	</div>
<?php endif ?>
<ul class="nav nav-tabs">
    <li class="active"><a href="#All" data-toggle="tab">All  <span class="badge"><?php echo count($listepisode); ?></span></a></li>
    
    <?php if (!empty($listpublish)): ?>
    	<li><a href="#Publish" data-toggle="tab">Publish  <span class="badge"><?php echo count($listpublish); ?></span></a></li>
   	<?php endif ?>

   	<?php if (!empty($listdraff)): ?>
    	<li><a href="#Draff" data-toggle="tab">Draff  <span class="badge"><?php echo count($listdraff); ?></span></a></li>
    <?php endif ?>

    <?php if (!empty($listberjadwal)): ?>
    	<li><a href="#Berjadwal" data-toggle="tab">Berjadwal  <span class="badge"><?php echo count($listberjadwal); ?></span></a></li>
    <?php endif ?>
</ul>
<br/>

<div class="tab-content">
    <div class="tab-pane active" id="All">
		<div class="col-md-12 paddingnone">
			<table id="example" class="table table-hover" cellspacing="0" width="100%" >
				<thead>
					<tr class="fs-12">
						<th width="10%">Img</th>
						<th width="25%">Judul</th>
						<th width="35%" class="tengah">Episode</th>
						<th class="tengah">Viewer</th>
						<th>Visibility</th>
						<th class="tengah">Action</th>
					</tr>
				</thead>

				<tfoot>
					<tr class="fs-12">
						<th>Img</th>
						<th width="25%">Judul</th>
						<th width="35%" class="tengah">Episode</th>
						<th class="tengah">Viewer</th>
						<th>Visibility</th>
						<th class="tengah">Action</th>
					</tr>
				</tfoot>

				<tbody>
					<?php foreach ($listepisode as $allfilm): ?>
						<tr class="fs-12">
							<td>
								<div class="lisimageset">
									<a href="#"><img src="<?php echo base_url()?>asset/img/epsimage/<?php echo $allfilm->imgeps; ?>" width="100%"></a>
								</div>
							</td>
							<td><a href="<?php echo base_url('admin/film/detailfilm/'.$allfilm->idfilm); ?>" class="txt-list"><b><?php echo $allfilm->jdlfilm; ?></b></a></td>
							<td class="tengah"><?php echo $allfilm->jdleps; ?></td>
							<td class="tengah"><?php echo $allfilm->epsview; ?></td>
							<td class="tengah">
								<div class="dropdown">
		                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
										<i class="<?php if($allfilm->visibility == 'publish'){echo("fa fa-eye");}elseif($allfilm->visibility == 'berjadwal'){echo("glyphicon glyphicon-time");}else{echo("fa fa-eye-slash");}?>"></i> <?php echo $allfilm->visibility?>		                            <span class="caret"></span>
		                            </button>
		                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>admin/myepisode/publish/<?php echo $allfilm->idepisode; ?>">Publish</a></li>
		                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>admin/myepisode/draff/<?php echo $allfilm->idepisode; ?>">Draff</a></li>
		                            </ul>
		                        </div>
							</td>
							<td class="tengah">
								<a href="<?php echo base_url('admin/myepisode/edit/'.$allfilm->idepisode.'/'.$allfilm->idfilm); ?>" class="btn btn-default listbtnadm" title="edit film"><i class="fa fa-pencil-square"></i></a>
								<a href="<?php echo base_url('admin/myepisode/delete_from_listepisode/'.$allfilm->idepisode); ?>" class="btn btn-default listbtnadm" title="hapus"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
    </div>

    <div class="tab-pane" id="Publish">
        <div class="col-md-12 paddingnone">
			<table id="example2" class="table table-hover" cellspacing="0" width="100%" >
				<thead>
					<tr class="fs-12">
						<th width="10%">Img</th>
						<th width="25%">Judul</th>
						<th width="35%" class="tengah">Episode</th>
						<th class="tengah">Viewer</th>
						<th>Visibility</th>
						<th class="tengah">Action</th>
					</tr>
				</thead>

				<tfoot>
					<tr class="fs-12">
						<th>Img</th>
						<th width="25%">Judul</th>
						<th width="35%" class="tengah">Episode</th>
						<th class="tengah">Viewer</th>
						<th>Visibility</th>
						<th class="tengah">Action</th>
					</tr>
				</tfoot>

				<tbody>
					<?php foreach ($listpublish as $allfilm): ?>
						<tr class="fs-12">
							<td>
								<div class="lisimageset">
									<a href="#"><img src="<?php echo base_url()?>asset/img/epsimage/<?php echo $allfilm->imgeps; ?>" width="100%"></a>
								</div>
							</td>
							<td><a href="<?php echo base_url('admin/film/detailfilm/'.$allfilm->idfilm); ?>" class="txt-list"><b><?php echo $allfilm->jdlfilm; ?></b></a></td>
							<td class="tengah"><?php echo $allfilm->jdleps; ?></td>
							<td class="tengah"><?php echo $allfilm->epsview; ?></td>
							<td class="tengah">
								<div class="dropdown">
		                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
										<i class="<?php if($allfilm->visibility == 'publish'){echo("fa fa-eye");}elseif($allfilm->visibility == 'berjadwal'){echo("glyphicon glyphicon-time");}else{echo("fa fa-eye-slash");}?>"></i> <?php echo $allfilm->visibility?>		                            <span class="caret"></span>
		                            </button>
		                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>admin/myepisode/publish/<?php echo $allfilm->idepisode; ?>">Publish</a></li>
		                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>admin/myepisode/draff/<?php echo $allfilm->idepisode; ?>">Draff</a></li>
		                            </ul>
		                        </div>
							</td>
							<td class="tengah">
								<a href="<?php echo base_url('admin/myepisode/edit/'.$allfilm->idepisode.'/'.$allfilm->idfilm); ?>" class="btn btn-default listbtnadm" title="edit film"><i class="fa fa-pencil-square"></i></a>
								<a href="<?php echo base_url('admin/myepisode/delete_from_listepisode/'.$allfilm->idepisode); ?>" class="btn btn-default listbtnadm" title="hapus"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
    </div>

    <div class="tab-pane" id="Draff">
        <div class="col-md-12 paddingnone">
			<table id="example2" class="table table-hover" cellspacing="0" width="100%" >
				<thead>
					<tr class="fs-12">
						<th width="10%">Img</th>
						<th width="25%">Judul</th>
						<th width="35%" class="tengah">Episode</th>
						<th class="tengah">Viewer</th>
						<th>Visibility</th>
						<th class="tengah">Action</th>
					</tr>
				</thead>

				<tfoot>
					<tr class="fs-12">
						<th>Img</th>
						<th width="25%">Judul</th>
						<th width="35%" class="tengah">Episode</th>
						<th class="tengah">Viewer</th>
						<th>Visibility</th>
						<th class="tengah">Action</th>
					</tr>
				</tfoot>

				<tbody>
					<?php foreach ($listdraff as $allfilm): ?>
						<tr class="fs-12">
							<td>
								<div class="lisimageset">
									<a href="#"><img src="<?php echo base_url()?>asset/img/epsimage/<?php echo $allfilm->imgeps; ?>" width="100%"></a>
								</div>
							</td>
							<td><a href="<?php echo base_url('admin/film/detailfilm/'.$allfilm->idfilm); ?>" class="txt-list"><b><?php echo $allfilm->jdlfilm; ?></b></a></td>
							<td class="tengah"><?php echo $allfilm->jdleps; ?></td>
							<td class="tengah"><?php echo $allfilm->epsview; ?></td>
							<td class="tengah">
								<div class="dropdown">
		                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
										<i class="<?php if($allfilm->visibility == 'publish'){echo("fa fa-eye");}elseif($allfilm->visibility == 'berjadwal'){echo("glyphicon glyphicon-time");}else{echo("fa fa-eye-slash");}?>"></i> <?php echo $allfilm->visibility?>		                            <span class="caret"></span>
		                            </button>
		                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>admin/myepisode/publish/<?php echo $allfilm->idepisode; ?>">Publish</a></li>
		                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>admin/myepisode/draff/<?php echo $allfilm->idepisode; ?>">Draff</a></li>
		                            </ul>
		                        </div>
							</td>
							<td class="tengah">
								<a href="<?php echo base_url('admin/myepisode/edit/'.$allfilm->idepisode.'/'.$allfilm->idfilm); ?>" class="btn btn-default listbtnadm" title="edit film"><i class="fa fa-pencil-square"></i></a>
								<a href="<?php echo base_url('admin/myepisode/delete_from_listepisode/'.$allfilm->idepisode); ?>" class="btn btn-default listbtnadm" title="hapus"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
    </div>

    <div class="tab-pane" id="Berjadwal">
        <div class="col-md-12 paddingnone">
			<table id="example4" class="table table-hover" cellspacing="0" width="100%" >
				<thead>
					<tr class="fs-12">
						<th width="10%">Img</th>
						<th width="25%">Judul</th>
						<th width="35%" class="tengah">Episode</th>
						<th class="tengah">Viewer</th>
						<th>Visibility</th>
						<th class="tengah">Action</th>
					</tr>
				</thead>

				<tfoot>
					<tr class="fs-12">
						<th>Img</th>
						<th width="25%">Judul</th>
						<th width="35%" class="tengah">Episode</th>
						<th class="tengah">Viewer</th>
						<th>Visibility</th>
						<th class="tengah">Action</th>
					</tr>
				</tfoot>

				<tbody>
					<?php foreach ($listberjadwal as $allfilm): ?>
						<tr class="fs-12">
							<td>
								<div class="lisimageset">
									<a href="#"><img src="<?php echo base_url()?>asset/img/epsimage/<?php echo $allfilm->imgeps; ?>" width="100%"></a>
								</div>
							</td>
							<td><a href="<?php echo base_url('admin/film/detailfilm/'.$allfilm->idfilm); ?>" class="txt-list"><b><?php echo $allfilm->jdlfilm; ?></b></a></td>
							<td class="tengah"><?php echo $allfilm->jdleps; ?></td>
							<td class="tengah"><?php echo $allfilm->epsview; ?></td>
							<td class="tengah">
								<div class="dropdown">
		                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
		                              <i class="<?php if($allfilm->visibility == 'publish'){echo("fa fa-eye");}elseif($allfilm->visibility == 'berjadwal'){echo("glyphicon glyphicon-time");}else{echo("fa fa-eye-slash");}?>"></i> <?php echo $allfilm->visibility?>
		                            <span class="caret"></span>
		                            </button>
		                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>admin/myepisode/publish/<?php echo $allfilm->idepisode; ?>">Publish</a></li>
		                              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>admin/myepisode/draff/<?php echo $allfilm->idepisode; ?>">Draff</a></li>
		                            </ul>
		                        </div>
							</td>
							<td class="tengah">
								<a href="<?php echo base_url('admin/myepisode/edit/'.$allfilm->idepisode.'/'.$allfilm->idfilm); ?>" class="btn btn-default listbtnadm" title="edit film"><i class="fa fa-pencil-square"></i></a>
								<a href="<?php echo base_url('admin/myepisode/delete_from_listepisode/'.$allfilm->idepisode); ?>" class="btn btn-default listbtnadm" title="hapus"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
    </div>
</div>