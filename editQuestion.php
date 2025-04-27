<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (question title and question ID) from an HTTP POST request
    $quTitle = $_POST["quTitle"];
    $quID = $_POST["quID"];

    // Prepare an SQL statement to update the question title for a specific question ID
    $query = $connection->prepare("UPDATE questions SET quTitle = :quTitle WHERE quID = :quID");

    
    
} catch (\Throwable $th) {
    
}
