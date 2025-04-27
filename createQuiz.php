<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (quiz title and description) from an HTTP POST request
    $quizTitle = $_POST["quizTitle"];
    $quizDescription = $_POST["quizDescription"];

    // Prepare an SQL statement to insert a new quiz into the 'quizzes' table
    $query = $connection->prepare(
        "INSERT INTO quizzes (quizTitle, quizDescription) 
         VALUES (:quizTitle, :quizDescription)"
    );

    
    
} catch (\Throwable $th) {
    
}
