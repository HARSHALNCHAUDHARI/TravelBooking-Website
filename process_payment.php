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

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$upi_id = $_POST['upi_id'];
$mobile_no = $_POST['mobile_no'];

// SQL to insert data into database
$sql = "INSERT INTO payments (name, email, address, city, state, zip, upi_id, mobile_no)
        VALUES ('$name', '$email', '$address', '$city', '$state', '$zip', '$upi_id', '$mobile_no')";

if ($conn->query($sql) === TRUE) {
    // Send confirmation email
    $to = $email;
    $subject = "Travel Booking Confirmation";
    $message = "Dear $name,\n\nYour travel booking has been confirmed.\n\nThank you for choosing our service.\n\nBest regards,\n[HR TOURISM]";
    $headers = "From: hchaudhari754@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        // Redirect to billing page
        header('Location:bill.php');
    } else {
        echo "Error sending confirmation email.";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// the message

// Send email
$to = $email;
$subject = "Payment Confirmation";
$message = "Dear $name,<br><br>";
$message .= "Thank you for your payment. Below are the details:<br><br>";
$message .= "Name: $name<br>";
$message .= "Email: $email<br>";
$message .= "Address: $address, $city, $state - $zip<br>";
$message .= "UPI ID: $upi_id<br>";
$message .= "Mobile Number: $mobile_no<br><br>";
$message .= "If you have any questions, feel free to contact us.<br><br>";
$message .= "Best regards,<br>Your Company Name";

$headers = "From: HR Tourism <hchaudhari754@gmail.com>\r\n";
$headers .= "Reply-To: harshalhnc1115@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";

// Send email
$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
