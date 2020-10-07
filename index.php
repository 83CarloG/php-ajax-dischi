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
		<link rel="stylesheet" href="dist\app.css">
	</head>
	<body>
		<header>

		</header>
		<main>

		</main>
		<ul class="item__list">
			<?php foreach ($database as $k => $album) {	?>
				<li class="item__album">
					<img src="<?php echo $album['poster']; ?>" alt="#">
					<h4 class="title">
						<?php echo $album['title']; ?>
					</h4>
					<span class="author">
						<?php echo $album['author']; ?>
					</span>
					<span class="year">
						<?php echo $album['year']; ?>
					</span>
				</li>
			<?php } ?>

		</ul>
	</body>
</html>
