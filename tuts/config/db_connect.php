<?php  
    // Connect to database 

    $conn = mysqli_connect('localhost', 'Mark', 'test1234', 'percy_pizza');

    // check connection

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>