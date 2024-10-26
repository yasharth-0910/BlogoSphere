<?php
require './config/database.php';

if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $newpassword = filter_var($_POST['newpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Input validation
    if (empty($firstname) || empty($lastname) || empty($username) || empty($newpassword) || empty($confirmpassword)) {
        $_SESSION['error'] = "All fields are required";
    } elseif ($newpassword !== $confirmpassword) {
        $_SESSION['error'] = "Passwords do not match";
    } elseif (strlen($newpassword) < 2) {
        $_SESSION['error'] = "Password must be at least 2 characters long";
    } else {
        // Check if the user's details match
        $user_query = "SELECT * FROM users WHERE firstname = '$firstname' AND lastname = '$lastname' AND username = '$username'";
        $result = mysqli_query($connection, $user_query);

        if (mysqli_num_rows($result) > 0) {
            // Hash the new password
            $hashed_password = password_hash($newpassword, PASSWORD_DEFAULT);

            // Update the user's password in the database
            $update_query = "UPDATE users SET password = '$hashed_password' WHERE username = '$username'";
            if (mysqli_query($connection, $update_query)) {
                $_SESSION['success'] = "Password reset successfully";
                header('Location: ' . ROOT_URL . 'signin.php');
                die();
            } else {
                $_SESSION['error'] = "Failed to reset password. Please try again.";
            }
        } else {
            $_SESSION['error'] = "No user found with the provided details";
        }
    }

    // Redirect back to forgot password page if there's an error
    if (isset($_SESSION['error'])) {
        header('Location: ' . ROOT_URL . 'forgotpassword.php');
        die();
    }
}
?>
