<?php
require './config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - BlogoSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'orbitron': ['Orbitron', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center p-4 font-sans text-gray-100">
    <div class="relative bg-gray-800 bg-opacity-50 backdrop-filter backdrop-blur-xl rounded-2xl border border-gray-700 p-6 w-full max-w-sm shadow-2xl">
        <h1 class="text-3xl font-bold text-center mb-6 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600">Forgot Password</h1>

        <form action="<?= ROOT_URL ?>forgotpassword-logic.php" method="post" class="space-y-4">
            <div>
                <label for="firstname" class="block text-xs font-medium text-gray-400">First Name</label>
                <input type="text" name="firstname" id="firstname" required class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg text-white outline-none">
            </div>
            <div>
                <label for="lastname" class="block text-xs font-medium text-gray-400">Last Name</label>
                <input type="text" name="lastname" id="lastname" required class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg text-white outline-none">
            </div>
            <div>
                <label for="username" class="block text-xs font-medium text-gray-400">Username</label>
                <input type="text" name="username" id="username" required class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg text-white outline-none">
            </div>
            <div>
                <label for="newpassword" class="block text-xs font-medium text-gray-400">New Password</label>
                <input type="password" name="newpassword" id="newpassword" required class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg text-white outline-none">
            </div>
            <div>
                <label for="confirmpassword" class="block text-xs font-medium text-gray-400">Confirm Password</label>
                <input type="password" name="confirmpassword" id="confirmpassword" required class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg text-white outline-none">
            </div>

            <button type="submit" name="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 rounded-lg text-white font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                Reset Password
            </button>
        </form>
    </div>
</body>
</html>
