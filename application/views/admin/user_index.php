<button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah
	User</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form User</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('Admin/user/simpan') ?>" method="post">
					<div class="mb-3">
						<label class="col-form-label">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username" required>
					</div>
					<div>
						<label class="col-form-label">Nama</label>
						<input type="text" class="form-control" name="nama" placeholder="Nama" required>
					</div>
					<div>
						<label class="col-form-label">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password" required>
					</div>
					<div>
						<label class="col-form-label">Level</label>
						<select class="form-control" name="level">
							<option value="Admin">Admin</option>
							<option value="User">User</option>
							<option value="Kontributor">Kontributor</option>
						</select>
					</div>
					<button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary mt-2">Tambah</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="ngilang">
	<?= $this->session->flashdata('alert',true) ?>
</div>
<div class="users-table table-wrapper">
	<table class="posts-table " id="tabel-data" width="100%">
		<thead>
			<tr class="users-table-info">
				<th>#</th>
				<th>Username</th>
				<th>Nama</th>
				<th>Level</th>
				<!-- <th>Profil</th> -->
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($user as $us){ ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $us['username']; ?></td>
				<td><?= $us['nama']; ?></td>
				<td><?= $us['level']; ?></td>
				<!-- <div class="pages-table-img">
                        <picture>
                            <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp">
                                <img src="./img/avatar/avatar-face-03.png" alt="User Name"></picture>
                            </div>
                        </td> -->
				<td>
					<span class="p-relative">
						<button class="dropdown-btn transparent-btn" type="button" title="More info">
							<div class="sr-only">More info</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true">
								<circle cx="12" cy="12" r="1"></circle>
								<circle cx="19" cy="12" r="1"></circle>
								<circle cx="5" cy="12" r="1"></circle>
							</svg>
						</button>
						<ul class="users-item-dropdown dropdown">
							<li>
								<a href="<?= base_url('admin/user/edit_data/'.$us['id_user']);?>" data-bs-toggle="modal"
									data-bs-target="#exampleModal1<?= $us['id_user'] ?>">Edit</a>
							</li>
							<li>
								<a href="<?= base_url('admin/user/hapus_data/'.$us['id_user']);?>" onClick="return confirm('Apakah Anda Mau Menghapus Data Ini?')">Hapus</a>
							</li>
						</ul>
						<div class="modal fade" id="exampleModal1<?= $us['id_user'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
							aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Form User</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form action="<?= base_url('Admin/user/update') ?>" method="post">
                                        <input type="hidden" name="id_user" value="<?= $us['id_user'] ?>">
											<div class="mb-3">
												<label class="col-form-label">Username</label>
												<input type="text" class="form-control" name="username"
                                                value="<?= $us['username'] ?>" readonly>
											</div>
											<div>
												<label class="col-form-label">Nama</label>
												<input type="text" class="form-control" name="nama" value="<?= $us['nama'] ?>"
													required>
											</div>
											<button type="button" class="btn btn-secondary mt-2"
												data-bs-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary mt-2">Update</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</span>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
