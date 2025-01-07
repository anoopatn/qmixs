<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $project = htmlspecialchars($_POST['project']);
    $budget = htmlspecialchars($_POST['budget']);

    // Example: Send email or save to database
    $to = "your-email@example.com";
    $subject = "New Quote Request from $name";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nProject Description: $project\nBudget: $budget";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you, $name! Your request has been submitted successfully.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>

