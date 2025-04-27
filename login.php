
<?php

try {
    // Include the database connection file
    include("./connection.php");

    // Receive user input (email and password) from an HTTP POST request
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];

    // Prepare an SQL statement to select a user matching the provided email and password
    $query = $connection->prepare("SELECT * FROM users WHERE userEmail = :userEmail AND userPassword = :userPassword");

    // Bind the input values to the SQL statement to prevent SQL injection
    $query->bindParam(":userEmail", $userEmail, PDO::PARAM_STR_CHAR);
    $query->bindParam(":userPassword", $userPassword, PDO::PARAM_STR_CHAR);

    // Execute the prepared statement
    $query->execute();

    // Fetch the first matching user from the database
    $user = $query->fetch(PDO::FETCH_ASSOC);
    
    // Check if a user was found
    if ($user) {
        // If a user exists, return a success message as JSON
        echo json_encode([
            "message" => "Welcome, you have an account!",
            // "user" => $user  // (Optional) send user data as well
        ]);
    } else {
        // If no user found, return an error message
        echo json_encode([
            "message" => "Incorrect email or password."
        ]);
    }

} catch (\Throwable $th) {
    // Catch any errors and return a generic error message
    echo json_encode([
        "message" => "something went wrong"
    ]);
}
