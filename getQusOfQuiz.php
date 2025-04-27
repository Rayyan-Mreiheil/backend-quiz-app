<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive the quiz ID from an HTTP POST request to fetch its questions
    $quizID = $_POST["quizID"];

    // Prepare an SQL statement to select all questions that belong to a specific quiz ID
    $query = $connection->prepare("SELECT * FROM questions WHERE quizID = :quizID");

    // Bind the quiz ID to the SQL statement to prevent SQL injection
    $query->bindParam(":quizID", $quizID, PDO::PARAM_INT);

    // Execute the prepared statement
    $query->execute();
    
    // Initialize an empty array to store the questions fetched from the database
    $result = [];

    // Fetch each question as an associative array and add it to the result array
    while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
        // Use array push or simple array addition to store each fetched question
        $result[] = $user;
    }

    // Return the questions as a JSON response
    echo json_encode([$result]);

    // echo json_encode([
    //     "message" => "These are all the questions that belong to quiz ID $quizID",
    //     "result" => $result
    // ]);

} catch (\Throwable $th) {
    // If an error occurs, catch it and send a generic error message
    echo json_encode([
        "message" => "something went wrong"
    ]);
}
