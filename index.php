<!-- Html, Sass, PHP
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi (vedi screenshot). In allegato trovate anche il database fake da utilizzare -->

<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>ajax-dischi</title>
	</head>
	<body>
		<ul class="item__list">
			<?php foreach ($database as $k => $album) {	?>
				<li class="item__album">
					<?php echo $album['title']; ?>
					<?php echo $album['author']; ?>
					<?php echo $album['year']; ?>
				<img src="<?php echo $album['poster']; ?>" alt="#">	
				</li>
			<?php } ?>

		</ul>
	</body>
</html>
