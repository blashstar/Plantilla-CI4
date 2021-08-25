<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0"><?= $pagina->titular ?></h1>
	</div><!-- /.col -->
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<?php foreach($pagina->ruta as $i => $item): ?>
			<?php if($i < count($pagina->ruta)-1 ): ?>
			<li class="breadcrumb-item">
				<a href="#"><?= ucwords($item) ?></a>

			</li>
			<?php else: ?>
			<li class="breadcrumb-item active">
				<?= ucwords($item) ?>
			</li>
			<?php endif; ?>

			<?php endforeach; ?>

		</ol>
	</div><!-- /.col -->
</div><!-- /.row -->
