

<?php

/*

Create the *PokerDice class. The faces of a poker dice have the following figures: Ace, K, Q, J, 7 and 8.

It creates the *throw method that does nothing more than roll the dice, that is, it generates a random value for the object to which the method is applied.

It also creates the *shapeName method, which tells which shape came up on the last roll of the dice in question.

Make an app that allows you to roll five poker dice at once.

Also, program the *getTotalThrows method which has to show the total number of throws among all the dice

***********************************
In Level 2, why are you merging the throw and the show steps? Also, you can improve your program thinking about how to implement the faces of the dice ;)

Other thing its, why don't you create 5 dice and then throw it the times that you want? Its better that creating a dice eeevery time.

*/

echo "<title>*POKER*</title>";


    
class PokerDice {

private static $dice_array = array ("Ace", "K", "Q", "J", "7", "8");
private static $counter = 0;



function __construct () {

$dice_array;

}


function throw () {

  $index = rand (0, 5);
  self::$counter++;
  return $index;

}

function side_up ($index) {

  $up = PokerDice::$dice_array[$index];
  return $up;
}

function get_total_throws () {

    $count = PokerDice::$counter;
    return $count;

}

}


echo "<h1>Poker game</h1>";
//creating 5 dice cubes
for ($i = 0; $i <= 4; $i++) {

    $dice = "dice" . ($i + 1);
    
    $$dice = new PokerDice;;
}

//making 10 throws of created dices
for ($j = 0; $j <= 9; $j++) {

    $throw = $$dice->throw();

    $turn = $$dice->side_up($throw);

echo $turn . " ";

echo "<br \>";
}


echo "<h2>Number of throws: " . $$dice->get_total_throws() . "</$turn>";


