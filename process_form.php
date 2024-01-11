<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $queryType = $_POST["query-type"];
    $message = $_POST["message"];

    // Compose email content
    $subject = "Contact Form Submission - Dog Style";
    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Phone Number: $number\n";
    $emailContent .= "Query Type: $queryType\n";
    $emailContent .= "Message:\n$message";

    // Replace with your email address where you want to receive form submissions
    $to = "dogstyleloughrea@gmail.com";

    // Send the email
    if (mail($to, $subject, $emailContent)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    // Invalid request method
    echo "error invalid method";
}
?>