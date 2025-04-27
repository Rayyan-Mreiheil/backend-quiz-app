<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (quiz title and description) from an HTTP POST request
    $quizTitle = $_POST["quizTitle"];
    $quizDescription = $_POST["quizDescription"];

    // Prepare an SQL statement to insert a new quiz into the 'quizzes' table
    $query = $connection->prepare("INSERT INTO quizzes (quizTitle, quizDescription) VALUES (:quizTitle, :quizDescription)");

    // Bind the input values to the SQL statement to prevent SQL injection
    $query->bindParam(":quizTitle", $quizTitle, PDO::PARAM_STR_CHAR);
    $query->bindParam(":quizDescription", $quizDescription, PDO::PARAM_STR_CHAR);

    // Execute the prepared statement
    $query->execute();

    // Send a success message back as JSON
    echo json_encode([
        "message" => "You have inserted this quiz successfully!"
    ]);
    
} catch (\Throwable $th) {
    // If there is any error, catch it and send a generic error message as JSON
    echo json_encode([
        // "error" => $th->getMessage(), // Uncomment this line during development for detailed error info
        "message" => "something went wrong"
    ]);
}
