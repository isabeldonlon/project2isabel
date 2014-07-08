
<!-- 
    Saved first attempt for reference
/*for($i = $_GET[$minlength]; $i <= $_GET[$maxlength]; $i++){
    if (isset($words)) =0 ; {
    echo "WRONG";
} 
if (isset empty($words)) <9; {
    echo $_GET;
}
else {
    password_length =
}
*/ -->


<?php
//declare variables
$words = file('words.txt');
$count = 0;
$word_length = 0;
$symbol = array('/', '$',);
$number = array('1', '2', '19', '900', '76', '12', '81', '7');
$count = count($symbol);
$password = '';


//foreach function to go through words array
foreach ($words as $rand_num => $rand ) {
  $wordlist[$rand_num] = "$rand";
}
// generate 
if (isset(strval($_POST['quantity']) ? $_GET['quantity' : null]) == true) {
} else {
  $num_words = strval ( $_POST['quantity'] );
}



//This is where I was hoping to get the textboxes to display,
// if ($number == 'numbers'){
//                     $number= $number.rand(0,8);

// 
// elseif ($number == 'last' && $i == $qty-1){
//     $symbol = $symbol.rand(0,9);
//                 }


//save the value given by user
$_SESSION['pass'] = $word_length;

$random = ''; 
$i = 0;


while ( $i < $num_words ) {
    //number of words in word list
  $word = $wordlist[rand(0,350)];
  $random = $random.$word;
  $i++; }





