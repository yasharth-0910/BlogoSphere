<?php
    require 'config/database.php';

    //Get the data from the form
    if(isset($_POST['submit'])){
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $avatar = $_FILES['avatar'];

        // Input validation
        if(empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($createpassword) || empty($confirmpassword)){
            $_SESSION['error'] = "All fields are required";
        } elseif($createpassword !== $confirmpassword){
            $_SESSION['error'] = "Passwords do not match";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['error'] = "Invalid email address";
        } elseif(strlen($createpassword) < 2 || strlen($confirmpassword) < 2){
            $_SESSION['error'] = "Password must be at least 2 characters long";
        } elseif(!$avatar['name']){
            $_SESSION['error'] = "Please upload an avatar";
        } else {
            // Check if the avatar is an image
            $allowed = ['jpg', 'jpeg', 'png', 'gif'];
            $file_name = $avatar['name'];
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            if(!in_array($file_ext, $allowed)){
                $_SESSION['error'] = "Please upload an image file";
            } else {
                // Hash the password
                $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
                
                // Check if the email or username already exists in the database
                $user_email_query = "SELECT * FROM users WHERE email = '$email' OR username = '$username'";
                $result = mysqli_query($connection, $user_email_query);

                if(mysqli_num_rows($result) > 0){
                    $_SESSION['error'] = "Email or username already exists";
                } else {
                    // Set up avatar file and move it
                    $time = time();
                    $avatar_name =  $time . $avatar['name'];
                    $avatar_tmp_name = $avatar['tmp_name'];
                    $avatar_destination = 'images/' . $avatar_name;
                    move_uploaded_file($avatar_tmp_name, $avatar_destination);

                    // Insert new user into the database with all fields
                    $sql = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) VALUES ('$firstname', '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', 0)";

                    if(mysqli_query($connection, $sql)){
                        $_SESSION['success'] = "Account created successfully";
                        header('Location: '. ROOT_URL . 'signin.php');
                        die();
                    } else {
                        $_SESSION['error'] = "Failed to create account";
                    }
                }
            }
        }

        // Redirect to the signup page if there is an error
        if(isset($_SESSION['error'])){
            header('Location: '. ROOT_URL . 'signup.php');
            die();
        }
    } else {
        header('Location: '. ROOT_URL . 'signup.php');
        die();
    }
?>
