<?php
include('includes/connect.php'); // Ensure this has your DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get and sanitize input values
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Example: find logged-in user (use session if applicable)
    $user_id = 1; // Replace with actual session user ID

    // Check password match
    if (!empty($new_password) && $new_password !== $confirm_password) {
        echo "New passwords do not match!";
        exit;
    }

    // Build update query
    $update_fields = "
        first_name = '$first_name',
        last_name = '$last_name',
        email = '$email',
        address = '$address'
    ";

    if (!empty($new_password)) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $update_fields .= ", password = '$hashed_password'";
    }

    $sql = "UPDATE users SET $update_fields WHERE id = $user_id";

    if (mysqli_query($conn, $sql)) {
        echo "Profile updated successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

