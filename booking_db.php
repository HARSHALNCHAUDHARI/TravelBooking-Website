<?php
// Establish connection to MySQL database
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "tourism"; // Change this to the name of your MySQL database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $destination = $_POST["destination"];
    // Extract the amount from the input value (assuming it's in the format "$ xxx")
    $amount = intval(substr($_POST["amount"], 2)); // Assuming amount is in the format "$ xxx"

    // Prepare and execute the SQL statement to insert data into the payments table
    $sql = "INSERT INTO payment (destination, amount) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $destination, $amount); // "si" indicates string and integer types
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        echo "Payment information inserted successfully.";
    } else {
        echo "Error inserting payment information: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
