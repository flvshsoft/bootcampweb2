<?php
session_start();
include('../koneksi/index.php');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the provided password for comparison (you should use password_hash() in a production environment)
    $hashedPassword = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$hashedPassword'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful, set the session variable and redirect to the welcome page
        $_SESSION['email'] = $email;
        header("location: ../index.php");
        exit(); // Ensure that the script stops here to perform the redirection
    } else {
        echo "Invalid email or password.";
        
        header("location: ../index.php");
    }
}
?>