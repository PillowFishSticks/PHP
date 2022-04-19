

<?php 

// Variable scope 

// Local vars
// Only available inside the function

function petName(){
    $name = 'Biggles';
    echo $name;
}

petName();

echo '<br>';

function petNameTwo($name){
    echo $name;
}

petNameTwo('Powers');

echo '<br>';

// Global vars 
// Changing a global var in a function

$name = 'Mark';

function poes(){
    global $name;
    echo "hello $name";
}

poes();

echo '<br>';

// Using a global var in a function without changing it

$age = 5;

function oldPoes($age){
    echo "Mark is $age years old";
}

oldPoes($age);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>My First project</title>
    
 </head>
 <body>
    

 </body>
 </html>