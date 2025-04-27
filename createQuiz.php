<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (quiz title and description) from an HTTP POST request
    $quizTitle = $_POST["quizTitle"];
    $quizDescription = $_POST["quizDescription"];

   
} catch (\Throwable $th) {
    
}
