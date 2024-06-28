<?php
// Include security functions
include('../../security.php');

// Define the recipient email
$recipient = "info@roguepayload.space";

// Initialize variables
$name = $email = $subject = $message = $captcha = $csrf_token = "";
$errors = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate CSRF token
    if (!verify_csrf_token($_POST['csrf_token'])) {
        $errors[] = "Invalid CSRF token.";
    }

    // Validate name
    if (empty($_POST["name"])) {
        $errors[] = "Name is required.";
    } else {
        $name = sanitize_input($_POST["name"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $errors[] = "Email is required.";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }
    }

    // Validate subject
    if (empty($_POST["subject"])) {
        $errors[] = "Subject is required.";
    } else {
        $subject = sanitize_input($_POST["subject"]);
    }

    // Validate message
    if (empty($_POST["message"])) {
        $errors[] = "Message is required.";
    } else {
        $message = sanitize_input($_POST["message"]);
    }

    // Validate captcha
    if (empty($_POST["captcha"])) {
        $errors[] = "Captcha is required.";
    } else {
        $captcha = sanitize_input($_POST["captcha"]);
        if (!verify_captcha($captcha)) {
            $errors[] = "Incorrect CAPTCHA.";
        }
    }

    // If there are no errors, proceed to send the email
    if (empty($errors)) {
        $email_subject = "Contact Form Submission: $subject";
        $email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Send the email
        if (mail($recipient, $email_subject, $email_body, $headers)) {
            echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'There was an error sending your message. Please try again later.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => implode(" ", $errors)]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>
