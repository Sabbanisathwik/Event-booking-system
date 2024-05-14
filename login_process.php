<?php
session_start(); // Start the session

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "event booking"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
       
        $sql = "SELECT * FROM users WHERE email='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $_SESSION['email'] = $username;
            
            header("Location: index.html");
            exit(); 
        } else {
            echo '<div class="alert">Invalid email or password<span class="close" onclick="this.parentElement.style.display=\'none\'; window.location.href = \'login.html\'">&times;</span></div>';
        }
    } else { 
        echo '<div class="alert">Please enter email and password<span class="close" onclick="this.parentElement.style.display=\'none\'; window.location.href = \'login.html\'">&times;</span></div>';
    }
}
$conn->close();
?>