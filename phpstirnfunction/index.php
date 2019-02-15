<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP Strin Function</title>
  </head>
  <body>
    
      <div class="container -fluid">

        <?php $str = "   SazzadBinAshique    ";?>
        <h1><?php echo trim($str); ?></h1>

      </div>

      <div class="container card">
        <div class="card-header"><h5>ucfirst</h5></div>
        <div class="card-body">Example--<?php  echo ucfirst("shamima ysemin suma")?></div>
      </div>
      

      <div class="container card">
        <div class="card-header"><h5>ucwords</h5></div>
        <div class="card-body">Example-- <?php  echo ucwords("sazzad bin ashique")?></div>
      </div>

      <div class="container card">
        <div class="card-header"><h5>ucwords</h5></div>
        <div class="card-body">Example-- <?php  echo strlen("shamima yesmin suma")?></div>
      </div>

      <div class="container card">
        <div class="card-header"><h5>strtolower</h5></div>
        <div class="card-body">Example-- <?php  echo strtolower("SHAZZAD BIN ASHiQUE")?></div>
      </div>

      <div class="container card">
        <div class="card-header"><h5>strtoupper</h5></div>
        <div class="card-body">Example-- <?php  echo strtoupper("sazzad bin ashique")?></div>
      </div>
        
      <div class="container  card">
        <div class="card-header"><h5>lcfirst</h5></div>
        <div class="card-body">Example-- <?php  echo lcfirst("FINAL")?></div>
      </div>      

      <div class="container  card">
        <div class="card-header"><h5>str_replace</h5></div>
        <div class="card-body">Example-- <?php  echo str_replace("program", "developer", "Hello program!")?></div>
      </div>      
    <div class="container  card">
        <div class="card-header"><h5>str_word_count</h5></div>
        <div class="card-body">Example-- <?php  echo str_word_count("Hello programmer , How are you? ")?></div>
      </div>  
 <div class="container  card">
        <div class="card-header"><h5>strpos</h5></div>
        <div class="card-body">Example-- <?php  echo strpos("Hello programmer", "what!")?></div>
      </div> 

       <div class="container  card">
        <div class="card-header"><h5>substr</h5></div>
        <div class="card-body">Example-- <?php  echo substr("Hello programmer , How are you? ", 0,5)?></div>
      </div> 
       <div class="container  card">
        <div class="card-header"><h5>implode</h5></div>
        <div class="card-body">Example-- <?php 

          $arr = array('Hello', 'developer');
         echo implode(" ", $arr)?></div>
      </div> 














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>