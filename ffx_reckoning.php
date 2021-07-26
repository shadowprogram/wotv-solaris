<?php
	$reckoning2_highscore = array();
	$loadPoints= file_get_contents("individual-ff10.json");
	$reckoningPersonal = json_decode($loadPoints, true);
?>

<!DOCTYPE HTML>
<html lang="en">

	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		
		<div class="container">
			<div class="row">
				<h1 class="text-center">FFX Reckoning Data</h1>
			</div>

			<div class="row">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Individual Score</th>
							<th scope="col">Individual Score Rank</th>
						</tr>
					</thead>

					<?php
						// individual score loop
						$row = 1;

						foreach($reckoningPersonal['members'] as $member) {
							?>

							<tr>	
								<th scope="row"><?php echo $row; ?></th>
								<td><?php echo $member["Name"]; ?></td>
								<td><?php echo $member["Individual Score"]; ?></td>
								<td><?php echo $member["Individual Rank"]; ?></td>
							</tr>

							<?php
							$row++;
						}
					?>
				</table>
			</div>
		</div>

	</body>
</html>