

<?php

/*

Create the *PokerDice class. The faces of a poker dice have the following figures: Ace, K, Q, J, 7 and 8.

It creates the *throw method that does nothing more than roll the dice, that is, it generates a random value for the object to which the method is applied.

It also creates the *shapeName method, which tells which shape came up on the last roll of the dice in question.

Make an app that allows you to roll five poker dice at once.

Also, program the *getTotalThrows method which has to show the total number of throws among all the dice


*/
echo "<title>*POKER*</title>";

define ("SIDE_1", "Ace");
define ("SIDE_2", "K");
define ("SIDE_3", "Q");
define ("SIDE_4", "J");
define ("SIDE_5", "7");
define ("SIDE_6", "8");
      
class PokerDice {

function throw () {

  $th = rand (1, 6);
  return $th;

}

function side_up ($dice) {

  $up = constant ("SIDE_" . $dice -> throw());
  return $up;
}

}

$dice1 = new PokerDice;
$dice2 = new PokerDice;
$dice3 = new PokerDice;
$dice4 = new PokerDice;
$dice5 = new PokerDice;

echo "<h1>Poker game</h1>";

echo "<h2>";
echo $dice1->side_up($dice1) . "<br \>";

echo $dice2->side_up($dice2) . "<br \>";

echo $dice3->side_up($dice3) . "<br \>";

echo $dice4->side_up($dice4) . "<br \>";

echo $dice5->side_up($dice5) . "<br \>";
echo "</h2>";


