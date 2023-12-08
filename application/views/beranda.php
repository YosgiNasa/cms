
	<!-- Navbar End -->
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<?php $no=1; foreach($caraousel as $cc){ ?>
			<div class="carousel-item <?php if($no==1){echo 'active' ;} ?>">
				<img src="<?= base_url('assets/upload/caraousel/'.$cc['foto']) ?>" class="d-block w-100">
			</div>
			<?php $no++; } ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Blog Start -->
	<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container py-5">
	<div class="row g-5">
		<!-- Blog list Start -->
		<div class="col-lg-8">
			<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
				<div class="section-title section-title-sm position-relative pb-3 mb-4">
					<h3 class="mb-0">Latest Articles From Blog</h3>
				</div>
			</div>
			<div class="row g-5">
				<?php $no=1; foreach($results as $ko){ ?>
				<div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
					<div class="blog-item bg-light rounded overflow-hidden">
						<div class="blog-img position-relative overflow-hidden">
							<img class="img-fluid h-100 w-100"
								src="<?= base_url('assets/upload/konten/'.$ko['foto']) ?>" alt="">
							<a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
								href="<?= base_url('assets/upload/konten/'.$ko['foto']) ?>" target="blank">Lihat
								Foto</a>
						</div>
						<div class="p-4">
							<div class="d-flex mb-3">
								<small class="me-3"><i
										class="far fa-user text-primary me-2"></i><?= $ko['nama']; ?></small>
								<small><i
										class="far fa-calendar-alt text-primary me-2"></i><?= $ko['tanggal']; ?></small>
							</div>
							<h4 class="mb-3"><?= $ko['judul']; ?></h4>
							<p><?= $ko['nama_kategori']; ?></p>
							<a class="text-uppercase" href="<?= base_url('home/artikel/'.$ko['slug']) ?>">Baca
								Selengkapnya <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="col-12 wow slideInUp" data-wow-delay="0.1s">
					<?= $pagination;  ?>
				</div>
			</div>
			</div>

			<!-- Blog list End -->

			<!-- Sidebar Start -->
