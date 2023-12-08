<div class="col-xl-12">
<div id="ngilang">
	<?= $this->session->flashdata('alert',true) ?>
</div>
	<form action="<?= base_url('Admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
		<div class="card">
			<h5 class="card-header">File Input</h5>
			<div class="card-header">
				<div class="col mb-3">
					<label class="col-form-label">Judul :</label>
					<input type="text" class="form-control" name="judul" placeholder="Judul" required>
				</div>
				<label class="col-form-label">Pilih File Dengan Ukuran Landscape :</label>
				<div class="input-group">
					<input type="file" class="form-control" name="foto" accept="image/png, image/jpeg">
					<button class="btn btn-primary" type="submit">Tambah</button>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="row">
<?php foreach($caraousel as $ca){ ?>
	<div class="card col-lg-4 col-md-6 col-sm-12 mb-3 mt-3 wow slideInUp" data-wow-delay="0.1s"
		style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
		<div class="card-body">
			<img class="img-fluid" src="<?= base_url('assets/upload/caraousel/'.$ca['foto']) ?>" alt="">
			<a class="position-absolute top-0 start-0 bg-dark text-white rounded-end mt-5 py-2 px-4"
				href="<?= base_url('assets/upload/caraousel/'.$ca['foto']) ?>" target="blank">Lihat foto</a>
			<div class="p-4">
				<div class="d-flex mb-3">
					<small class="me-3"><i class="far fa-user text-primary me-2"></i><?= $ca['nama']; ?></small>
					<small><i class="far fa-calendar-alt text-primary me-2"></i><?= $ca['tanggal']; ?></small>
				</div>
				<h5 class="mb-3">Nama Judul :</h5>
				<p><?= $ca['judul']; ?></p>
				<a class="btn btn-sm mt-3 btn-danger" href="<?= base_url('admin/caraousel/hapus_data/'.$ca['foto']);?>"
					onClick="return confirm('Apakah Anda Mau Menghapus Data Ini?')"><i class="fa fa-trash"></i></a>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
