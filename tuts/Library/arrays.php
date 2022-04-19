

<?php 

// indexed arrays 
// getting a specific part of an array 

$peopleOne = ['Shaun', 'Mark', 'Powers'];

echo $peopleOne[0];

echo '<br>';

$peopleTwo = array('Mark', 'Biggles', 'Ronel');

echo $peopleTwo[1];

echo '<br>';

// How to see everything in the array

$numbers = [1, 2, 3, 4];

print_r($numbers);

echo '<br>';

// How to change values in an array 

$numbers[0] = 7;

print_r($numbers);

echo '<br>';

// Add a new value at the end of an array

$numbers[] = 5;

print_r($numbers);

echo '<br>';

array_push($numbers, 5);

print_r($numbers);

echo '<br>';

// How many values are in an array

echo count($numbers);

echo '<br>';

// merge two arrays

$peopleThree = array_merge($peopleOne, $peopleTwo);

print_r($peopleThree);

// associative arrays 

echo '<br>';

// echo and creating the array

$family = ['Ronel'=> 'Mom', 'Brett'=> 'Dad', 'Lance'=> 'Brother'];
echo $family['Lance'];
echo '<br>';

print_r($family);

echo '<br>';
// add new items to the array
$familyTwo = ['Michelle'=> 'Wife', 'Biggles'=> 'cat', 'Powers'=> 'dog'];
$familyTwo['Judy'] = 'Michelles Mom';
print_r($familyTwo);

echo '<br>';
// merge 2 arrays

$familyThree = array_merge($family, $familyTwo);
print_r($familyThree);

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