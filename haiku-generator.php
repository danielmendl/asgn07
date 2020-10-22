<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Haiku Assembly</title>
    <link href="sample.css" rel="stylesheet">
  </head>

  <body>
    <?php
      include('inc-haiku-object.php');

      $haiku = new Haiku();
      $assemblyMethod = $_POST['assemble'];
      if($assemblyMethod == "assemble")
      {
        $haiku->setLine1($_POST['line1']);
        $haiku->setLine2($_POST['line2']);
        $haiku->setLine3($_POST['line3']);
        
        // if(!isset($haiku->getLine1)
        // {
        //   print ("<p>Please ")
        // }

        print("<p>".$haiku->getFullPoem()."</p>");
      }
      else
      {
        $haiku->randomize();
        print("<p>".$haiku->getFullPoem()."</p>");
      }

      print('<a href="haiku.html">Return to the generator</a>');
    ?>
  </body>

</html>