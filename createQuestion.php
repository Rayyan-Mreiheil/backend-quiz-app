<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (question title, score, and associated quiz ID) from an HTTP POST request
    $quTitle = $_POST["quTitle"];
    $quScore = $_POST["quScore"];
    $quizID = $_POST["quizID"];

    // Prepare an SQL statement to insert a new question into the 'questions' table
    $query = $connection->prepare("INSERT INTO questions (quTitle, quScore, quizID) VALUES (:quTitle, :quScore, :quizID)");

    // Bind the input values to the SQL statement to prevent SQL injection
    $query->bindParam(":quTitle", $quTitle, PDO::PARAM_STR_CHAR); // Question title (string)
    $query->bindParam(":quScore", $quScore, PDO::PARAM_INT);       // Question score (integer)
    $query->bindParam(":quizID", $quizID, PDO::PARAM_INT);          // Quiz ID it belongs to (integer)

    // Execute the prepared statement
    $query->execute();

    // Send a success message back as JSON
    echo json_encode([
        "message" => "You have inserted this new question successfully!"
    ]);
    
} catch (\Throwable $th) {
    // If any error occurs, catch it and send a generic error message
    echo json_encode([
        // "error" => $th->getMessage(), // (Optional) can be used during debugging
        "message" => "something went wrong"
    ]);
}
