<button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah
	Konten</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Konten</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('Admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
					<div class="mb-3">
						<label class="col-form-label">Judul</label>
						<input type="text" class="form-control" name="judul" placeholder="Judul">
					</div>
					<div class="mb-3">
						<label class="col-form-label">Kategori</label>
						<select name="id_kategori" class="form-control" id="">
							<?php foreach($kategori as $us){ ?>
							<option value="<?= $us['id_kategori'] ?>"><?= $us['nama_kategori'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="mb-3">
						<label class="col-form-label">Keterangan</label>
						<textarea name="keterangan" class="form-control"></textarea>
					</div>
					<div class="mb-3">
						<label class="col-form-label">Foto Ukuran(16:9)</label>
						<input type="file" class="form-control" name="foto" accept="image/png, image/jpeg" />
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
				<th>Judul</th>
				<th>Kategori</th>
				<th>Tanggal</th>
				<th>Kreator</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($konten as $us){ ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $us['judul']; ?></td>
				<td><?= $us['nama_kategori']; ?></td>
				<td><?= $us['tanggal']; ?></td>
				<td><?= $us['nama']; ?></td>
				<td><a href="<?= base_url('assets/upload/konten/'.$us['foto']) ?>" target="blank"><img
							src="<?= base_url('assets/upload/konten/'.$us['foto']) ?>" alt=""></a></td>
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
								<a href="<?= base_url('admin/konten/edit_data/'.$us['foto']);?>" data-bs-toggle="modal"
									data-bs-target="#exampleModal1<?= $no; ?>">Edit</a>
							</li>
							<li>
								<a href="<?= base_url('admin/konten/hapus_data/'.$us['foto']);?>"
									onClick="return confirm('Apakah Anda Mau Menghapus Data Ini?')">Hapus</a>
							</li>
						</ul>
						<div class="modal fade" id="exampleModal1<?= $no; ?>" tabindex="-1"
							aria-labelledby="exampleModalLabel1" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel1"><?= $us['judul']; ?></h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form action="<?= base_url('Admin/konten/update') ?>" method="post"
											enctype='multipart/form-data'>
											<input type="hidden" name="nama_foto" value="<?= $us['foto']; ?>">
											<div>
												<label class="col-form-label">Judul</label>
												<input type="text" class="form-control" name="judul"
													value="<?= $us['judul']; ?>">
											</div>
											<div>
												<label class="col-form-label">Kategori</label>
												<select name="id_kategori" class="form-control" id="">
													<?php foreach($kategori as $ui){ ?>
													<option
														<?php if($ui['id_kategori']==$us['id_kategori']){ echo"selected"; } ?>
														value="<?= $ui['id_kategori'] ?>"><?= $ui['nama_kategori'] ?>
													</option>
													<?php } ?>
												</select>
											</div>
											<div>
												<label class="col-form-label">Keterangan</label>
												<textarea name="keterangan" 	
													class="form-control"><?= $us['keterangan']; ?></textarea>
											</div>
											<div>
												<label class="col-form-label">Foto Ukuran(2:3)</label>
												<input type="file" class="form-control" name="foto"
													accept="image/png, image/jpeg" />
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
