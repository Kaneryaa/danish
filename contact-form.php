<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = 'kanerya7@gmail.com';

    // Set the email subject
    $email_subject = 'New Message from Contact Form';

    // Construct the email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    mail($to, $email_subject, $email_body, $headers);

    // Return a success response
    echo json_encode(['status' => 'success', 'message' => 'Your message was sent successfully.']);
    exit;
}
?>
