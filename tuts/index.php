<?php 

    include('config/db_connect.php');

    // write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';


    // make query and get result
    $result = mysqli_query($conn, $sql);


    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);


    // close connection
    mysqli_close($conn);


?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
 	<title>Percy Pizza</title>
    
 </head>
 <body class="bg-light">
    <?php include('templates/header.php'); ?>

    <h1 class="text-center">Pizza</h1>
    <div class="container ">

        <div class="row justify-content-center">

        <?php  foreach($pizzas as $pizza): ?>

        <div class="col-6 text-center mt-2 mb-2">
            <div class="card">
              <h5 class="card-header"><?php echo htmlspecialchars($pizza['title']); ?></h5>
              <div class="card-body">
                <div>
                    <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                        <p><?php echo htmlspecialchars($ing); ?></p>
                    <?php endforeach; ?>
                </div>
                <a href="details.php?id=<?php echo $pizza['id'] ?>" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>

        <?php endforeach; ?>
        </div>
    </div>


    <?php include('templates/footer.php'); ?>
    

 </body>
 </html>