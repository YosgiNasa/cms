<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('_css.php'); ?>
</head>

<body>

	<div class="layer"></div>
	<!-- ! Body -->
	<div class="page-flex">
		<?php require_once('_sidebar.php'); ?>
		<div class="main-wrapper">
			<!-- ! Main nav -->
			<?php require_once('_navbar.php'); ?>
			<!-- ! Main -->
			<main class="main users chart-page" id="skip-target">
				<div class="container">
					<?= $contents; ?>
			</main>
			<!-- ! Footer -->
			<?php require_once('_footer.php'); ?>
		</div>
	</div>
	<?php require_once('_js.php'); ?>
	<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
</body>

</html>
