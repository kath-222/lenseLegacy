<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Register.php accessed";
// Include the database connection file
include('bb.php');

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password (use bcrypt or a strong hashing algorithm)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into the Users table
$sql = "INSERT INTO Users (Username, Email, Password) VALUES ('$username', '$email', '$hashedPassword')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
    
</body>
</html>