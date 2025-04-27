<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive the quiz ID to delete from an HTTP POST request
    $quizeID = $_POST["quizeID"];

    // Prepare an SQL statement to delete a quiz by its ID
    $query = $connection->prepare("DELETE FROM quizzes WHERE quizeID = :quizeID");

    // Bind the quiz ID to the SQL statement to prevent SQL injection
    $query->bindParam(":quizeID", $quizeID, PDO::PARAM_INT);

    
    
} catch (\Throwable $th) {
    
}
