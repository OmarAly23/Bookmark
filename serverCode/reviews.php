<!DOCTYPE html>
<html>
      <head>
        <style>
          h1 {
            color: black;
          }
        </style>
      </head>
  <body>
</body>
</html>

<?php

    require('db_info.php');
    include "header.php";
    if ($_GET['ID']=='1') {
      include "HP.php";
    } else if ($_GET['ID']=='2') {
      include "kiteRunner.php";
    } else if ($_GET['ID']=='3') {
      include "Mockingbird.php";
    } else if ($_GET['ID']=='4') {
      include "lotr.php";
    } else if ($_GET['ID']=='5') {
      include "bookTheif.php";
    } else if ($_GET['ID']=='6') {
      include "1984.php";
    } else if ($_GET['ID']=='7') {
      include "greatGatspy.php";
    } else if ($_GET['ID']=='8') {
      include "weatheringHeights.php";
    } else if ($_GET['ID']=='9') {
      include "Dune.php";
    } else if ($_GET['ID']=='10') {
      include "GOT.php";
    } else if ($_GET['ID']=='11') {
      include "Fahrenheit.php";
    } else if ($_GET['ID']=='12') {
      include "Neuromancer.php";
    } else if ($_GET['ID']=='13') {
      include "Stranger.php";
    } else if ($_GET['ID']=='14') {
      include "it.php";
    } else if ($_GET['ID']=='15') {
      include "kingKiller.php";
    } else if ($_GET['ID']=='16') {
      include "shinning.php";
    } else {
      include "main.php";
    }





?>