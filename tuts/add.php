<?php 
   
   include('config/db_connect.php');

   $email = $title = $ingredients = '';
   $errors = array('email' => '', 'title' => '', 'ingredients' => '');

   if(isset($_POST['submit'])){
      
      // check email
      if(empty($_POST['email'])){
         $errors['email'] = 'An email is required';
      } else{
         $email = $_POST['email'];
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address';
         }
      }

      // check title
      if(empty($_POST['title'])){
         $errors['title'] = 'A title is required';
      } else{
         $title = $_POST['title'];
         if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'Title must be letters and spaces only';
         }
      }

      // check ingredients
      if(empty($_POST['ingredients'])){
         $errors['ingredients'] = 'At least one ingredient is required';
      } else{
         $ingredients = $_POST['ingredients'];
         if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'Ingredients must be a comma separated list';
         }
      }

      if(array_filter($errors)){
         // echo "errrors in the form";
      } else {
         $email = mysqli_real_escape_string($conn, $_POST['email']);
         $title = mysqli_real_escape_string($conn, $_POST['title']);
         $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

         // create new sql
         $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title', '$email', '$ingredients')";

         //save to database and check

         if(mysqli_query($conn, $sql)){
            header('Location: index.php');
         } else {
            //error
            echo 'query error:' . mysqli_error($conn);
         }
      }
   } // end POST check

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

      <section class="container mt-5 mb-5 ">
         <form class="g-3" action="add.php" method="POST">
            <div class="row justify-content-center mt-2">
               <div class="col-6">
                  <label class="form-label">Your email</label>
                  <input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo htmlspecialchars($email) ?>" required>
                  <div class="alert-danger" role="alert"><?php echo $errors['email']; ?></div>
               </div>
            </div>
            <div class="row justify-content-center mt-2">
               <div class="col-6">
                  <label class="form-label">Pizza Name</label>
                  <input type="text" name="title" placeholder="Pizza Name" class="form-control" value="<?php echo htmlspecialchars($title) ?>" required>
                  <div class="alert-danger" role="alert"><?php echo $errors['title']; ?></div>
               </div>
            </div>
            <div class="row justify-content-center mt-2">
               <div class="col-6">
                  <label class="form-label">Ingredients (comma separated)</label>
                  <input type="text" name="ingredients" placeholder="Ingredients" class="form-control" value="<?php echo htmlspecialchars($ingredients) ?>" required>
                  <div class="alert-danger" role="alert"><?php echo $errors['ingredients']; ?></div>
               </div>
            </div>

            <div class="text-center mt-3">
                  <input type="submit" name="submit" value="submit" class="btn btn-success btn-md">
            </div>
         </form>
      </section>

    <?php include('templates/footer.php'); ?>
    

 </body>
 </html>