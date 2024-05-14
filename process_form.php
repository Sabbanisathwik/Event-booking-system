<?php
$servername = "localhost";
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "event booking"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert form data into the database
    $sql = "INSERT INTO contact_form (name, email, number, subject, message) VALUES ('$name', '$email', '$number', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the home page after successful form submission
        header("Location: index.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "<h2>Error: Form Submission Failed</h2>";
    echo "<p>Please submit the form from the contact page.</p>";
}
?>
