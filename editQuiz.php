<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (quiz ID and new quiz description) from an HTTP POST request
    $quizeID = $_POST["quizeID"];
    $quizDescription = $_POST["quizDescription"];

    // Prepare an SQL statement to update the quiz description for a specific quiz ID
    $query = $connection->prepare(
        "UPDATE quizzes SET quizDescription = :quizDescription WHERE quizeID = :quizeID"
    );

   
    
} catch (\Throwable $th) {
    
}
