<!DOCTYPE HTML>
<html lang="en">

	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<link rel="stylesheet" href="../style.css">
	</head>

	<body>

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid justify-content-center">
					<ul class="nav navbar-nav">
						<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="pages/guild-statues.php">Guild Statues</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Guild Reckonings</a></li>
						<li class="nav-item"><a class="nav-link" href="#">About</a></li>
					</ul>
				</div>
			</nav>

			<div class ="row">

				<h1 class="auto-center text-center">Guild Statue Input</h1>

			</div>

			<div class="row">
				
				<form class="auto-center text-center">

					<?php 

						echo textInputHTML("player-name", "Name", "player-name"); 
						echo textInputHTML("player-statue", "Exp", "player-statue");

					?>

				</form>
				
			</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>

<?php

function textInputHTML($id, $label, $name) {
	$template = "<div class='form-group row'><label for='{$id}' class='col-sm-2'>{$label}</label><div class='col-sm-6'><input class='form-control' type='text' id='{$id}' name='{$name}'></div></div>";
	return $template;
}

?>