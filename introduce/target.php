<?php
   session_start();
 ?>
 <!DOCTYPE HTML>
 <html>
 <head>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="../css/common.css">
 <link rel="stylesheet" type="text/css" href="../css/concert.css">
 </head>
 
  <body>
  <div id="wrap">
    <div id="header">
      <?php include "../lib/top_login2.php"; ?>
    </div>
    <div id="menu">
      <?php include "../lib/top_menu2.php"; ?>
    </div>
    <div id="content">
      <div id="col1">
        <div id="left_menu">
         <?php include "../lib/left_menu.php"; ?>
        </div> 
      </div> <!-- end of col1 --> 

    <div id="col2">
      <div id="title"><img src="../img/title_target.gif"></div>
    </div> <!-- end of col2 -->
   </div> <!-- end of content -->
  </div> <!-- end of wrap -->
  </body>
  </html>