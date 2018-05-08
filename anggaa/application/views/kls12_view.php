<?php $query=$this->db->get('rmskls12'); ?>
<div class="panel panel-default" style="
	border-radius: 0px;">
	<div class="panel-heading">
		<h4 style="padding: 0px; margin:0 ;">
		<strong>data rumus kelas 12</strong></h4>
	</div>
	<div class="panel-body">
		<a href="<?php echo base_url('index.php/kelas12/tambah'); ?>" class="btn btn-success">tambah data </a>

		<br>
		<table class="table table-bordered table-striped" style="font-size:12px;">
		<thead>
			<tr>
				<th>NO</th>
				<th>JUDUL RUMUS</th>
				<th>RUMUS</th>
				<th>AKSI</th>

			</tr>
		</thead>
		<tbody>
		<?php
			if ($query->num_rows() > 0){
				$no = 0;
				foreach ($query -> result()  as $row) {
					$no++;
					 echo '
					 <tr>
					 	<td>'.$no.'</td>
					 	<td>'.$row->judul_rumus.'</td>
					 	<td>'.$row->rumus.'</td>
					 	<td>
					 		<a href="'.base_url('index.php/kelas12/edit/'.$row->no).'" class="btn btn-success" btn-xs">edit</a>
					 		<a href="'.base_url('index.php/kelas12/hapus/'.$row->no).'" class="btn btn-danger" btn-xs">hapus</a>
					 	</td>
					 </tr>';
				}
			}else{
				echo '
			<tr>
				<td class="text-center" colspan="8">data masih kosong</td>
			</tr>';
			}
		?>
		</tbody>
		</table>
	</div>
</div>
