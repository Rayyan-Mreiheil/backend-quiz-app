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
    $query = $connection->prepare("INSERT INTO users (userName, userEmail, userPassword, userRole) VALUES (:userName, :userEmail, :userPassword, :userRole)");

    
} catch (\Throwable $th) {
    
}
