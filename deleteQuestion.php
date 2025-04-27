<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive the question ID from an HTTP POST request to delete a specific question
    $quID = $_POST["quID"];

    
} catch (\Throwable $th) {
    
}
