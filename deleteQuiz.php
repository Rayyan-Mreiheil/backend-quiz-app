<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive the quiz ID to delete from an HTTP POST request
    $quizeID = $_POST["quizeID"];

    // Prepare an SQL statement to delete a quiz by its ID
    $query = $connection->prepare("DELETE FROM quizzes WHERE quizeID = :quizeID");

    // Bind the quiz ID to the SQL statement to prevent SQL injection
    $query->bindParam(":quizeID", $quizeID, PDO::PARAM_INT);

    // Execute the prepared statement
    $query->execute();

    // Send a success message back as JSON
    echo json_encode([
        "message" => "You deleted the quiz successfully!"
    ]);
    
} catch (\Throwable $th) {
    // If any error occurs, catch it and send a generic error message
    echo json_encode([
        // "error" => $th->getMessage(), // (Optional) for debugging
        "message" => "something went wrong"
    ]);
}
