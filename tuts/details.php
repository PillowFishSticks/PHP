<?php 

	include('config/db_connect.php');

	if(isset($_POST['delete'])){

		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

		$sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

		if(mysqli_query($conn, $sql)){
			//success
			header('Location: index.php');
		} {
			//failure 
			echo 'query error: ' . mysqli_error($conn);
		}
	}

	// check GET request id param
	if(isset($_GET['id'])){
		
		// escape sql chars
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		// make sql
		$sql = "SELECT * FROM pizzas WHERE id = $id";

		// get the query result
		$result = mysqli_query($conn, $sql);

		// fetch result in array format
		$pizza = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($conn);

	}

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

      <div class="container">
      	<?php if($pizza): ?>
      		<h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
      		<p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
      		<p><?php echo date($pizza['created_at']);  ?></p>
      		<h5>Ingredients:</h5>
      		<p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

      		<!-- delete form -->
      		<form action="details.php" method="POST">
      			<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
      			<input type="submit" name="delete" value="Delete" class="btn btn-danger">
      		</form>

      	<?php else: ?>

      		<h5>No such pizza exists!</h5>
      	<?php endif; ?>
      </div>

    <?php include('templates/footer.php'); ?>
    

 </body>
 </html>