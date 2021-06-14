<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dice Roll</title>
</head>
<body>
	<h1>Let's Roll Some Dice!</h1>

	<?php
		$FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
		$FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

		function CheckForDoubles($Die1, $Die2) {
			global $FaceNamesSingular;
			global $FaceNamesPlural;
			// See if $Die1 and $Die2 are a match
			if($Die1 == $Die2){
				echo "<p>The Roll was Double ", $FaceNamesPlural[$Die1 - 1], ".</p>";
				return true;

			}
			else {
				echo "<p>The roll was a ", $FaceNamesSingular[$Die1 - 1], " and a ", $FaceNamesSingular[$Die2 - 1], ".</p>";
				return false;
			}

		}

		function DisplayScoreText($Score) {
			switch($Score) {
				case 2:
					echo "<p>You Rolled Snake Eyes!</p>";
					break;
				case 3:
					echo "<p>You Rolled a Loose Deuce!</p>";
					break;
				case 5:
					echo "<p>You Rolled a Fever Five!</p>";
					break;
				case 7:
					echo "<p>You Rolled a Natural!</p>";
					break;
				case 9:
					echo "<p>You Rolled a Nina!</p>";
					break;
				case 11:
					echo "<p>You Rolled a Yo!</p>";
					break;
				case 12:
					echo "<p>You Rolled Boxcars!</p>";
					break;
			}
		}

		$Dice = array();
		$DoublesCount = 0;
		$RollNumber = 1;

		while($RollNumber <= 5){
			$Dice = array();
			$Dice[0] = rand(1, 6);
			$Dice[1] = rand(1, 6);
			$Score = $Dice[0] + $Dice[1];
			echo "<p>The Total Score for the Roll $RollNumber was: $Score.</p>";
			$Doubles = CheckForDoubles($Dice[0], $Dice[1]);
			DisplayScoreText($Score);
			echo "<hr/>";
			if($Doubles){
				++$DoublesCount;
			}
			++$RollNumber;

		}//End of the while loop

		echo "<h3>Doubles occured on $DoublesCount rolls.</h3>";
	?>

</body>
</html>