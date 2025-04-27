<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive the quiz ID from an HTTP POST request to fetch its questions
    $quizID = $_POST["quizID"];

    // Prepare an SQL statement to select all questions that belong to a specific quiz ID
    $query = $connection->prepare("SELECT * FROM questions WHERE quizID = :quizID");

    // Bind the quiz ID to the SQL statement to prevent SQL injection
    $query->bindParam(":quizID", $quizID, PDO::PARAM_INT);

    
    
} catch (\Throwable $th) {
   
}
