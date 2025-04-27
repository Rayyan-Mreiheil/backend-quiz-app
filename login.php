
<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (email and password) from an HTTP POST request
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];

    // Prepare an SQL statement to select a user matching the provided email and password
    $query = $connection->prepare("SELECT * FROM users WHERE userEmail = :userEmail AND userPassword = :userPassword");

    // Bind the input values to the SQL statement to prevent SQL injection
    $query->bindParam(":userEmail", $userEmail, PDO::PARAM_STR_CHAR);
    $query->bindParam(":userPassword", $userPassword, PDO::PARAM_STR_CHAR);

    // Execute the prepared statement
    $query->execute();

    
    

} catch (\Throwable $th) {
    
}
