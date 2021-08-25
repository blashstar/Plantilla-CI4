<?php

$clases_body = [];

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

		<!-- Main content -->
		<div class="content">
			<?= $this->renderSection('content') ?>
		</div>


		<?= $this->include('admin/common/foot') ?>
	</body>

</html>
