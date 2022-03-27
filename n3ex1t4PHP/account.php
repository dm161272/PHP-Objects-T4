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


class Account {

    public $first_name;
    public $last_name;

    public $account_number;
    private $account_balance;


    
    function __construct ($first_name, $last_name, $account_number, $account_balance = 0) {
    
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    
    $this->account_number = $account_number;
    $this->account_balance = $account_balance;
    
    }


function get_account_balance() {

    return $this->account_balance;
}

function get_account_number() {

    return $this->account_number;
}



function deposit ($amount) {

    $this->account_balance += $amount;

    return $this->account_balance;

}

function withdraw ($amount) {


    $this->account_balance -= $amount;   

    return $this->account_balance;

}




function check_balance ($account_balance, $amount, $mode = 0) {

    $checker = true;
    $mode = (int) $mode;

    if ($amount <= 0 && $mode == 0) {

        $checker = false;
    }
        
    if ((($account_balance - $amount) < 0 || $amount <= 0) && $mode == 1) {
        
        $checker = false;
    }

    return $checker;
    }



}


