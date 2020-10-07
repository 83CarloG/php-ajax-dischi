
	<main class="main">
		<div class="container">
			<ul class="item__list">
				<?php foreach ($database as $k => $album) {	?>
					<li class="item__album">
						<img class="item__img" src="<?php echo $album['poster']; ?>" alt="#">
						<h4 class="item__title">
							<?php echo $album['title']; ?>
						</h4>
						<span class="item__author">
							<?php echo $album['author']; ?>
						</span>
						<span class="item__year">
							<?php echo $album['year']; ?>
						</span>
					</li>
				<?php } ?>
			</ul>
		</div>
	</main>
</body>
