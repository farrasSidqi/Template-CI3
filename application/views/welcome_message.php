<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php $this->load->view('template/head'); ?>

<body>
	<div class="container-scroller">
		<!-- <div class="row p-0 m-0 proBanner" id="proBanner">
			<div class="col-md-12 p-0 m-0">
				<div class="card-body card-body-padding d-flex align-items-center justify-content-between">
					<div class="ps-lg-1">
						<div class="d-flex align-items-center justify-content-between">
							<p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
							<a href="https://www.bootstrapdash.com/product/plus-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-between">
						<a href="https://www.bootstrapdash.com/product/plus-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
						<button id="bannerClose" class="btn border-0 p-0">
							<i class="mdi mdi-close text-white me-0"></i>
						</button>
					</div>
				</div>
			</div>
		</div> -->
		<!-- partial:partials/_sidebar.html -->
		<?php $this->load->view('template/menu'); ?>

		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_settings-panel.html -->
			<div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
			<div id="theme-settings" class="settings-panel">
				<i class="settings-close mdi mdi-close"></i>
				<p class="settings-heading">SIDEBAR SKINS</p>
				<div class="sidebar-bg-options selected" id="sidebar-default-theme">
					<div class="img-ss rounded-circle bg-light border me-3"></div>Default
				</div>
				<div class="sidebar-bg-options" id="sidebar-dark-theme">
					<div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
				</div>
				<p class="settings-heading mt-2">HEADER SKINS</p>
				<div class="color-tiles mx-0 px-4">
					<div class="tiles default primary"></div>
					<div class="tiles success"></div>
					<div class="tiles warning"></div>
					<div class="tiles danger"></div>
					<div class="tiles info"></div>
					<div class="tiles dark"></div>
					<div class="tiles light"></div>
				</div>
			</div>
			<!-- partial -->
			<!-- partial:partials/_navbar.html -->
			<?php $this->load->view('template/menu_atas'); ?>

			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper pb-0">
					<?php

					if (@$konten == null) {
						$this->load->view('demo', @$data);
					} else {
						foreach ($konten as $key => $isi) {
							$this->load->view($isi);
						}
					}


					?>

				</div>
				<?php $this->load->view('template/footer'); ?>