<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (quiz ID and new quiz description) from an HTTP POST request
    $quizeID = $_POST["quizeID"];
    $quizDescription = $_POST["quizDescription"];

    // Prepare an SQL statement to update the quiz description for a specific quiz ID
    $query = $connection->prepare(
        "UPDATE quizzes SET quizDescription = :quizDescription WHERE quizeID = :quizeID"
    );

    // Bind the input values to the SQL statement to prevent SQL injection
    $query->bindParam(":quizeID", $quizeID, PDO::PARAM_INT); // Quiz ID is an integer
    $query->bindParam(":quizDescription", $quizDescription, PDO::PARAM_STR_CHAR); // Description is a string

    // Execute the prepared statement
    $query->execute();

    // Send a success message back as JSON
    echo json_encode([
        "message" => "You updated quiz information successfully!"
    ]);
    
} catch (\Throwable $th) {
    // If there is any error, catch it and send a generic error message as JSON
    echo json_encode([
        // "error" => $th->getMessage(), // (Optional) Uncomment for detailed error during development
        "message" => "something went wrong"
    ]);
}
