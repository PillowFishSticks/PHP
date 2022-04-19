

<?php 




// use . to add two strings together

    $stringOne = 'My email is ';
    $stringTwo = 'markcpercy@gmail.com';
   
    echo $stringOne . $stringTwo;
    echo '<br>';

// single quotes to use . to add strings

    $name = 'Mark';
    echo 'My name is ' . $name;

    echo '<br>';

// double quotes to use the string and variable in one line

    $name = 'Michelle';

    echo "My name is $name";

    echo '<br>';
// use \ to use quotations in a string 
// use ' ' and then " " to use quotations in a string
    echo "Michelle said \"Hello\"";
    echo '<br>';
    echo 'Mark said "OH NO"';

// find a letter in a string
    echo '<br>';
    echo $name[1];

// find the length of a string
    echo '<br>';
    echo strlen($name);

// change the string to lower case
    echo '<br>';
    echo strtolower($name);

// change a letter in the string
    echo '<br>';
    echo str_replace('M', 'W', $name);
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