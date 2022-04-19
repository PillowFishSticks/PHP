

<?php 

// conditional statements
// simple condition

$price = 10;

if ($price < 10) {
    echo 'the condition is met';
} elseif ($price < 20){
    echo 'elseif condition met';
} else {
    echo 'the condition is not met';
}

//

$books = [
    ['author'=> 'Mark', 'title'=> 'Harry Potter', 'pages' => 40],
    ['author'=> 'Michelle', 'title'=> 'Witcher', 'pages' => 100],
    ['author'=> 'Powers', 'title'=> 'Doggy Treats', 'pages' => 2]
];

echo '<br>';

// and if statement

foreach ($books as $book) {
    if($book['pages'] < 200 && $book['pages'] > 10 ){
        echo $book['title'] . '<br>';
    }
}

// or if statement
echo '<br>';

foreach ($books as $book) {
    if($book['pages'] < 100 || $book['pages'] < 50 ){
        echo $book['title'] . '<br>';
    }
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
    
    <div>
        <ul>
            <?php foreach ($books as $book){ ?>
                <?php if($book['pages'] > 15){ ?>
                    <li><?php echo $book['title']; ?></li>
                <?php } ?>
            <?php } ?> 
        </ul>
    </div>

 </body>
 </html>