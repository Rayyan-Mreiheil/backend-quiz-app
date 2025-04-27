<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive the quiz ID from an HTTP POST request to fetch its questions
    $quizID = $_POST["quizID"];

    // Prepare an SQL statement to select all questions that belong to a specific quiz ID
    $query = $connection->prepare("SELECT * FROM questions WHERE quizID = :quizID");

    
} catch (\Throwable $th) {
   
}
