<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Prepare an SQL statement to select all quizzes from the 'quizzes' table
    $query = $connection->prepare("SELECT * FROM quizzes");
    
    // Execute the prepared statement
    $query->execute();
    
    
} catch (\Throwable $th) {
    
}
