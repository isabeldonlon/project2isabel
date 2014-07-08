<!--
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
-->
<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset="UTF-8">
		<title>Password Generator</title>
		<link rel='stylesheet' type="text/css" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<?php require 'logic.php'; ?>

	</head>
	<body>
		<div class='password'>
			<h3><?php echo $password; ?></h3>
		</div>
		<div class='input'>
		<form action='random1.php'  method='post'>
			<p>
			<label for='qtybox'>How many words do you want in your password? 
				<input type='text' name='qty' id='qtybox' value='4' size=5>
				(max 10)
			</label>
			</p>
			<p>
			<label for='maxbox'>What is the maximum number of characters in your password?
				<input type='text' name='maxLength' id='maxbox' value='25' size=5>
			</label>
			</p>
			<fieldset>
				<legend>Use a separator?</legend> 
				<ul>
				<li>
				<li>
					<label for="noSeparatorBox"> 
						<input type='radio' name='separator' value='none' id='noSeparatorBox' checked>
						No separator 
					</label>
				</li>
				<li>
					<label for='randSeparatorBox'> 
						<input type='radio' name='separator' value='symbol' id='randSeparatorBox'>
						Random Symbol separator
					</label>
				</li>
				<li>
					<label for="customSeparatorBox"> 
						<input type='radio' name='separator' value='custom' id='customSeparatorBox'>
						Choose your own
						</label>
						<input type='text' name='customSeparator' value='-' size=5>
					
				</li>
			</ul>

			</fieldset>
			<fieldset>
				<legend>Use Capital letters?</legend> 
				<ul>
				<li>
				<li>
					<label for="noCaptialsBox"> 
						<input type='radio' name='caps' value='none' id='noCaptialsBox' checked>
						no caps 
					</label>
				</li>
				<li>
					<label for='firstCapsBox'> 
						<input type='radio' name='caps' value='first' id='firstCapsBox'>
						First Letter Of Each Word
					</label>
				</li>
				<li>
					<label for="allCapsBox"> 
						<input type='radio' name='caps' value='all' id='allCapsBox'>
						ALLCAPS
					</label>
				</li>
			</ul>

			</fieldset>
			<fieldset>
				<legend>Use numbers?</legend> 
				<ul>
				<li>
				<li>
					<label for="noNumbersBox"> 
						<input type='radio' name='numbers' value='none' id='noNumbersBox' checked>
						No Numbers
					</label>
				</li>
				<li>
					<label for='endNumbersBox'> 
						<input type='radio' name='numbers' value='end' id='endNumbersBox'>
						Random number added at the end of password
					</label>
				</li>
				<li>
					<label for="eachNumberBox"> 
						<input type='radio' name='numbers' value='each' id='eachNumberBox'>
						Random number after each word
					</label>
				</li>
			</ul>

			</fieldset>
		<p>
			<input type='submit' value='Get Password!' name='submit' id='passwordSubmit'>
		</p>
		</form>	
	</div>
	</body>
</html>