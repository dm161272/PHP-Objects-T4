

<?php

/*

Create the *PokerDice class. The faces of a poker dice have the following figures: Ace, K, Q, J, 7 and 8.

It creates the *throw method that does nothing more than roll the dice, that is, it generates a random value for the object to which the method is applied.

It also creates the *shapeName method, which tells which shape came up on the last roll of the dice in question.

Make an app that allows you to roll five poker dice at once.

Also, program the *getTotalThrows method which has to show the total number of throws among all the dice


*/
echo "<title>*POKER*</title>";


    
class PokerDice {

private $dice_array = array ();
private static $counter = 0;



function __construct () {

$this->dice_array = array ("Ace", "K", "Q", "J", "7", "8");
self::$counter++;

}


function throw () {

  $th = rand (0, 5);
  return $th;

}

function side_up ($dice) {

  $index = $dice->throw();
 
  $up = $dice->dice_array[$index];
  return $up;
}

function get_total_throws () {

    $count = PokerDice::$counter;
    return $count;

}

}



echo "<h1>Poker game</h1>";


for ($i = 0; $i <= 4; $i++) {

$dice = "dice" . ($i + 1);

$$dice = new PokerDice;;

//echo var_dump ($$dice);

$turn = $$dice->side_up($$dice);

echo "<h2>" . $turn . "</h2> ";

}

echo "<h2>Number of throws: " . $$dice->get_total_throws() . "</h2>";




