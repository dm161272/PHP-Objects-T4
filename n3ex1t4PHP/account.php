<?php

/* 

Create a Banks project, add to the project an *Account class with attributes for account number, name and surname 
of the client and the current balance. Define the following methods in the class:

Constructor that initializes the attributes.
Create the *deposit($*amount) method that allows you to enter an amount into the account.
Create the *withdraw($*amount) method that allows you to withdraw an amount from the account as long as there 
is a balance, if there is no method, it will have to return an error message
*Getters and Setters.
Create a small interface with the help of HTML AND *CSS that allows you to enter an amount and deposit or 
withdraw the balance of the account.

Fez the relevant validations to ensure that the amount entered by the user is correct.

*/

require_once ("client.php");

class Account {

    public $account_number;
    private $account_balance;


function __construct ($account_number) {
  
    $this->account_number = $account_number;
    $this->account_balance = 0;
}


function deposit ($account_number, $amount) {

    $account_balance = $account_number->$account_balance + $amount;

    return $account_balance;

}

function withdraw ($account_number, $amount) {

    if (checker ($account_number->$account_balance)) {

    $account_balance = $account_number->$account_balance - $amount;   

    return $account_balance;

}


}


function checker ($account_balance) {

    $checker = true;

if ($account_balance <= 0) {

    $checker = false;
}

}



}


