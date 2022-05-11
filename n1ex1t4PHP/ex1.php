<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     

      label {
       display: inline-block;
        width: 85px;
        font-weight: bold;
        text-align: left;
      }

      div {
        text-align: right;
      }

    </style>
    <title>Document</title>
</head>
<body>


<!--

Create a class *Employee defines his name and salary as attributes. Define a method *initialize 
that receives the name and salary as parameters. Propose a second method *print that prints 
the name and a message if he has or has not paid taxes (if the salary exceeds 6000 he pays taxes).

Exercise 1 in level 1 is running great but still having some misunderstood things in terms of 
object instantiation. 
You don't need to pass and employe to print method.

-->



   
<h2>Employee salary check</h2>
    
    <h3>Enter employee data below:</h3>
    <form action ="" method ="POST" style="display: table;">
       
        <label>First name:</label>
        <input type="text" name="fname" value=""><br />

        <label>Last name:</label>
        <input type="text" name="lname" value=""><br />
        
        <label>Salary:</label>
        <input type="number" name="salary" value=""><br />

        <br />
        <div><input type="submit" value="Submit" name="submit"></div>
        <br />
        
        </form>


<?php
        class Employee {
            //Properties
            public $first_name;
            public $last_name;
            public $salary;
            private static $taxbias = 6000;
            
            //Methods
            function __construct ($first_name, $last_name, $salary) {
            
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->salary = $salary;
            }
        
            
            //function to print employee data
            function to_print(){
            $taxable = "is taxable.";
            
            if ($this->salary <= Employee::$taxbias) {
                $taxable = "is NOT taxable.";
            }
            
            echo "<b>Employee: </b>" . $this->first_name . " " . $this->last_name . ", salary of " . $this->salary . " EUR " . $taxable . "<br />";
            
            }

        }
        
        
            if (isset($_POST['submit'])) {
                $first_name = $_POST['fname'];
                $last_name = $_POST['lname'];
                $salary = $_POST['salary'];
            
                $employee = new Employee ($first_name, $last_name, $salary);
              
                $employee->to_print();
            
            
                }
            
        
            
        
            ?>


    </body>
    </html>
