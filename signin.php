<?php
require './config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogoSphere - Access Your Digital Realm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 3s infinite',
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center p-4 font-sans text-gray-100">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 to-purple-900"></div>
        <div class="absolute inset-0 opacity-30 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+CjxyZWN0IHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgZmlsbD0iIzE3MTcyNiI+PC9yZWN0Pgo8Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIxLjUiIGZpbGw9IiMzNDM0NTYiPjwvY2lyY2xlPgo8L3N2Zz4=')]"></div>
    </div>
    <div class="relative bg-gray-800 bg-opacity-50 backdrop-filter backdrop-blur-xl rounded-2xl border border-gray-700 p-6 w-full max-w-sm shadow-2xl">
        
        <h1 class="text-3xl font-bold text-center mb-6 mt-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600">BlogoSphere</h1>
        <form action="<?= ROOT_URL ?>signin-logic.php" method="post" enctype="multipart/form-data" class="space-y-4">
            <div>
                <input type="text" id="username" name="username" required placeholder="Username" class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-white transition-all duration-300 outline-none">
            </div>

            <div>
                <input type="password" id="password" name="password" required placeholder="Password" class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-white transition-all duration-300 outline-none">
            </div>

            <button type="submit" name="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 rounded-lg text-white font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                Enter
            </button>
        </form>
        <div class="mt-4 text-center text-sm">
            <a href="signup.php" class="text-indigo-400 hover:text-indigo-300 transition-colors">Create Account</a>
            <span class="mx-2">|</span>
            <a href="forgotpassword.php" class="text-indigo-400 hover:text-indigo-300 transition-colors">Forgot Password?</a>
        </div>
    </div>
    <div class="absolute bottom-4 left-4 text-white text-opacity-50 text-xs">
        BlogoSphere &copy; <?= date('Y') ?> | Unleash Your Words
    </div>
</body>
</html>