<div id="ngilang">
	<?= $this->session->flashdata('alert',true) ?>
</div>
<form action="<?= base_url('Admin/konfigurasi/update') ?>" method="post">
	<div class="mb-3">
		<label class="col-form-label">Judul Web</label>
		<input type="text" class="form-control" name="judul_website" value="<?= $konfig->judul_website; ?>">
	</div>
	<div class="mb-3">
		<label class="col-form-label">Profil Web</label>
		<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
	</div>
	<div class="mb-3">
		<label class="col-form-label">Instagram</label>
		<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>">
	</div>
	<div class="mb-3">
		<label class="col-form-label">Facebook</label>
		<input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>">
	</div>
	<div class="mb-3">
		<label class="col-form-label">Tik Tok</label>
		<input type="text" class="form-control" name="tiktok" value="<?= $konfig->tiktok; ?>">
	</div>
	<div class="mb-3">
		<label class="col-form-label">Twitter</label>
		<input type="text" class="form-control" name="x" value="<?= $konfig->x; ?>">
	</div>
	<div class="mb-3">
		<label class="col-form-label">No Telp</label>
		<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>">
	</div>
	<div class="mb-3">
		<label class="col-form-label">Alamat</label>
		<input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>">
	</div>
	<div class="mb-3">
		<label class="col-form-label">Email</label>
		<input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>">
	</div>
	<button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary mt-2">Update</button>
</form>
