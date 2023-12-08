<nav class="main-nav--bg">
	<div class="container main-nav">
		<div class="main-nav-start"></div>
		<div class="main-nav-end">
			<button class="sidebar-toggle transparent-btn" title="Menu" type="button">
				<span class="sr-only">Toggle menu</span>
				<span class="icon menu-toggle--gray" aria-hidden="true"></span>
			</button>
			<div class="nav-user-wrapper">
				<button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
					<span class="sr-only">My profile</span>
					<span class="nav-user-img">
						<picture>
							<source srcset="<?= base_url('assets/Admin')?>/img/avatar/avatar-illustrated-02.webp" type="image/webp"><img
								src="<?= base_url('assets/Admin')?>img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
					</span>
				</button>
				<ul class="users-item-dropdown nav-user-dropdown dropdown">
					<li>
						
					</li>
					<li>
						<a class="danger" href="<?= base_url('auth/logout')?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="feather feather-log-out" aria-hidden="true">
								<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
								<polyline points="16 17 21 12 16 7"></polyline>
								<line x1="21" y1="12" x2="9" y2="12"></line>
							</svg>
							<span>Log out</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
