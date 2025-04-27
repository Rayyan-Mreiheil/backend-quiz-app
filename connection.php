
<?php

try {
    // Database connection parameters
    $host = "localhost";       // Host where the database server is running
    $port = 3306;              // Default MySQL port
    $dbname = "quizappdb";     // Name of the database you want to connect to
    $user = "rayyan";          // Username to access the database
    $pass = "thanksgod@rayyan11"; // Password for the database user

    // Create a new PDO (PHP Data Object) instance for database connection
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
} catch (\Throwable $e) {
    // Catch any error (exception) during connection and output it
    echo $e;
}
