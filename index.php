<?php
require './config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogoSphere - The Future of Blogging</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'orbitron': ['Orbitron', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' }
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 text-white font-orbitron">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <nav class="bg-gray-800 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="#" class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600">BlogoSphere</a>
                <div class="space-x-4">
                    <a href="#features" class="hover:text-blue-400 transition-colors">Features</a>
                    <a href="#team" class="hover:text-blue-400 transition-colors">Team</a>
                    <a href="signup.php" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-full transition-colors">Join Now</a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="py-20 text-center">
            <h1 class="text-5xl font-bold mb-4 animate-pulse-slow">Welcome to BlogoSphere</h1>
            <p class="text-xl mb-8">The Future of Blogging is Here</p>
            <a href="signup.php" class="bg-purple-600 hover:bg-purple-700 px-8 py-3 rounded-full text-lg transition-all transform hover:scale-105">Start Your Journey</a>
        </header>

        <!-- Features Section -->
        <section id="features" class="py-20 bg-gray-800">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Futuristic Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-700 p-6 rounded-lg shadow-lg transform transition-all hover:scale-105">
                        <h3 class="text-xl font-bold mb-4">AI-Powered Moderation</h3>
                        <p>Our advanced AI ensures a safe and respectful blogging environment, automatically filtering inappropriate content.</p>
                    </div>
                    <div class="bg-gray-700 p-6 rounded-lg shadow-lg transform transition-all hover:scale-105">
                        <h3 class="text-xl font-bold mb-4">Quantum Encryption</h3>
                        <p>Your posts are secured with cutting-edge quantum encryption, ensuring unparalleled privacy and data protection.</p>
                    </div>
                    <div class="bg-gray-700 p-6 rounded-lg shadow-lg transform transition-all hover:scale-105">
                        <h3 class="text-xl font-bold mb-4">Holographic Previews</h3>
                        <p>Experience your blog posts in 3D with our revolutionary holographic preview technology (VR headset required).</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Preview Section -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Trending in the Blogosphere</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    // Simulated blog posts - in a real scenario, these would come from a database
                    $posts = [
                        ['title' => 'The Rise of Quantum Computing', 'excerpt' => 'Exploring the potential of qubits in revolutionizing data processing...', 'author' => 'Dr. Quanta', 'date' => '2023-06-15'],
                        ['title' => 'AI Ethics in the 22nd Century', 'excerpt' => 'As AI continues to evolve, we must address the ethical implications...', 'author' => 'EthicBot 3000', 'date' => '2023-06-14'],
                        ['title' => 'Terraforming Mars: A Reality Check', 'excerpt' => 'Recent advancements in atmospheric manipulation bring us closer to...', 'author' => 'Cosmic Pioneer', 'date' => '2023-06-13'],
                    ];

                    foreach ($posts as $post):
                    ?>
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-2"><?= htmlspecialchars($post['title']) ?></h3>
                        <p class="text-gray-400 mb-4"><?= htmlspecialchars($post['excerpt']) ?></p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span><?= htmlspecialchars($post['author']) ?></span>
                            <span><?= htmlspecialchars($post['date']) ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="py-20 bg-gray-800">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Our Visionary Team</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center animate-float">
                            <span class="text-4xl">🚀</span>
                        </div>
                        <h3 class="text-xl font-bold">Nova Stellar</h3>
                        <p class="text-gray-400">Quantum Code Architect</p>
                    </div>
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center animate-float" style="animation-delay: 0.2s;">
                            <span class="text-4xl">🤖</span>
                        </div>
                        <h3 class="text-xl font-bold">Zephyr AI</h3>
                        <p class="text-gray-400">Neural Network Specialist</p>
                    </div>
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center animate-float" style="animation-delay: 0.4s;">
                            <span class="text-4xl">🌌</span>
                        </div>
                        <h3 class="text-xl font-bold">Cosmos Flux</h3>
                        <p class="text-gray-400">Galactic UX Designer</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-20 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Shape the Future of Blogging?</h2>
            <p class="text-xl mb-8">Join BlogoSphere today and be part of the digital revolution!</p>
            <a href="signup.php" class="bg-blue-600 hover:bg-blue-700 px-8 py-3 rounded-full text-lg transition-all transform hover:scale-105 inline-block">Create Your Account</a>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 py-8">
            <div class="container mx-auto px-4 text-center">
                <p>&copy; <?= date('Y') ?> BlogoSphere | Pioneering the Future of Digital Expression</p>
            </div>
        </footer>
    </div>
</body>
</html>