
<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (email and password) from an HTTP POST request
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];

    // Prepare an SQL statement to select a user matching the provided email and password
    $query = $connection->prepare("SELECT * FROM users WHERE userEmail = :userEmail AND userPassword = :userPassword");

    
    

} catch (\Throwable $th) {
    
}
