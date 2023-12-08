<button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah
	Kategori</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Kategori</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('Admin/kategori/simpan') ?>" method="post">
					<div class="mb-3">
						<label class="col-form-label">Nama Kategori</label>
						<input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori">
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
<div class="card">
<div class="users-table table-wrapper card-header">
	<table class="posts-table card-body" id="tabel-data" width="100%">
		<thead>
			<tr class="users-table-info">
				<th>No</th>
				<th>Nama Kategori</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($kategori as $us){ ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $us['nama_kategori']; ?></td>
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
							<a href="<?= base_url('admin/kategori/edit_data/'.$us['id_kategori']);?>"
								data-bs-toggle="modal" data-bs-target="#exampleModal1<?= $us['id_kategori'] ?>">Edit</a>
						</li>
						<li>
							<a href="<?= base_url('admin/kategori/hapus_data/'.$us['id_kategori']);?>"onClick="return confirm('Apakah Anda Mau Menghapus Data Ini?')">Hapus</a>
						</li>
					</ul>
					<div class="modal fade" id="exampleModal1<?= $us['id_kategori'] ?>" tabindex="-1"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Form Kategori</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="<?= base_url('Admin/kategori/update') ?>" method="post">
										<input type="hidden" name="id_kategori" value="<?= $us['id_kategori'] ?>">
										<div>
											<label class="col-form-label">Nama Kategori</label>
											<input type="text" class="form-control" name="nama_kategori"
												value="<?= $us['nama_kategori'] ?>" required>
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
</div>
