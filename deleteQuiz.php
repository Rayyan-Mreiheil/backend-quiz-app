<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive the quiz ID to delete from an HTTP POST request
    $quizeID = $_POST["quizeID"];

    
} catch (\Throwable $th) {
    
}
