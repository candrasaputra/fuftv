<h3 class="pd-rl" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3>
<h5 class="pd-rl" style="margin-top:0px; margin-bottom:0px"><?php echo $tagline; ?></h5><hr/>
<div>
	<a href="<?php echo base_url()?>admin/user/adduser" class="btn btn-danger kiri bts-bwh"><b>tambah user</b></a>
</div>
<br/>
<br/>

<div class="pd-rl">
	<table id="example" class="table table-hover" cellspacing="0" width="100%" >
		<thead>
			<tr>
				<th width="10%">Img</th>
				<th>User Name</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Level</th>
				<th>Action</th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th>Img</th>
				<th>User Name</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Level</th>
				<th>Action</th>
			</tr>
		</tfoot>

		<tbody>
			<?php foreach ($usr as $n): ?>
				<tr>
				<td><img src="<?php echo base_url()?>asset/img/userimage/<?php echo $n->imguser; ?>" width="30%"></td>
					<td><?php echo $n->username; ?></td>
					<td><?php echo $n->longname; ?></td>
					<td><?php echo $n->email; ?></td>
					<td><?php echo $n->namalevel; ?></td>
					<td>
						<a href="<?php echo base_url('admin/user/detail/'.$n->iduser); ?>">detail</a> |
						<a href="<?php echo base_url('admin/user/edit/'.$n->iduser); ?>">edit</a> |
						<a href="<?php echo base_url('admin/user/delete/'.$n->iduser); ?>">delete</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>