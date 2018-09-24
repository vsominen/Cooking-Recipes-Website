<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  <link rel="stylesheet" type="text/css" href="myStyle.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <script src="myScript.js"></script>
  <body id="body"bgcolor="#ffe6cc">  
  <?php
   $text = (isset($_GET['search']) ? $_GET['search'] : null);   
   ?>
  <br>
<?php

switch ($text) {
    case 'vegan':
        include('vegan.php');
        break;
    case 'american':
         include('american.php');
        break;
    case 'indian':
        include('indian.php');
        break;
    case 'chinese':
         include('chinese.php');
        break;
    case 'italian':
        include('italian.php');
        break;
    case 'smoothies':
         include('smoothies.php');
        break;
        
        case 'desserts':
        include('desserts.php');
        break;
    case 'cuisines':
         include('cuisine.php');
        break;
    case 'salads':
        include('salad.php');
        break;
    case 'healthy recipes':
        include('healthy.php');
        break;
    default: echo 'Sorry!! Not Found';    
          include('main.php');
       break;
            
}

?>
      
      
      


  </body>
</html>
