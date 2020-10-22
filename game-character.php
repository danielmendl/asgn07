<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Excersize 4 - Game Characters</title>
  </head>

  <body>
    <?php
      include('inc-game-character-object.php');

      $char1 = new gameCharacter();
      $char2 = new gameCharacter();

      $char1->setPlayerName("Cabbage");
      $char1->setScore("300");
      
      $char2->setPlayerName("Garlic");
      $char2->setScore("900");

      if ($char1->getScore() > $char2->getScore())
      {
        $winner = $char1;
      }
      else
      {
        $winner = $char2;
      }

      print("<h1>Game Characters</h1>
      <p>".$char1->getPlayerName()."'s score is ".$char1->getScore().".</p>
      <p>".$char2->getPlayerName()."'s score is ".$char2->getScore().".</p>
      <p>".$winner->getPlayerName()." is the winner!</p>");

    ?>
  </body>

</html>