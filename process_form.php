<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include the PHPMailer autoloader
require 'path/to/your/phpmailer/autoload.php'; // Replace with the actual path

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $queryType = $_POST["query-type"];
    $message = $_POST["message"];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true); // Passing `true` enables exceptions

    try {
        // Configure the PHPMailer instance
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'your-smtp-host'; // Replace with your SMTP host
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'your-smtp-username'; // Replace with your SMTP username
        $mail->Password = 'your-smtp-password'; // Replace with your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Set the sender and recipient addresses
        $mail->setFrom($email, $name);
        $mail->addAddress('recipient@example.com'); // Replace with your recipient email address

        // Set email subject and body
        $mail->Subject = "New Form Submission from $name";
        $mail->Body = "Name: $name\nEmail: $email\nPhone Number: $number\nQuery Type: $queryType\n\nMessage:\n$message";

        // Send the email
        $mail->send();

        echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Failed to send email. Error: {$mail->ErrorInfo}";
    }
} else {
    // Handle non-POST requests
    echo "Invalid request method.";
}
?>