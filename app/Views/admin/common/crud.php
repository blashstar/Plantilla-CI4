<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="row">
	<div class="col-lg-12">
		<?= $crud; ?>
	</div>
</div>

<?= $this->endSection() ?>
