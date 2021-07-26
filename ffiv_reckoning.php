<?php
	$reckoning2_personal = array();
	$reckoning2_highscore = array();

// CHANGE THIS DATE INTO JSON FILE AND LOOP THROUGH 
// name -> personal total -> personal score rank
array_push($reckoning2_personal, array("CoinFlare", "6,741,114","98"));
array_push($reckoning2_personal, array("Shadow", "5,265,025","209"));
array_push($reckoning2_personal, array("Dervis", "4,989,137","256"));
array_push($reckoning2_personal, array("H2Oproof", "3,813,091","744"));
array_push($reckoning2_personal, array("Azazel", "3,651,125","891"));
array_push($reckoning2_personal, array("gdawe", "3,641,175","910"));
array_push($reckoning2_personal, array("aPulpy", "3,573,545", "992"));
array_push($reckoning2_personal, array("D.Maverick", "3,403,016","1,202"));
array_push($reckoning2_personal, array("Gatrie", "3,190,618","1,523"));
array_push($reckoning2_personal, array("elrac", "3,141,557","1,611"));
array_push($reckoning2_personal, array("skydryv", "2,672,767","2,693"));
array_push($reckoning2_personal, array("rgtab", "2,600,137","2,390"));
array_push($reckoning2_personal, array("Synbios", "2,523,143","3,113"));
array_push($reckoning2_personal, array("LilSora", "1,875,174","5,755"));
array_push($reckoning2_personal, array("Bepp", "1,630,635","7,209"));
array_push($reckoning2_personal, array("Astrocreep", "1,356,489","9,184"));
array_push($reckoning2_personal, array("vu_lin", "1,311,570","9,512"));
array_push($reckoning2_personal, array("Omega86", "955,190","12,381"));
array_push($reckoning2_personal, array("Exia", "747,995","14,516"));
array_push($reckoning2_personal, array("Ricey", "N/A", "N/A"));
array_push($reckoning2_personal, array("Izlude", "N/A", "N/A"));
array_push($reckoning2_personal, array("Ukyossiv", "N/A", "N/A"));
array_push($reckoning2_personal, array("Ramedge", "N/A", "N/A"));
array_push($reckoning2_personal, array("Comeau", "N/A", "N/A"));
array_push($reckoning2_personal, array("Cormac", "N/A", "N/A"));
array_push($reckoning2_personal, array("Flip", "N/A", "N/A"));
array_push($reckoning2_personal, array("Lakron", "N/A", "N/A"));
array_push($reckoning2_personal, array("Zodiac", "N/A", "N/A"));
array_push($reckoning2_personal, array("Zookey", "N/A", "N/A"));
array_push($reckoning2_personal, array("MK", "N/A", "N/A"));

// name -> high score -> high score rank
array_push($reckoning2_highscore, array("Shadow", "25,996", "10"));
array_push($reckoning2_highscore, array("D.Maverick", "22,972", "93"));
array_push($reckoning2_highscore, array("CoinFlare", "21,754", "146"));
array_push($reckoning2_highscore, array("rgtab", "19,675", "273"));
array_push($reckoning2_highscore, array("Dervis", "19,649", "314"));
array_push($reckoning2_highscore, array("skydryv", "18,976", "423"));
array_push($reckoning2_highscore, array("gdawe", "18,609", "500"));
array_push($reckoning2_highscore, array("elrac", "18,405", "546"));
array_push($reckoning2_highscore, array("Gatrie", "16,620", "1,333"));
array_push($reckoning2_highscore, array("Omega86", "16,433", "1,440"));
array_push($reckoning2_highscore, array("Synbios", "15,881", "1,810"));
array_push($reckoning2_highscore, array("LilSora", "14,494", "3,174"));
array_push($reckoning2_highscore, array("aPulpy", "14,519", "3,115"));
array_push($reckoning2_highscore, array("vu_lin", "13,938", "3,892"));
array_push($reckoning2_highscore, array("H2Oproof", "13,396", "4,733"));
array_push($reckoning2_highscore, array("Azazel", "12,429", "6,393"));
array_push($reckoning2_highscore, array("Exia", "11,292", "8,885"));
array_push($reckoning2_highscore, array("Bepp", "11,145", "9,244"));
array_push($reckoning2_highscore, array("Astrocreep", "7,079", "27,882"));
array_push($reckoning2_highscore, array("Ricey", "N/A", "N/A"));
array_push($reckoning2_highscore, array("Izlude", "N/A", "N/A"));
array_push($reckoning2_highscore, array("Ukyossiv", "N/A", "N/A"));
array_push($reckoning2_highscore, array("Ramedge", "N/A", "N/A"));
array_push($reckoning2_highscore, array("Comeau", "N/A", "N/A"));
array_push($reckoning2_highscore, array("Cormac", "N/A", "N/A"));
array_push($reckoning2_highscore, array("Flip", "N/A", "N/A"));
array_push($reckoning2_highscore, array("Lakron", "N/A", "N/A"));
array_push($reckoning2_highscore, array("Zodiac", "N/A", "N/A"));
array_push($reckoning2_highscore, array("Zookey", "N/A", "N/A"));
array_push($reckoning2_highscore, array("MK", "N/A", "N/A"));

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
			<div class ="row">

				<h1 class="text-center">FFIV Reckoning Data</h1>

			</div>

			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Personal Score</th>
							<th scope="col">Personal Score Rank</th>
						</tr>
					</thead>

				<?php
					// score loop
					$row = 1; 

					foreach ($reckoning2_personal as $member) {
						$name = $member[0];
						$personal_score = $member[1];
						$personal_rank = $member[2];

						?>

						<tr>
							<th scope="row"><?php echo "$row"; ?></th>
							<td><?php echo $name ;?></td>
							<td><?php echo $personal_score ;?></td>
							<td><?php echo $personal_rank ;?></td>
						</tr>

						<?php
						$row++;
					}

				?>

				</table>

				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">High Score</th>
							<th scope="col">High Score Rank</th>
						</tr>
				</thead>

				<?php
					// score loop
					$row2 = 1; 

					foreach ($reckoning2_highscore as $member) {
						$name = $member[0];
						$high_score = $member[1];
						$high_score_rank = $member[2];

						?>

						<tr>
							<th scope="row"><?php echo "$row2"; ?></th>
							<td><?php echo $name ;?></td>
							<td><?php echo $high_score ;?></td>
							<td><?php echo $high_score_rank ;?></td>
						</tr>

						<?php
						$row2++;
					}

				?>

				</table>
			</div>
		</div>

	</body>
</html>