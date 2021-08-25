<div class="user-panel mt-3 pb-3 mb-3 d-flex">
	<div class="image">
		<div class="text-light" alt="usuario">
			<i class="fas fa-user-circle fa-3x"></i>
		</div>
	</div>
	<div class="info text-light">
		<a href="#" class="d-block"><?= @$usuario["nombre"] ?: "Anonimo" ?></a>
		<a href="<?= site_url("admin/sesion/cerrar") ?>" class="btn btn-secondary btn-sm d-block py-0">
			<i class="fas fa-sign-out-alt nav-icon"></i>
			<span>Salir</span>
		</a>
	</div>
</div>
