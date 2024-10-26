<?php
require './config/constant.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogoSphere - Join the Future of Blogging</title>
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
<body class="bg-black min-h-screen flex items-center justify-center p-2 font-orbitron">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-purple-900 to-pink-900"></div>
        <div class="absolute inset-0 opacity-50">
            <div class="h-full w-full bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1IiBoZWlnaHQ9IjUiPgo8cmVjdCB3aWR0aD0iNSIgaGVpZ2h0PSI1IiBmaWxsPSIjMDAwIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDVMNSAwWk02IDRMNCA2Wk0tMSAxTDEgLTFaIiBzdHJva2U9IiMyMjIiIHN0cm9rZS13aWR0aD0iMSI+PC9wYXRoPgo8L3N2Zz4=')]"></div>
        </div>
    </div>
    <div class="relative bg-black bg-opacity-50 backdrop-filter backdrop-blur-lg rounded-2xl border border-gray-800 p-4 sm:p-6 max-w-md w-full shadow-2xl">
        <h1 class="text-3xl font-bold text-center mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600">Join BlogoSphere</h1>
        <form action="<?= ROOT_URL ?>signup-logic.php" method="post" enctype="multipart/form-data" class="space-y-4">
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label for="firstname" class="block text-xs font-medium text-gray-400">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="mt-1 block w-full bg-gray-900 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-white py-2 px-3 text-sm">
                </div>
                <div>
                    <label for="lastname" class="block text-xs font-medium text-gray-400">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="mt-1 block w-full bg-gray-900 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-white py-2 px-3 text-sm">
                </div>
            </div>

            <div>
                <label for="username" class="block text-xs font-medium text-gray-400">Username</label>
                <input type="text" name="username" id="username" class="mt-1 block w-full bg-gray-900 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-white py-2 px-3 text-sm">
            </div>

            <div>
                <label for="email" class="block text-xs font-medium text-gray-400">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full bg-gray-900 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-white py-2 px-3 text-sm">
            </div>

            <div>
                <label for="password" class="block text-xs font-medium text-gray-400">Password</label>
                <input type="password" name="createpassword" id="password" class="mt-1 block w-full bg-gray-900 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-white py-2 px-3 text-sm">
            </div>

            <div>
                <label for="confirmpassword" class="block text-xs font-medium text-gray-400">Confirm Password</label>
                <input type="password" name="confirmpassword" id="confirmpassword" class="mt-1 block w-full bg-gray-900 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-white py-2 px-3 text-sm">
            </div>

            <div>
                <label for="avatar" class="block text-xs font-medium text-gray-400">Avatar</label>
                <input type="file" name="avatar" id="avatar" class="mt-1 block w-full text-xs text-gray-400 py-1.5 px-3
                        file:mr-4 file:py-1.5 file:px-3
                        file:rounded-full file:border-0
                        file:text-xs file:font-semibold
                        file:bg-violet-900 file:text-violet-100
                        hover:file:bg-violet-700">
            </div>

            <button type="submit" name="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                Initiate Launch Sequence
            </button>
        </form>

        <p class="mt-4 text-center text-xs text-gray-400">
            Already part of us? 
            <a href="signin.php" class="font-medium text-indigo-400 hover:text-indigo-300 transition-colors">
                Sign In
            </a>
        </p>
    </div>
    <div class="absolute bottom-2 left-2 text-white text-opacity-50 text-xs">
        BlogoSphere &copy; <?= date('Y') ?> | Pioneering the Future of Blogging
    </div>
</body>
</html>