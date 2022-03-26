

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      label {
        display: inline-block;
        width: 130px;
        text-align: left;
        background-color: lightgrey;
      }

      div {
        display:inline-block;
        margin: 10px;
      }

      body {

        background-color: lightgrey;
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


<div>

    <a href="unset.php">Clear the DATABASE!!!</a>

    <div>

    <h3>Add client:</h3>
    <form action ="bank.php" method ="POST" style="display: table;">

        <label>First name:</label> <input type="text" name="fn" value=""><br />

        <label>Last name: </label> <input type="text" name="ln" value=""><br />

        <label>Account number: </label> <input type="number" name="num" value=""><br />
        <br />
        <br />
        <br />
        <div><input type="submit" value="Submit" name="submit"></div>
        <br />
       
        </form>
      </div>
        

      <div>
        <h3>Deposit:</h3>
       <form action ="bank.php" method ="POST" style="display: table;">

        <label>First name:</label> <input type="text" name="fn" value=""><br />

        <label>Last name: </label> <input type="text" name="ln" value=""><br />

        <label>Account number: </label> <input type="number" name="num" value=""><br /><br />

        <label>Amount:</label> <input type="number" name="dp" value=""><br />

        <br />
        <div><input type="submit" value="Deposit" name="deposit"></div>
        <br />

        </form>
        </div>

                                                <!-- <form action="/action_page.php">
                                          <label for="cars">Choose a car:</label>
                                          <select name="cars" id="cars">
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="opel">Opel</option>
                                            <option value="audi">Audi</option>
                                          </select>
                                          <br><br>
                                          <input type="submit" value="Submit">
                                        </form> -->


        <div>
        <h3>Withdraw:</h3>
        <form action ="bank.php" method ="POST" style="display: table;">
 
         <label>First name:</label> <input type="text" name="fn" value=""><br />
 
         <label>Last name: </label> <input type="text" name="ln" value=""><br />
 
         <label>Account number: </label> <input type="number" name="num" value=""><br /><br />
 
         <label>Amount:</label> <input type="number" name="wd" value=""><br />
 
         <br />
         <div><input type="submit" value="Withdraw" name="withdraw"></div>
         <br />
         </form>
         </div>
         

</div>

    </body>
    </html>
