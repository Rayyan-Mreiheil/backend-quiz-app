
<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (email and password) from an HTTP POST request
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];

    

} catch (\Throwable $th) {
    
}
