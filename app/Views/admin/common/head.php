<?php
$tema_css = [
	// Google Font: Source Sans Pro
	"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback",
	// Font Awesome Icons
	"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css",
	// Admin LTE style
	"https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css"
];

$css = @array_merge($tema_css, $css ?: []);

?>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?= $aplicacion->titulo ?></title>

<?php if (@$css) : ?>
<?php foreach ($css as $url) : ?>
<link rel="stylesheet" href="<?= $url ?>">
<?php endforeach; ?>
<?php endif; ?>

<link rel="shortcut icon" href="/assets/images/favicon.png" />

<?php if (@$configJs) : ?>
<?php foreach ($configJs as $script) : ?>
<script src="<?= $script ?>"></script>
<?php endforeach; ?>
<?php endif; ?>
