<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $project = htmlspecialchars($_POST['project']);
    $budget = htmlspecialchars($_POST['budget']);
    $timeline = htmlspecialchars($_POST['timeline']);
    
    // Send email or save data to a database
    $to = "your-email@example.com";
    $subject = "New Quote Request";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nProject: $project\nBudget: $budget\nTimeline: $timeline";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    echo "Thank you, your request has been submitted.";
}
?>
