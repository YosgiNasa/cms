<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Startup - Startup Website Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free HTML Templates" name="keywords">
	<meta content="Free HTML Templates" name="description">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="icon">

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

<body class="bg-dark">
	<div class="container d-flex align-items-center justify-content-center "
		style="margin-top:150px;margin-bottom:100px;">
		<div class="col-lg-4 col-md-5">
            <div class="d-flex flex-column align-items-center justify-content-center text-center  bg-primary p-4">
                <a href="#" class="navbar-brand">
                    <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Web Cms</h1>
				</a>
				<p class="">Silahkan Login Terlebih Dahulu</p>
                <div id="ngilang">
                    <?= $this->session->flashdata('alert',true) ?>
                </div>
				<form action="<?= base_url('auth/login') ?>" method="post">
					<div class="input-group">
						<input type="text" class="form-control p-3" name="username" placeholder="Username">
					</div>
					<div class="input-group">
						<input type="password" class="form-control p-3" name="password" placeholder="Password">
					</div>
					<button type="submit" class="mt-2 btn btn-dark align-content-end col-12">Login</button>
				</form>
			</div>
		</div>
	</div>
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
    <script>
	$('#ngilang').delay('slow').slideDown('slow').delay(4000).slideUp(600);

</script>
</body>

</html>
