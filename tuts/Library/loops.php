

<?php 

// loops

//variations of a for loop through an array
$family = ['mark', 'michelle', 'powers'];

for($i = 0; $i < count($family); $i++){
    echo $family[$i] . '<br>';
};

foreach ($family as $family) {
    echo $family . '<br>';
};

//cycle through a multi dimensional loop
$books = [
    ['author'=> 'Mark', 'title'=> 'Harry Potter', 'pages' => 40],
    ['author'=> 'Michelle', 'title'=> 'Witcher', 'pages' => 100],
    ['author'=> 'Powers', 'title'=> 'Doggy Treats', 'pages' => 2]
];

foreach($books as $book){
    echo $book['author'] . "-" . $book['title'];
    echo '<br />';
};

// while loop cycle through a block of code while a condition is true

$i = 0;

while($i < count($books)){
    echo $books[$i]['author'];
    echo '<br>';
    $i++;
}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>My First project</title>
    
 </head>
 <body>
    <h1>Books</h1>
    <ul>
        <?php foreach ($books as $book) { ?>
            <h1><?php echo $book['author']; ?></h1>
            <p><?php echo $book['title']; ?></p>
        <?php } ?>
    </ul>
    
 </body>
 </html>