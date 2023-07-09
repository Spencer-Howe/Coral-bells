<?php
// Replace the database credentials with your own
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spencer";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the values of the form fields
$name = $_POST['name'];
$phone = $_POST['phone'];
$occupation = $_POST['occupation'];
$income = $_POST['income'];

// Prepare a SQL statement to insert the form data into the table
$sql = "INSERT INTO test (name, phone, occupation, income) VALUES ('$name', '$phone', '$occupation', '$income')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Form data inserted successfully";
} else {
    echo "Error inserting form data: " . $conn->error;
}

// Close the database connection
$conn->close();

?>

