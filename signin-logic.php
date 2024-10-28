<?php

require ("config/database.php");

if (isset($_POST['submit'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Input validation
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "All fields are required";
    } else {
        // Check if the user exists in the database
        $user_query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($connection, $user_query);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Check if the password is correct
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user; // Set the user in the session
                $_SESSION['user-id'] = $user['id']; // Set the user id in the session

                // Check if the user is an admin
                if ($user['is_admin'] == 1) {
                    $_SESSION['is_admin'] = true;
                    // Redirect to admin dashboard if admin
                    header('Location: ' . ROOT_URL . 'admin.php');
                } else {
                    $_SESSION['is_admin'] = false;
                    // Redirect to home page if not admin
                    header('Location: ' . ROOT_URL . 'user.php');
                }
                die();
            } else {
                $_SESSION['error'] = "Invalid username or password";
            }
        } else {
            $_SESSION['error'] = "Invalid username or password";
        }
    }

    // Redirect to login page if there's an error
    if (isset($_SESSION['error'])) {
        header('Location: ' . ROOT_URL . 'signin.php');
        die();
    }
}

?>
