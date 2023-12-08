
<div class="container py-5">
	<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
		<h5 class="fw-bold text-primary text-uppercase"><?= $judul; ?></h5>
		<h1 class="mb-0">Berikan Saranmu Untuk Kita :)</h1>
	</div>
	<div class="row g-5 mb-5">
		<div class="col-lg-4">
			<div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s"
				style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
				<div class="bg-primary d-flex align-items-center justify-content-center rounded"
					style="width: 60px; height: 60px;">
					<i class="fa fa-phone-alt text-white"></i>
				</div>
				<div class="ps-4">
					<h5 class="mb-2">NO Kita</h5>
					<p class="text-primary mb-0"><?= $config->no_wa; ?></p>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s"
				style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
				<div class="bg-primary d-flex align-items-center justify-content-center rounded"
					style="width: 60px; height: 60px;">
					<i class="fa fa-envelope-open text-white"></i>
				</div>
				<div class="ps-4">
					<h5 class="mb-2">Email Kita</h5>
					<p class="text-primary mb-0"><?= $config->email; ?></p>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s"
				style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
				<div class="bg-primary d-flex align-items-center justify-content-center rounded"
					style="width: 60px; height: 60px;">
					<i class="fa fa-map-marker-alt text-white"></i>
				</div>
				<div class="ps-4">
					<h5 class="mb-2">Alamat Kita</h5>
					<p class="text-primary mb-0"><?= $config->alamat; ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="row g-5">
		<div id="ngilang">
			<?= $this->session->flashdata('alert',true) ?>
		</div>
		<div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s"
			style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
			<form action="<?= base_url('home/tambah'); ?>" method="post">
				<div class="row g-3">
					<div class="col-md-12">
						<input type="text" class="form-control border-0 bg-light px-4" name="nama"
							placeholder="Masukkan Nama" style="height: 55px;">
					</div>
					<div class="col-12">
						<input type="text" class="form-control border-0 bg-light px-4" name="email"
							placeholder="Masukkan Email" style="height: 55px;">
					</div>
					<div class="col-12">
						<textarea class="form-control border-0 bg-light px-4 py-3" rows="4" name="isi_saran"
							placeholder="Saran"></textarea>
					</div>
					<div class="col-12">
						<button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s"
			style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
			<iframe class="position-relative rounded w-100 h-100"
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15820.854355410776!2d110.91347378990201!3d-7.551673557666287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a19c6369c16d9%3A0x5027a76e356bce0!2sKaling%2C%20Kec.%20Tasikmadu%2C%20Kabupaten%20Karanganyar%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1700550313006!5m2!1sid!2sid"
				width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;"
				allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"
				style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
</div>
