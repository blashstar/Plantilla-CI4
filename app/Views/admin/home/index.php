<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="jumbotron">
	<h1 class="display-4">Bienvenido</h1>
	<p class="lead">Hola <?= @$usuario["nombre"] ?></p>
	<hr class="my-4">
	<p></p>
	<a class="btn btn-primary btn-lg" href="<?= site_url("admin/sesion/salir") ?>">Salir</a>
</div>

<?= $this->endSection() ?>
