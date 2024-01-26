<?php
// submit_form.php

// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    // Validate and sanitize data (you should implement more robust validation)
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);
    $age = intval($age); // Convert age to an integer
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Store data in a text file (you would typically use a database)
    $data = "Username: $username\nPassword: $password\nAge: $age\nEmail: $email\n";

    // Append data to a text file (you might want to use a more secure method in production)
    file_put_contents("user_data.txt", $data, FILE_APPEND);

    // Redirect to a success page or perform other actions as needed
    header("Location: success_page.html");
    exit();
} else {
    // If the form wasn't submitted via POST, redirect to an error page or handle accordingly
    header("Location: error_page.html");
    exit();
}
?>