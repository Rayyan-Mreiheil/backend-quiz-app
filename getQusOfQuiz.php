<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive the quiz ID from an HTTP POST request to fetch its questions
    $quizID = $_POST["quizID"];

    
    
} catch (\Throwable $th) {
   
}
