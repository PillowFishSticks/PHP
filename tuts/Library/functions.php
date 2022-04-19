

<?php 

// fucntions 
// Pass in arguments 

function catNames($name){
    echo $name;
}

catNames('Meow');

echo '<br>';

// Setting $name to a default value

function dogNames($name = "Powers"){
    echo $name;
}

dogNames();

echo '<br>';

// Passing an array in a function

function formatBook($books){
    echo "{$books['title']} has {$books['pages']} pages <br>";
}

formatBook(['title'=> 'Harry Potter', 'pages' => 40]);

echo '<br>';

// Return function 

function pets($pet){
    return "{$pet['name']} is {$pet['age']} years old <br>";
}

$petted = pets(['name'=>'Powers', 'age'=> 2]);
echo $petted;

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