<!DOCTYPE html>
<html lang="fr"> 
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Movie</title>
        <!-- CSS -->
        <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
		<!-- JS -->
	</head>
	<body>
		<div id="app">
			<?= view("templates/navbar"); ?>
			<div id="content">
				<?= view("pages/" . $content); ?>
			</div>
		</div>
	</body>
</html>