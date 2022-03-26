<?php

require_once ("account.php");
session_start();



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

array(4) { [0]=> object(Client)#1 (3) { ["first_name"]=> string(0) "" ["last_name"]=> string(0) ""
   ["account"]=> object(Account)#2 (2)
   { ["account_number"]=> string(0) "" ["account_balance":"Account":private]=> int(0) } }


*/




        if (!isset($_SESSION['array'])) {
        $_SESSION['array'] = array();
        }
        
      
         $size = count ($_SESSION['array']);


              if (isset($_POST['submit'])) {
                
                $fn = $_POST['fn'];
                $ln = $_POST['ln'];
                $num = $_POST['num'];
              

              if (!input_check($fn) || !input_check($ln) || !input_check($num)) {
                echo "Fields can't be empty!";
                require_once ("index.php");
               
              }
            

               

                


               if (name_check($fn, $ln) != NULL) {

                echo "Client " . $fn . " " . $ln . " already exists!<br />";

               }
              else 
              {
                $account = new Account ($fn, $ln, $num);
               
                $_SESSION['array'][] = $account;

                echo "New client " . $fn . " " . $ln . " added to database!<br />";
              }
              echo "<a href = index.php>Return to main menu</a>";

               }
            
  
                echo "<br />";




                if (isset($_POST['deposit'])) {
                  $fn = $_POST['fn'];
                  $ln = $_POST['ln'];
                  $num = $_POST['num'];
                  $dp = $_POST['dp'];


                  make_deposit ($fn, $ln, $dp);

                }


                if (isset($_POST['withdraw'])) {
                  $fn = $_POST['fn'];
                  $ln = $_POST['ln'];
                  $num = $_POST['num'];
                  $wd = $_POST['wd'];

                  make_withdraw ($fn, $ln, $wd);

                }
                  

                  function name_check($fn, $ln) {
                
                  $size = count ($_SESSION['array']);
                  $i = 0;
                  $object;
                   
                   if ($size != 0) {
                   do {
                  
                    if ($fn == $_SESSION['array'][$i]->first_name && $ln == $_SESSION['array'][$i]->last_name) {
                      
               
                      $object = $_SESSION['array'][$i];
                    } 
                  
                    $i++;
                  } while ($i < $size && !$checker);
                }      
                  return $object;
                }
              


                function account_check($num, $account) {
                
                  $checker = true;
                    if ($num != $account->account) {
 
                      $checker = false;
                }      
                  return $checker;
                }





                function input_check ($check) {

                  $checker = true;

                  if(!isset($check) || trim($check) == '') {

                    $checker = false;
                  }

                }



                function make_deposit ($fn, $ln, $dp) {

                  $size = count ($_SESSION['array']);
                  $i = 0;
                  $checker = false;
                  $account = name_check($fn, $ln);
                  $mode = 1;

                  
                  if (isset($account)) {

                    echo "Account number: " . $account->get_account_number() . "<br />";
                    echo "Account balance: " . $balance = $account->get_account_balance() . "<br />";

                    if (!($account->check_balance($balance, $dp, $mode))) {

                    $to_print = "<br />Amount must be higher than 0!<br />";
                    }
                    else
                    {

                    $balance = $account->deposit($dp);
                    $to_print = "Deposit accepted!<br />New account balance: " . $balance;
                    }
                  }
                  echo $to_print . "<br />";
                  echo "<a href = index.php>Return to main menu</a>";
                  }

                



                function make_withdraw ($fn, $ln, $wd) {

                  $size = count ($_SESSION['array']);
                  $i = 0;
                  $checker = false;
                  $account = name_check($fn, $ln);
                  $mode = 2;
                  if (isset($account)) {

                    echo "Account number: " . $account->get_account_number() . "<br />";
                    echo "Account balance: " . $balance = $account->get_account_balance() . "<br />";

                    if (!($account->check_balance($balance, $wd, $mode))) {

                    $to_print = "<br />Please choose amount smaller or equal to: " . $balance . "<br />";
                    }
                    else
                    {
                    $balance = $account->withdraw($wd);
                    $to_print = "Withdraw accepted!<br />New account balance: " . $balance;
                  }

                  }

                  echo $to_print . "<br />";
                  echo "<a href = index.php>Return to main menu</a>";
                }

          
            
                 ?>
