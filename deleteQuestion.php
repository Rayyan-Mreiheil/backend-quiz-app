<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive the question ID from an HTTP POST request to delete a specific question
    $quID = $_POST["quID"];

    // Prepare an SQL statement to delete a question by its ID
    $query = $connection->prepare("DELETE FROM questions WHERE quID = :quID");

    // Bind the question ID to the SQL statement to prevent SQL injection
    $query->bindParam(":quID", $quID, PDO::PARAM_INT);

    // Execute the prepared statement to delete the question
    $query->execute();

    // Send a success message back as JSON
    echo json_encode([
        "message" => "You deleted the question successfully!"
    ]);
    
} catch (\Throwable $th) {
    // If an error occurs, catch it and send a generic error message
    echo json_encode([
        // "error" => $th->getMessage(),  // (Optional) for detailed error messages during development
        "message" => "something went wrong"
    ]);
}
