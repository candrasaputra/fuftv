<div class="media-box">
	<h3 class="pd-rl kiri" style="margin-top:15px; margin-bottom:0px"><?php echo $title; ?></h3>
	
	<div class="sambungfloat"></div>
</div>
<hr style="margin-top:11px;" />
<a href="<?php echo base_url(); ?>/admin/monitoring/emptysessions" class="btn btn-danger">Kosongkan Sessions</a>
<br/>
<br/>
<div class="col-md-12 paddingnone">
	<table id="example" class="table table-hover" cellspacing="0" width="100%" >
		<thead>
			<tr class="fs-12">
				<th>NO</th>
				
				<th>Username</th>
				<th>IP Adress</th>
				<th>Browser</th>
				<th>Platform</th>
				<th>Lastlogin</th>
				<th>Action</th>
			</tr>
		</thead>

		<tfoot>
			<tr class="fs-12">
				<th>NO</th>
				
				<th>Username</th>
				<th>IP Adress</th>
				<th>Browser</th>
				<th>Platform</th>
				<th>Lastlogin</th>
				<th>Action</th>
			</tr>
		</tfoot>

		<tbody>
			<?php
			$no=1;
			foreach ($monitoring as $n): 
			$session_data = $n->data;
	        $return_data = array();
	        $offset = 0;
	        while ($offset < strlen($session_data)) {
	            $pos = strpos($session_data, "|", $offset);
	            $num = $pos - $offset;
	            $varname = substr($session_data, $offset, $num);
	            $offset += $num + 1;
	            $data = unserialize(substr($session_data, $offset));
	            $return_data[$varname] = $data;
	            $offset += strlen(serialize($data));
	        }
			
			if (!empty($return_data['c_usr'])):
			?>
			<tr class="fs-12">
				<td><?php echo $no ?></td>
				
				<td><?php echo $return_data['c_usr'] ?></td>
				<td><?php echo $n->ip_address ?></td>
				<td><?php echo $return_data['browser'] ?></td>
				<td><?php echo $return_data['platform'] ?></td>
				<td><?php echo date("d-m-Y H:i:s",$return_data['__ci_last_regenerate']) ?></td>
				<td>
					<a href="<?php echo base_url(); ?>/admin/monitoring/logoutpaksa/<?php echo $n->id; ?>" class="btn btn-danger">Logout</a>
				</td>
			</tr>
			<?php $no++; ?>
			<?php endif ?>
			<?php endforeach ?>
		</tbody>
	</table>
</div>