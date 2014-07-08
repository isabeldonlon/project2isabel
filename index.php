
<!DOCTYPE html>

  <title>Project 2</title>
<html>
  <head> 

    <?php require('logic.php'); ?>
    <link rel="stylesheet" type="text/css" href="style.css" />
        <link href="style.css" rel="stylesheet">

  </head>
  <body>
  
  
 <center>  <h1 style ="absolute">Isabel's Crazy Random Password Generator</h1>
<form method='POST' action='index.php'>
<!--  //create a dropdown list from 1 to 9-->      
 <input type='number' name='quantity' min='0' max ='9'><br>
   
 
      <input type='submit' value='get it'><br>

   <input type="checkbox" name='numbers' value="1">throw some numbers in there<br>
      <input type="checkbox" name='symbols' value="1">what about a symbol?<br>
   </form>


      <h1> Check it out: </h1>
         <!-- print random set of words --> 
<div><?php echo $random; ?><br>
      <a href = /index.php> Give it another shot</a></center></div>
  </body>
</html>  