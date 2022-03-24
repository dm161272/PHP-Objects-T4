<?php

require_once ("client.php");
require_once ("account.php");
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      label {
        display: inline-block;
        width: 100px;
        text-align: left;
      }
    </style>
    <title>Document</title>
</head>
<body>


<!--

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

-->



   
<h2>Bank project</h2>
    
    <h3>Enter client's data below:</h3>
    <form action ="" method ="POST" style="display: table;">

        <label>First name:</label> <input type="text" name="fn" value="" ><br />

        <label>Last name: </label> <input type="text" name="ln" value=""><br />

        <label>Account number: </label> <input type="number" name="num" value=""><br />

        
        <br />
        <div><input type="submit" value="Submit" name="submit"></div>
        <br />

        </form>


        <h3>Deposit:</h3>
       <form action ="" method ="POST" style="display: table;">

        <label>Amount:</label> <input type="number" name="dp" value="777" ><br />

        <br />
        <div><input type="submit" value="Submit" name="deposit"></div>
        <br />

        </form>

       
<?php

      


        if (!isset($_SESSION['array'])) {
        $_SESSION['array'] = array();
        }
        
                   
            if (isset($_POST['submit'])) {
                $fn = $_POST['fn'];
                $ln = $_POST['ln'];
                $num = $_POST['num'];

                $client = new Client ($fn, $ln, $num);

                //array_push ($_SESSION["array"], $client);

                $_SESSION['array'][] = $client;
               
                  echo var_dump ($_SESSION['array']);
                
                }
                
                echo "<br \>";


                if (isset($_POST['deposit'])) {
                  $dp = $_POST['dp'];



                    echo $dp;
          
                  }


                // session_destroy();
                // { [0]=> object(Client)#1 (3) { ["first_name"]=> string(0) "" ["last_name"]=> string(0) "" 
                 // ["account"]=> object(Account)#2 (2) { ["account_number"]=> string(0) "" ["account_balance":"Account":private]=> int(0) } } 
            ?>


    </body>
    </html>
