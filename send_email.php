<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = htmlspecialchars($_POST['first-name']);
    $last_name = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    
    // Recipient email address
    $to = "info@atellocaskets.co.za";
    
    // Email subject
    $subject = "Contact Us Form Submission from $first_name $last_name";
    
    // Email body
    $body = "You have received a new message from the Contact Us form on your website:\n\n";
    $body .= "First Name: $first_name\n";
    $body .= "Last Name: $last_name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";
    
    // Sender's email (optional)
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us! We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>