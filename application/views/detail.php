<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"
	style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
	<div class="container-fluid bg-primary py-5">
		<div class="row py-5">
			<div class="col-12 pt-lg-5 mt-lg-5 text-center">
				<a href="#content">
					<h1 class="display-4 text-white animated zoomIn"><?= $konten->judul; ?></h1>
				</a>
				<a href="" class="h5 text-white">Home</a>
				<i class="far fa-circle text-white px-2"></i>
				<a href="" class="h5 text-white">Author : <?= $konten->nama ?></a>
			</div>
		</div>
	</div>
</div>
<!-- Navbar End -->

<!-- Full Screen Search Start -->
<!-- Full Screen Search End -->


<!-- Blog Start -->

<div class="container py-5">
	<div class="row g-5">
		<div class="col-lg-8">	
			<!-- Blog Detail Start -->
			<div class="mb-5">
				<h1 id="content" class="mb-4"><?= $konten->judul; ?></h1>
				<div class="d-flex mb-3">
					<small class="me-3"><i class="far fa-user text-primary me-2"></i><?= $konten->nama; ?></small>
					<small><i class="far fa-calendar-alt text-primary me-2"></i><?= $konten->tanggal; ?></small>
				</div>
				<img class="img-fluid w-100 rounded mb-5" src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>"
					alt="">
				<p><?= $konten->keterangan; ?></p>
				<a class="text-uppercase" href="<?= base_url() ?>"><i class="bi bi-arrow-left"></i>Back</a>
			</div>
			<!-- Blog Detail End -->

		</div>
