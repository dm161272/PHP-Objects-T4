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

Write a program that defines a *Shape class with a constructor that takes width and height as parameters.
 Define two subclasses; Triangle and Rectangle that inherit from 
 *Shape and respectively calculate the area of the shape *area().

To the file *main define two objects, a triangle and a rectangle and trick the *area method of each one.


-->



   
<h2>Area calculator</h2>
    
    <h3>Enter data below:</h3>
    <form action ="" method ="POST" style="display: table;">
        <label>Choose shape:</label><br />
        <label for="rect">Rectangle</label>
        <input type="radio" id="rect" name="shape" value="rect"><br />

        <label for="tri">Triangle</label>
        <input type="radio" id="tri" name="shape" value="tri"><br />

        <label>Enter height:</label> <input type="number" name="ht" value="" ><br />

        <label>Enter width: </label> <input type="number" name="wh" value=""><br />

        <label><input type="submit" value="Submit" name="submit"></label><br />
        </form>


<?php
        abstract class Shape {
            //Properties
            private $height;
            private $width;
           
            
            //Methods
            function __construct ($height, $width) {
            
                $this->height = $height;
                $this->width = $width;
        
            }
        
            abstract protected function calc_area ($height, $width);
            
        }
        
        class Rectangle extends Shape {


            public function calc_area ($height, $width) {
        
                $area = $height * $width;
                return $area;

            }

        }


        class Triangle extends Shape {

            public function calc_area ($height, $width) {
        
                $area =  $height * $width / 2;
                return $area;
               

            }
            
        }

            if (isset($_POST['submit'])) {
                $height = $_POST['ht'];
                $width = $_POST['wh'];
                $shape = $_POST['shape'];
            
                if ($shape == "rect") {
                $sh = new Rectangle ($height, $width);
                } 
                else {
                $sh = new Triangle ($height, $width);
                }
            
              echo "The area of " . get_class ($sh) . " is: " . $sh->calc_area($height, $width);
             
            
                }
            
        
            
        
            ?>


    </body>
    </html>
