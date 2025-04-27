<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (question title, score, and associated quiz ID) from an HTTP POST request
    $quTitle = $_POST["quTitle"];
    $quScore = $_POST["quScore"];
    $quizID = $_POST["quizID"];

    
    
} catch (\Throwable $th) {
    
}
