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

require_once ("account.php");


class Client {

public $first_name;
public $last_name;

function __construct ($first_name, $last_name, $account_number) {

$this->first_name = $first_name;
$this->last_name = $last_name;

$this->account = new Account ($account_number);

}






}