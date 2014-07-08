<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>
 
<!DOCTYPE html>

  <title>Raffle v2</title>
<html>
  <head> 
    <?php require('logic.php'); ?>
  </head>
  
  <body>
    <div class="form"> 
      <form method="get" action="random.php"><br>
        <h3> Number of Words:</h3> <input class="textbox" type="text" name="characters">
        <input type="submit" value="Submit" class="submit">
      </form>
    </div>
    <div class="pass">
      <h1> Your Password is: </h1>
      <h2> <?php echo $password; ?></h2>
    </div>
  </body>
</html>  


<?php


//Make wordlist array
$list = file('words.txt');
$count = 0;

foreach ($list as $line_num => $line ) {
  $wordlist[$line_num] = "$line";
}

//check if the variable $pass_length is invalid

if ( empty( intval($_GET["characters"]) ) == true ) {
  $pass_length = 4;
} else {
  $pass_length = intval ( $_GET['characters'] );
}
//save the value given by user
$_SESSION['pass'] = $pass_length;
$password = '';
$i = 0;

while ( $i < $pass_length ) {
  $word = $wordlist[rand(0,109582)];
  $password = $password.$word;
  $i++;
}