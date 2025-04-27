<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input from an HTTP POST request
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];
    $userRole = $_POST["userRole"];

    
} catch (\Throwable $th) {
    
}
