<?php
// CONNECT TO DATABASE
$conn = new mysqli("localhost", "root", "", "contact_form_db");

// CHECK CONNECTION
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GET FORM DATA
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// INSERT INTO DATABASE
$sql = "INSERT INTO messages (name, email, message)
        VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent and saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// CLOSE CONNECTION
$conn->close();
?>
