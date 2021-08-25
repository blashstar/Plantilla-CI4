<?php

$clases_body = [
	"hold-transition",
	// "dark-mode",
	// "sidebar-collapse",
	"sidebar-mini"
];

$clases = array_merge(
	$clases_body,
	@$clases ?: []
);

?>

<!DOCTYPE html>
<html lang="es">

	<head>
		<?= $this->include('admin/common/head') ?>
	</head>

	<body class="<?= join(" ", $clases) ?>">
		<div class="wrapper">
			<?= $this->include('admin/common/superior') ?>
			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<?= $this->include('admin/common/lateral') ?>
			</aside>


			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<div class="container-fluid">
						<?= $this->include('admin/common/header') ?>
					</div><!-- /.container-fluid -->
				</div>
				<!-- /.content-header -->


				<!-- Main content -->
				<div class="content">
					<div class="container-fluid">
						<?= $this->renderSection('content') ?>
					</div>
				</div>
			</div>


			<?= $this->include('admin/common/footer') ?>
		</div>

		<?= $this->include('admin/common/foot') ?>
	</body>

</html>
