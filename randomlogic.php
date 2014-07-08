<?php


	if (isset($_POST['submit']) && !empty($_POST)){ //execute only on submit

	$password = '';

	//create word and symol arrays
	$words = file('libraries/google-10000-english.txt');
	$words_lgth = count($words);
	$symbols = file('libraries/symbols.txt');
	$symbols_lgth = count($symbols);
	$attempts = 0;

	//assign user input
	$qty = $_POST['qty'];
	$sepChoice = $_POST['separator'];
	$maxLength =  $_POST['maxLength'];
	$capsChoice = $_POST['caps'];
	$numberPlace = $_POST['numbers'];

	//Select separator
	if ($sepChoice == 'symbol'){
		$separator = rtrim($symbols[rand(1,$symbols_lgth-1)]); //Sets separator to random symbol
	}elseif ($sepChoice == 'custom'){
		$separator = $_POST['customSeparator']; //Sets separator to user selection
	}else {
		$separator = "";
	}

	//Password builder
		if ($qty >= 1 && $qty <= 10){ //validating number of words rule
			do {
			$attempts++;
			for ($i=0; $i< $qty; $i++){ //Build password
				$pick = rand (0,$words_lgth-1);
				if ($i == 0){ //Special case prevents starting with a separator
					if ($capsChoice == 'first'){
						$password = rtrim(ucfirst($words[$pick]));
					}elseif ($capsChoice == 'all') {
						$password = rtrim(strtoupper($words[$pick]));
					}else{
						$password = rtrim($words[$pick]);
					}
				}else{
					if ($capsChoice == 'first'){
						$password = $password.$separator.rtrim(ucfirst($words[$pick]));
					}elseif ($capsChoice == 'all') {
						$password = $password.$separator.rtrim(strtoupper($words[$pick]));
					}else{
						$password = $password.$separator.rtrim($words[$pick]);
					}
				}
				if ($numberPlace == 'each'){
					$password = $password.rand(0,9);

				}elseif ($numberPlace == 'end' && $i == $qty-1){
					$password = $password.rand(0,9);
				}
			}
		}while (strlen($password) > $maxLength && $attempts < 1000); //Allows 1000 attempts to get under maximum length
		if ($attempts >= 1000){ //Sets pass
			$password = "SORRY <br/> Search has timed out. <br/> Try increasing your maximum length or decreasing the number of words";
		}
	}else{
			$password = "- SORRY - "."<br/>". "Please try again with fewer than 10 but more than 0 words!";
		}

}else{
	$password = "Welcome to Patterson's xkcd style Password generator. <br/> Select your options below and get your customized password!";
}