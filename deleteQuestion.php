<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive the question ID from an HTTP POST request to delete a specific question
    $quID = $_POST["quID"];

    // Prepare an SQL statement to delete a question by its ID
    $query = $connection->prepare("DELETE FROM questions WHERE quID = :quID");

    // Bind the question ID to the SQL statement to prevent SQL injection
    $query->bindParam(":quID", $quID, PDO::PARAM_INT);

    
    
} catch (\Throwable $th) {
    
}
