<div class="container py-5">
	<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
		<h5 class="fw-bold text-primary text-uppercase">Beberapa Moment Dari Kita :)</h5>
		<h1 class="mb-0" id="galeri"><?= $judul ?></h1>
	</div>
	<div class="row g-5">
		<?php foreach($galeri as $ga){ ?>
		<div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s"
			style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
			<div class="team-item bg-light rounded overflow-hidden">
				<div class="team-img position-relative overflow-hidden">
					<img class="img-fluid w-100" src="<?= base_url('assets/upload/galeri/'.$ga['foto']) ?>" alt="">
				</div>
				<div class="text-center py-4">
					<h4 class="text-primary"><?= $ga['nama'] ?></h4>
					<p class="text-uppercase m-0"><?= $ga['judul'] ?></p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

