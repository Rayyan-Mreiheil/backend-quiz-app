<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (question title and question ID) from an HTTP POST request
    $quTitle = $_POST["quTitle"];
    $quID = $_POST["quID"];

    
    
    
} catch (\Throwable $th) {
    
}
