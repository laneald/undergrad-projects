<?php

session_start();

function DisplayQuestion($question, $value) {
$questionF = 'question'.$question.'f';
	$link = 'question'.$question;
	if (!$_SESSION['question'.$question]) {
		echo "<td><a class = 'value' href = '$link.php'>$value</a></td>";
	}
	else {
		if ($_SESSION[$questionF] == 'flash') {
			$flash = "class = 'correctFlash'";
		}
		else if ($_SESSION[$questionF] == 'noflash') {
			$flash = "class = 'incorrectFlash'";
		}
		else {
			$flash = "";
		}
		echo "<td $flash><span style = 'text-decoration:line-through;'>$value</span></td>";
	}

}

function LeaderboardInfo() {
	$scoreData = unserialize($_COOKIE['scores'], ["allowed_classes" => false]);
	print_r($scoreData);
}

function CountDown() {
	//check to see if coutdown variable has been initialized
	if (!isset($_SESSION['countdown'])) {
		//set the coutdown to 30
		$_SESSION['countdown'] = 30;
		//store the current time
		$_SESSION['time_started'] = time();
	}

	//get the current timestamp
	$now = time();

	//calculate how many seconds have passed since countdown began
	$timeSince = $now - $_SESSION['time_started'];

	//calculate how many seconds are remaining
	$remainingSeconds = abs($_SESSION['countdown'] - $timeSince);

	//output the CountDown
	echo "$remainingSeconds";
}

function ResetGame() {
	$_SESSION['question1'] = false;
	$_SESSION['question2'] = false;
	$_SESSION['question3'] = false;
	$_SESSION['question4'] = false;
	$_SESSION['question5'] = false;
	$_SESSION['question6'] = false;
	$_SESSION['question7'] = false;
	$_SESSION['question8'] = false;
	$_SESSION['question9'] = false;
	$_SESSION['question10'] = false;
	$_SESSION['question11'] = false;
	$_SESSION['question12'] = false;
	$_SESSION['question13'] = false;
	$_SESSION['question14'] = false;
	$_SESSION['question15'] = false;
	$_SESSION['question16'] = false;
	$_SESSION['question17'] = false;
	$_SESSION['question18'] = false;
	$_SESSION['question19'] = false;
	$_SESSION['question20'] = false;
	$_SESSION['question21'] = false;
	$_SESSION['question22'] = false;
	$_SESSION['question23'] = false;
	$_SESSION['question24'] = false;
	$_SESSION['question25'] = false;
	$_SESSION['question26'] = false;
	$_SESSION['question27'] = false;
	$_SESSION['question28'] = false;
	$_SESSION['question29'] = false;
	$_SESSION['question30'] = false;
}

function SetFlashVariables() {
	$_SESSION['question1f'] = false;
	$_SESSION['question2f'] = false;
	$_SESSION['question3f'] = false;
	$_SESSION['question4f'] = false;
	$_SESSION['question5f'] = false;
	$_SESSION['question6f'] = false;
	$_SESSION['question7f'] = false;
	$_SESSION['question8f'] = false;
	$_SESSION['question9f'] = false;
	$_SESSION['question10f'] = false;
	$_SESSION['question11f'] = false;
	$_SESSION['question12f'] = false;
	$_SESSION['question13f'] = false;
	$_SESSION['question14f'] = false;
	$_SESSION['question15f'] = false;
	$_SESSION['question16f'] = false;
	$_SESSION['question17f'] = false;
	$_SESSION['question18f'] = false;
	$_SESSION['question19f'] = false;
	$_SESSION['question20f'] = false;
	$_SESSION['question21f'] = false;
	$_SESSION['question22f'] = false;
	$_SESSION['question23f'] = false;
	$_SESSION['question24f'] = false;
	$_SESSION['question25f'] = false;
	$_SESSION['question26f'] = false;
	$_SESSION['question27f'] = false;
	$_SESSION['question28f'] = false;
	$_SESSION['question29f'] = false;
	$_SESSION['question30f'] = false;
}

 ?>
