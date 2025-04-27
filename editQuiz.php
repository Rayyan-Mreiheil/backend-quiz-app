<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (quiz ID and new quiz description) from an HTTP POST request
    $quizeID = $_POST["quizeID"];
    $quizDescription = $_POST["quizDescription"];

    
} catch (\Throwable $th) {
    
}
