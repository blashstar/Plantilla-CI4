<?php

use Ouzo\Utilities\Arrays;

$enlaces = [
	(object)[
		"titulo" => "Tablas",
		"icono" => "table",
		"enlaces" => [
			(object)[
				"id" => "admin_logout",
				"url" => "admin/sesion/salir",
				"titulo" => "Salir",
				"icono" => "sign-out-alt",
			]
		]
	]
];

?>

<!-- Brand Logo -->
<a href="<?= site_url("/") ?>" class="brand-link text-center">
	<img src="<?= site_url("assets/admin/img/logo.svg") ?>" alt="Logo" class="" width="80px">
	<!-- <span class="brand-text font-weight-light" style="visibility: hidden;"	>STRINGNET LAB</span> -->
</a>

<!-- Sidebar -->
<div class="sidebar">
	<!-- Sidebar user panel (optional) -->
	<?= $this->include('admin/common/usuario') ?>

	<!-- SidebarSearch Form -->
	<?= '' // $this->include('admin/common/busqueda')
	?>

	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
			with font-awesome or any other icon font library -->
			<?php foreach ($enlaces as $enlace) : ?>
			<li class="nav-item menu-open active">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-<?= $enlace->icono ?>"></i>
					<p>
						<?= $enlace->titulo ?>
						<?php if ($enlace->enlaces) : ?>
						<i class="right fas fa-angle-left"></i>
						<?php endif; ?>
					</p>

				</a>

				<?php if ($enlace->enlaces) : ?>
				<ul class="nav nav-treeview">
					<?php foreach ($enlace->enlaces as $subenlace) : ?>
					<li class="nav-item">
						<a href="<?= site_url($subenlace->url) ?>" class="nav-link">
							<i class="fas fa-<?= $subenlace->icono ?> nav-icon"></i>
							<p><?= $subenlace->titulo ?></p>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</nav>
	<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
