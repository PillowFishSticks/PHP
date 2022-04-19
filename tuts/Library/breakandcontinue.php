

<?php 

    $books = [
    ['author'=> 'Mark', 'title'=> 'Harry Potter', 'pages' => 40],
    ['author'=> 'Michelle', 'title'=> 'Witcher', 'pages' => 100],
    ['author'=> 'Powers', 'title'=> 'Doggy Treats', 'pages' => 2],
    ['author'=> 'Biggles', 'title'=> 'Catnip', 'pages' => 11]
];

// break and continue loops based on conditions

foreach($books as $book){

    if($book['title'] === 'Doggy Treats'){
        break;
    }

    if($book['pages'] < 10){
        continue;
    }
    echo $book['pages'] . '<br>';
    echo $book['title'] . '<br>';
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
    

 </body>
 </html>