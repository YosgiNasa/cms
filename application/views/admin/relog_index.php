<h3 class="mb-2 mt-2">Recent Login</h3>
<div class="card">
	<div class="users-table table-wrapper card-header">
		<table class="posts-table card-body" id="tabel-data" width="100%">
			<thead>
				<tr class="users-table-info">
					<th>No</th>
					<th>Nama</th>
					<th>Username</th>
					<!-- <th>Foto</th> -->
					<th>Date/Time</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($login as $us){ ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $us['nama'] ?></td>
					<td><?= $us['username']; ?></td>
					<!-- <td><a href="<?= base_url('assets/upload/konten/'.$us['foto']) ?>" target="blank"><img src="<?= base_url('assets/upload/konten/'.$us['foto']) ?>" alt=""></a></td> -->
					<td><?= $us['last_login']; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>