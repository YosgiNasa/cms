<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free HTML Templates" name="keywords">
	<meta content="Free HTML Templates" name="description">
	<!-- Favicon -->
	<link href="<?= base_url('assets/Public/')?>img/favicon.ico" rel="icon">
	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
		rel="stylesheet">
	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/Public/')?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/Public/')?>lib/animate/animate.min.css" rel="stylesheet">
	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/Public/')?>css/bootstrap.min.css" rel="stylesheet">
	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/Public/')?>css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Topbar Start -->

	<div class="container-fluid bg-dark px-5 d-none d-lg-block">
		<div class="row gx-0">
			<div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
				<marquee>
					<div class="d-inline-flex align-items-center" style="height: 45px;">
						<small class="me-3 text-light"><i
								class="fa fa-map-marker-alt me-2"></i><?= $config->alamat; ?></small>
						<small class="me-3 text-light"><i
								class="fa fa-phone-alt me-2"></i><?= $config->no_wa; ?></small>
						<small class="text-light"><i class="fa fa-envelope-open me-2"></i><?= $config->email; ?></small>
					</div>
				</marquee>
			</div>
			<div class="col-lg-4 text-center text-lg-end">
				<div class="d-inline-flex align-items-center" style="height: 45px;">
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
						href="https://www.facebook.com/<?= $config->facebook; ?>" target="blank"><i
							class="fab fa-facebook-f fw-normal"></i></a>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
						href="https://www.instagram.com/<?= $config->instagram; ?>" target="blank"><i
							class="fab fa-instagram fw-normal"></i></a>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
						href="https://www.twitter.com/<?= $config->x; ?>" target="blank"><i
							class="fab fa-twitter fw-normal"></i></a>
				</div>
			</div>
			
		</div>
	</div>

	<div class="container-fluid position-relative p-0">
				<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
					<a href="<?= base_url(); ?>" class="navbar-brand p-0">
						<h1 class="m-0"><i class="fa fa-user-tie me-2"></i><?= $config->judul_website ?></h1>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarCollapse" >
						<span class="fa fa-bars"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<div class="navbar-nav ms-auto py-0">
							<a href="<?= base_url(); ?>" class="nav-item nav-link">Home</a>
							<a href="<?= base_url('home/galeri'); ?>" class="nav-item nav-link">Galeri</a>
							<div class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
								<div class="dropdown-menu m-0">
									<?php foreach($kategori as $kk ){ ?>
									<a href="<?= base_url('home/kategori/'.$kk['id_kategori']) ?>"
										class="dropdown-item"><?= $kk['nama_kategori'] ?></a>
									<?php } ?>
								</div>
							</div>
							<a href="<?= base_url('home/contact'); ?>" class="nav-item nav-link">Contact</a>
						</div>
						<butaton type="button" class="btn text-primary ms-3"><a href="<?= base_url('auth') ?>"
								class="btn btn-outline-info">Login</a></butaton>
					</div>
				</nav>
			</div>
	<!-- Topbar End -->
	<!-- Navbar Start -->

	<?= $contents; ?>

	<div class="col-lg-4">
		<!-- Search Form Start -->
		<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
			<form action="<?= base_url('home/index') ?>">
				<div class="input-group">
					<input type="text" class="form-control p-3" name="keyword" placeholder="Keyword">
					<button type="submit" class="btn btn-primary px-4">Cari</Button>
			</form>
		</div>

	</div>
	<!-- Search Form End -->

	<!-- Category Start -->
	<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
		<div class="section-title section-title-sm position-relative pb-3 mb-4">
			<h3 class="mb-0">Kategori Konten</h3>
		</div>
		<div class="link-animated d-flex flex-column justify-content-start">
			<?php foreach($kategori as $ka ){ ?>
			<a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2"
				href="<?= base_url('home/kategori/'.$ka['id_kategori']) ?>"><i
					class="bi bi-arrow-right me-2"></i><?= $ka['nama_kategori'] ?></a>
			<?php }?>
		</div>
	</div>
	<!-- Category End -->

	<!-- Recent Post Start -->
	<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
		<div class="section-title section-title-sm position-relative pb-3 mb-4">
			<h3 class="mb-0">Recent Post</h3>
		</div>
		<?php foreach($post as $re){ ?>
		<div class="d-flex rounded overflow-hidden mb-3">
			<img class="img-fluid" src="<?= base_url('assets/upload/konten/'.$re['foto']) ?>"
				style="width: 100px; height: 100px; object-fit: cover;" alt="">
			<a href="<?= base_url('home/artikel/'.$re['slug']) ?>"
				class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
				<?= $re['judul'] ?>
			</a>
		</div>
		<?php } ?>
	</div>
	<!-- Recent Post End -->
	</div>
	<!-- Sidebar End -->
	</div>
	</div>
	</div>
	<!-- Blog End -->


	<!-- Vendor Start -->


	<!-- Footer Start -->
	<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
		<div class="container">
			<div class="row gx-5">
				<div class="col-lg-4 col-md-6 footer-about">
					<div
						class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
						<a href="#" class="navbar-brand">
							<h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i><?= $config->judul_website ?>
							</h1>
						</a>
						<p class="mt-3 mb-4"><?= $config->profil_website ?></p>
					</div>
				</div>
				<div class="col-lg-8 col-md-6">
					<div class="row gx-5">
						<div class="col-lg-4 col-md-12 pt-5 mb-5">
							<div class="section-title section-title-sm position-relative pb-3 mb-4">
								<h3 class="text-light mb-0">Contact</h3>
							</div>
							<div class="d-flex mb-2">
								<i class="bi bi-geo-alt text-primary me-2"></i>
								<p class="mb-0"><?= $config->alamat; ?></p>
							</div>
							<div class="d-flex mb-2">
								<i class="bi bi-envelope-open text-primary me-2"></i>
								<p class="mb-0"><?= $config->email; ?></p>
							</div>
							<div class="d-flex mb-2">
								<i class="bi bi-telephone text-primary me-2"></i>
								<p class="mb-0"><?= $config->no_wa; ?></p>
							</div>
							<div class="d-flex mt-4">
								<a class="btn btn-primary btn-square me-2"
									href="https://www.twitter.com/<?= $config->x; ?>" target="blank"><i
										class="fab fa-twitter fw-normal"></i></a>
								<a class="btn btn-primary btn-square me-2"
									href="https://www.facebook.com/<?= $config->facebook; ?>" target="blank"><i
										class="fab fa-facebook-f fw-normal"></i></a>
								<a class="btn btn-primary btn-square"
									href="https://www.instagram.com/<?= $config->instagram; ?>" target="blank"><i
										class="fab fa-instagram fw-normal"></i></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
							<div class="section-title section-title-sm position-relative pb-3 mb-4">
								<h3 class="text-light mb-0">Quick Links</h3>
							</div>
							<div class="link-animated d-flex flex-column justify-content-start">
								<a class="text-light mb-2" href="#"><i
										class="bi bi-arrow-right text-primary me-2"></i>Home</a>
								<?php foreach($kategori as $ka ){ ?>
								<a class="text-light mb-2"
									href="<?= base_url('home/kategori/'.$kk['id_kategori']) ?>"><i
										class="bi bi-arrow-right text-primary me-2"></i><?= $ka['nama_kategori'] ?></a>
								<?php }?>
								<a class="text-light mb-2" href="<?= base_url('home/auth') ?>"><i
										class="bi bi-arrow-right text-primary me-2"></i>Login</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
							<div class="section-title section-title-sm position-relative pb-3 mb-4">
								<h3 class="text-light mb-0">Recent Post</h3>
							</div>
							<?php foreach($post as $po ){ ?>
							<div class="link-animated d-flex flex-column justify-content-start">
								<a class="text-light mb-2" href="<?= base_url('home/artikel/'.$po['slug']) ?>">
									<i class="bi bi-arrow-right text-primary me-2"><?= $po['judul'] ?></i></a>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid text-white" style="background: #061429;">
		<div class="container text-center">
			<div class="row justify-content-end">
				<div class="col-lg-8 col-md-6">
					<div class="d-flex align-items-center justify-content-center" style="height: 75px;">
						<p class="mb-0">&copy; <a class="text-white border-bottom"
								href="#"><?= $config->judul_website ?></a>. All
							Rights Reserved.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Back to Top -->
	<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/Public/')?>lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/Public/')?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/Public/')?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/Public/')?>lib/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/Public/')?>lib/owlcarousel/owl.carousel.min.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url('assets/Public/')?>js/main.js"></script>
</body>

</html>
