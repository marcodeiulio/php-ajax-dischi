<?php
include '../includes/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>Dischi</title>
</head>

<body>
	<header>
	</header>
	<main>
		<section id="albums">
			<div class="container">
				<?php
				foreach ($database as $disc) : ?>
					<div class="album-card">
						<figure>
							<img src="<?= $disc['poster'] ?>" alt="<?= $disc['title'] ?>" />
							<figcaption>
								<h3><?= $disc['title'] ?></h3>
								<p><?= $disc['author'] ?></p>
								<p><?= $disc['year'] ?></p>
							</figcaption>
						</figure>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
	</main>
</body>

</html>