<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (quiz title and description) from an HTTP POST request
    $quizTitle = $_POST["quizTitle"];
    $quizDescription = $_POST["quizDescription"];

    // Prepare an SQL statement to insert a new quiz into the 'quizzes' table
    $query = $connection->prepare(
        "INSERT INTO quizzes (quizTitle, quizDescription) 
         VALUES (:quizTitle, :quizDescription)"
    );

    // Bind the input values to the SQL statement to prevent SQL injection
    $query->bindParam(":quizTitle", $quizTitle, PDO::PARAM_STR_CHAR);
    $query->bindParam(":quizDescription", $quizDescription, PDO::PARAM_STR_CHAR);

    
    
} catch (\Throwable $th) {
    
}
