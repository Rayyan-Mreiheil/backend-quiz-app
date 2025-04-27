<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Prepare an SQL statement to select all quizzes from the 'quizzes' table
    $query = $connection->prepare("SELECT * FROM quizzes");
    
    // Execute the prepared statement
    $query->execute();
    
    // Initialize an empty array to hold the results
    $result = [];

    // Fetch each quiz record as an associative array and add it to the result array
    while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
        // You can use array_push($result, $user); or simply:
        $result[] = $user;
    }
    
    // Convert the result array to JSON format and send it as a response
    echo json_encode($result);

} catch (\Throwable $th) {
    
}
