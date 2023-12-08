<aside class="sidebar">
	<div class="sidebar-start">
		<div class="sidebar-head">
			<a href="<?= base_url(); ?>" class="logo-wrapper" title="Home">
				<span class="sr-only">Home</span>
				<span class="icon logo" aria-hidden="true"></span>
				<div class="logo-text">
					<span class="logo-title">Home</span>
					<span class="logo-subtitle"><?= $judul_halaman ?></span>
				</div>

			</a>
			<button class="sidebar-toggle transparent-btn" title="Menu" type="button">
				<span class="sr-only">Toggle menu</span>
				<span class="icon menu-toggle" aria-hidden="true"></span>
			</button>
		</div>
		<?php $menu = $this->uri->segment(2);  ?> 
		<div class="sidebar-body">
			<ul class="sidebar-body-menu">
				<li>
					<a class="<?php if($menu=='home'){echo 'active';} ?>" href="<?= base_url('admin/home') ?>">
						<span class="icon home" aria-hidden="true"></span>Dashboard</a>
				</li>
				<li>
					<a class="show-cat-btn <?php if($menu=='user'||$menu=='konfigurasi'||$menu=='konten'||$menu=='kategori'||$menu=='caraousel'){echo 'active';} ?>" href="##">
						<span class="icon category" aria-hidden="true"></span>Menu
						<span class="category__btn transparent-btn" title="Open list">
							<span class="sr-only">Open list</span>
							<span class="icon arrow-down" aria-hidden="true"></span>
						</span>
					</a>
					<ul class="cat-sub-menu">
						<?php if($this->session->userdata('level')=='Admin'){ ?>
							<li>
							<a class="<?php if($menu=='user'){echo 'active';} ?>" href="<?= base_url('admin/user') ?>">
								<span class="icon user-3"></span>User
							</a>
						</li>
						<li>
							<a class="<?php if($menu=='konfigurasi'){echo 'active';} ?>" href="<?= base_url('admin/konfigurasi') ?>">
								<span class="icon edit" aria-hidden="true"></span>Konfigurasi</a>
						</li>
						<?php } ?>
						<li>
							<a class="<?php if($menu=='konten'){echo 'active';} ?>" href="<?= base_url('admin/konten') ?>">
								<span class="icon document" aria-hidden="true"></span>Konten
								</span>
							</a>
						</li>
						<li>
							<a class="<?php if($menu=='kategori'){echo 'active';} ?>" href="<?= base_url('admin/kategori') ?>">
								<span class="icon folder" aria-hidden="true"></span>Kategori Konten
								</span>
							</a>
						</li>
						<li>
							<a class="<?php if($menu=='caraousel'){echo 'active';} ?>" href="<?= base_url('admin/caraousel') ?>">
								<span class="icon image" aria-hidden="true"></span>Caraousel
								</span>
							</a>
						</li>
						<li>
							<a class="<?php if($menu=='relog'){echo 'active';} ?>" href="<?= base_url('admin/relog') ?>">
								<span class="icon setting" aria-hidden="true"></span>Recent Login
								</span>
							</a>
						</li>
						<li>
							<a class="<?php if($menu=='Galeri'){echo 'active';} ?>" href="<?= base_url('admin/galeri') ?>">
								<span class="icon image" aria-hidden="true"></span>Galeri
								</span>
							</a>
						</li>
						<li>
							<a class="<?php if($menu=='Saran'){echo 'active';} ?>" href="<?= base_url('admin/saran') ?>">
								<span class="icon message" aria-hidden="true"></span>Saran
								</span>
							</a>
						</li>

					</ul>
				</li>
			</ul>
		</div>
	</div>
</aside>
