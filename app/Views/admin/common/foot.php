<?php
$tema_js = [
	// Jquery
	"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js",
	// Bootstrap
	"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js",
	// Admin LTE js
	"https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"
];

$js = @array_merge($tema_js, $js ?: []);

?>

<?php if(@$js): ?>
<?php foreach($js as $script): ?>
<script src="<?= $script ?>"></script>
<?php endforeach; ?>
<?php endif; ?>
