<!DOCTYPE html>
<html>
  <head>

    <!-- Meta Data --> 
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Grace S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">

    <!-- Link to CSS file --> 
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title --> 
    <title>Enter Degrees is Celsius, with JS</title>
  </head>
  <body>
    
    <!-- PHP echo to print the html to the page -->
    <center><h1><?php 
			echo "Enter Degrees in Celsius";?></h1></center>

    <!-- Image -->
    <?php
      echo '<center><img src= "./images/hotandcold.jpg" alt="HOTandCOLD" width="45%" height="auto"></center>';
    ?>
 
    <!-- Buttons and Text Field -->
    <br>
    <center><form method= "post">
      Temperature in Celsius: <input type="number" name="degCelsius">
      <br>
      <br>
      <input type="submit" value="Display Temperature Results" />
    </form></center>
    <br>
    <br>

    <?php

    	// get the input from text field
      define("MIN", 15);
      define("MIN_TEMP", -50);
      define("MAX", 50);
    	$degCelsius = ($_POST['degCelsius']);
    
      if ($degCelsius >= MAX) {
        echo " <center> Something is off... either glaciers are disappearing or you're a liar!!!!!!!!!! </center> ";
      } else if ($degCelsius <= MIN_TEMP){
          echo "<center> It’s extremely cold outside. Are you sure your still alive?</center> ";
      } else if ($degCelsius >= MIN) {
          echo " <center> It is going to be a hot day!!! Wear sunglasses and light outerwear.</center> ";
      } else  {
          echo " <center> It is going to be a cold day!!! Wear a jacket or sweater. </center> ";
      }
    ?>   
    <br>
    <br>
  </body>
</html>