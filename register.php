<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input from an HTTP POST request
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];
    $userRole = $_POST["userRole"];

    // Prepare an SQL statement to insert a new user into the 'users' table
    $query = $connection->prepare("INSERT INTO users (userName, userEmail, userPassword, userRole)  VALUES (:userName, :userEmail, :userPassword, :userRole)");

    // Bind the input values to the SQL statement to prevent SQL injection
    $query->bindParam(":userName", $userName, PDO::PARAM_STR_CHAR);
    $query->bindParam(":userEmail", $userEmail, PDO::PARAM_STR_CHAR);
    $query->bindParam(":userPassword", $userPassword, PDO::PARAM_STR_CHAR);
    $query->bindParam(":userRole", $userRole, PDO::PARAM_STR_CHAR);

    // Execute the prepared statement
    $query->execute();

    
    
} catch (\Throwable $th) {
    
}
