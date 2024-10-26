<?php
require './config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Access Code - BlogoSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'orbitron': ['Orbitron', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center p-4 font-orbitron text-gray-100">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-purple-900 to-pink-900"></div>
        <div class="absolute inset-0 opacity-30">
            <div class="h-full w-full bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+CjxyZWN0IHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgZmlsbD0iIzE3MTcyNiI+PC9yZWN0Pgo8Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIxLjUiIGZpbGw9IiMzNDM0NTYiPjwvY2lyY2xlPgo8L3N2Zz4=')]"></div>
        </div>
    </div>
    <div class="relative bg-gray-800 bg-opacity-50 backdrop-filter backdrop-blur-xl rounded-2xl border border-gray-700 p-6 w-full max-w-sm shadow-2xl">
        <div class="absolute -top-12 left-1/2 transform -translate-x-1/2">
            <div class="w-24 h-24 bg-indigo-600 rounded-full flex items-center justify-center animate-pulse-slow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                </svg>
            </div>
        </div>
        <h1 class="text-3xl font-bold text-center mb-6 mt-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600">Reset Access Code</h1>
        <form action="<?= ROOT_URL ?>forgotpassword-logic.php" method="post" class="space-y-4">
            <div>
                <label for="firstname" class="block text-xs font-medium text-gray-400">First Name</label>
                <input type="text" name="firstname" id="firstname" required class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg text-white outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 transition-all duration-300">
            </div>
            <div>
                <label for="lastname" class="block text-xs font-medium text-gray-400">Last Name</label>
                <input type="text" name="lastname" id="lastname" required class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg text-white outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 transition-all duration-300">
            </div>
            <div>
                <label for="username" class="block text-xs font-medium text-gray-400">Username</label>
                <input type="text" name="username" id="username" required class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg text-white outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 transition-all duration-300">
            </div>
            <div>
                <label for="newpassword" class="block text-xs font-medium text-gray-400">New Access Code</label>
                <input type="password" name="newpassword" id="newpassword" required class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg text-white outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 transition-all duration-300">
            </div>
            <div>
                <label for="confirmpassword" class="block text-xs font-medium text-gray-400">Confirm Access Code</label>
                <input type="password" name="confirmpassword" id="confirmpassword" required class="w-full px-4 py-2 bg-gray-700 border-2 border-gray-600 rounded-lg text-white outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 transition-all duration-300">
            </div>

            <button type="submit" name="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 rounded-lg text-white font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                Reconfigure Access
            </button>
        </form>
        <p class="mt-4 text-center text-xs text-gray-400">
            Remembered your code? 
            <a href="signin.php" class="font-medium text-indigo-400 hover:text-indigo-300 transition-colors">
                Return to Login
            </a>
        </p>
    </div>
    <div class="absolute bottom-4 left-4 text-white text-opacity-50 text-xs">
        BlogoSphere &copy; <?= date('Y') ?> | Redefining Digital Identity
    </div>
</body>
</html>