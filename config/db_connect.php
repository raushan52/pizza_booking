<?php 

     //connect to database
     $conn = mysqli_connect('localhost', 'raushan', 'test1234', 'pizza_store');

     //check connection
     if(!$conn){
         echo 'Connection error: ' . mysqli_connect_error();
     }


?>