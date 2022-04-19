

<?php 
// you can change variables after declaring them but you cant change consanants

    define('NAME', 'Michelle');
   $name = 'Michelle';
   $age = 27;

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>My First project</title>
 </head>
 <body>
    <h1>User Profile Page</h1>

    <div>Hello my name is <?php echo NAME; ?> I am <?php echo $age ?> years old.</div>

 </body>
 </html>