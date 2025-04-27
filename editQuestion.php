<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (question title and question ID) from an HTTP POST request
    $quTitle = $_POST["quTitle"];
    $quID = $_POST["quID"];

    // Prepare an SQL statement to update the question title for a specific question ID
    $query = $connection->prepare("UPDATE questions SET quTitle = :quTitle WHERE quID = :quID");

    // Bind the input values to the SQL statement to prevent SQL injection
    $query->bindParam(":quTitle", $quTitle, PDO::PARAM_STR_CHAR);  // Question title (string)
    $query->bindParam(":quID", $quID, PDO::PARAM_INT);              // Question ID (integer)

    // Execute the prepared statement to update the question
    $query->execute();

    
    
} catch (\Throwable $th) {
    
}
