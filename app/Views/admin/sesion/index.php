<?= $this->extend('layouts/adminSimple') ?>

<?= $this->section('content') ?>
<style>
* {
	/* outline: 1px solid rgba(0, 0, 0, .1); */
	color: white;
}

</style>

<div class="container-fluid bg-secondary">
	<div class="row justify-content-center align-items-center vh-100">
		<div class="col-md-3">
			<div class="card bg-dark py-4 pr-3 pl-3">
				<!-- <img src="https://i1.wp.com/www.camionesybuses.com.ar/wp-content/uploads/2019/08/mobil-camiones.jpg?fit=250%2C475"
					class="card-img-top" width="180px" alt="mobil"> -->
				<img src="<?= site_url("assets/admin/img/logo.svg") ?>" class="card-img-top" alt="mobil">
				<div class="card-header">
					<h3 class="text-center">Iniciar Sesión</h3>
				</div>
				<div class="card-body">

					<?php if (session()->getFlashdata('mensaje')) : ?>
					<div class="alert alert-warning">
						<?= session()->getFlashdata('mensaje') ?>
					</div>
					<?php endif; ?>

					<?= form_open(''); ?>

					<div class="form-group">
						<label for="usuario">Usuario</label>
						<?= form_input([
							'name'			=> 'usuario',
							'id'			=> 'usuario',
							"class" 		=> "form-control",
							'placeholder'	=> 'Usuario',
							'maxlength' 	=> 15
						]) ?>
					</div>

					<div class="form-group">
						<label for="clave">Contraseña</label>
						<?= form_password([
							'name'			=> 'clave',
							'id'			=> 'clave',
							"class" 		=> "form-control",
							'placeholder'	=> 'Contraseña'
						]) ?>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
					</div>

					<?= form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>
