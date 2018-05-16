<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="overlay.css">
    <meta charset="utf-8">
    <title>Roll those dice</title>
  </head>
  <body>
    <div id="header">
    <a href="index.php?" onclick="create_image()"><img src="rollthedice.gif" alt="..."></a>
    <h1>Roll those dice</h1>
  </div>
    <hr>
    <?php
    for($i=0;$i<5;$i++){
      $doble = rand(1,6);
      create_image($doble);
      print "<img src=image$doble.png?".date("U").">";
    }

    function create_image($doble){


      $im = @imagecreate(200, 200) or die("cannot initilize new GD image");
      $background_color = imagecolorallocate($im, 0, 0, 0);
      $white = imagecolorallocate($im, 255, 255, 255);


      switch($doble) {

      case 1:
      imagefilledpolygon($im, 100, 100, 50, 50, $white);
      imagepng($im,"image1.png");
      print(" ");
      break;

      case 2:
      imagefilledellipse($im, 150, 150, 50, 50, $white);
      imagefilledellipse($im, 50, 50, 50, 50, $white);
      imagepng($im,"image2.png");
      print(" ");
      break;

      case 3:
      imagefilledellipse($im, 100, 100, 50, 50, $white);
      imagefilledellipse($im, 150, 150, 50, 50, $white);
      imagefilledellipse($im, 50, 50, 50, 50, $white);
      imagepng($im,"image3.png");
      print(" ");
      break;

      case 4;
      imagefilledellipse($im, 150, 150, 50, 50, $white);
      imagefilledellipse($im, 150, 50, 50, 50, $white);
      imagefilledellipse($im, 50, 150, 50, 50, $white);
      imagefilledellipse($im, 50, 50, 50, 50, $white);
      imagepng($im,"image4.png");
      print(" ");
      break;

      case 5:
      imagefilledellipse($im, 100, 100, 50, 50, $white);
      imagefilledellipse($im, 150, 150, 50, 50, $white);
      imagefilledellipse($im, 150, 50, 50, 50, $white);
      imagefilledellipse($im, 50, 150, 50, 50, $white);
      imagefilledellipse($im, 50, 50, 50, 50, $white);
      imagepng($im,"image5.png");
      print(" ");
      break;

      case 6:
      imagefilledellipse($im, 50, 100, 50, 50, $white);
      imagefilledellipse($im, 150, 100, 50, 50, $white);
      imagefilledellipse($im, 150, 160, 50, 50, $white);
      imagefilledellipse($im, 150, 40, 50, 50, $white);
      imagefilledellipse($im, 50, 160, 50, 50, $white);
      imagefilledellipse($im, 50, 40, 50, 50, $white);
      imagepng($im,"image6.png");
      print(" ");
      break;
    }
      imagedestroy($im);

    }

      function dobbelsteen(){

      }
     ?>
  </body>
</html>
