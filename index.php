<?php
require './config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogoSphere - Where Ideas Flourish</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Open+Sans:wght@400;600;700&display=swap');
    </style>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Open Sans', 'sans-serif'],
                        'serif': ['Merriweather', 'serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans transition-colors duration-300">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 py-4 sticky top-0 z-10">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <a href="#" class="text-2xl font-serif font-bold text-gray-900 dark:text-white">BlogoSphere</a>
                <div class="space-x-6 flex items-center">
                    <a href="#features" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition-colors">Features</a>
                    <a href="#posts" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition-colors">Posts</a>
                    <a href="signup.php" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-full transition-colors text-sm font-semibold">Get started</a>
                    <button id="theme-toggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="py-20 bg-gray-50 dark:bg-gray-800">
            <div class="container mx-auto px-4 max-w-4xl text-center">
                <h1 class="text-5xl font-serif font-bold mb-6 leading-tight">Where Ideas Take Flight</h1>
                <p class="text-xl mb-8 text-gray-600 dark:text-gray-300">Join a community of thinkers, dreamers, and doers. Share your story with the world.</p>
                <a href="signup.php" class="bg-green-600 text-white hover:bg-green-700 px-8 py-3 rounded-full text-lg font-semibold transition-colors inline-block">Start writing</a>
            </div>
        </header>

        <!-- Features Section -->
        <section id="features" class="py-20">
            <div class="container mx-auto px-4 max-w-4xl">
                <h2 class="text-3xl font-serif font-bold text-center mb-12">Why BlogoSphere?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div>
                        <h3 class="text-xl font-semibold mb-3">Elegant Simplicity</h3>
                        <p class="text-gray-600 dark:text-gray-400">A clean, distraction-free writing experience that lets your content shine.</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-3">Engaged Community</h3>
                        <p class="text-gray-600 dark:text-gray-400">Connect with readers and fellow writers who share your passions.</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-3">Powerful Tools</h3>
                        <p class="text-gray-600 dark:text-gray-400">From SEO optimization to analytics, we've got the tools you need to succeed.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Preview Section -->
        <section id="posts" class="py-20 bg-gray-50 dark:bg-gray-800">
            <div class="container mx-auto px-4 max-w-4xl">
                <h2 class="text-3xl font-serif font-bold text-center mb-12">Featured Stories</h2>
                <div class="space-y-12">
                    <?php
                    $posts = [
                        ['title' => 'The Art of Mindful Productivity', 'excerpt' => 'Discover how mindfulness can transform your work life and boost your productivity...', 'author' => 'Emma Woodhouse', 'date' => 'June 15, 2023', 'readTime' => '7 min read'],
                        ['title' => 'Sustainable Living in the Digital Age', 'excerpt' => 'Exploring practical ways to reduce our carbon footprint while embracing technology...', 'author' => 'Ethan Green', 'date' => 'June 14, 2023', 'readTime' => '5 min read'],
                        ['title' => 'The Renaissance of Local Cuisine', 'excerpt' => 'How chefs around the world are rediscovering and reimagining their local food heritage...', 'author' => 'Sophie Chen', 'date' => 'June 13, 2023', 'readTime' => '6 min read'],
                    ];

                    foreach ($posts as $post):
                    ?>
                    <div class="border-b border-gray-200 dark:border-gray-700 pb-8 last:border-b-0">
                        <h3 class="text-2xl font-serif font-bold mb-2"><?= htmlspecialchars($post['title']) ?></h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4"><?= htmlspecialchars($post['excerpt']) ?></p>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <span class="mr-4"><?= htmlspecialchars($post['author']) ?></span>
                            <span class="mr-4"><?= htmlspecialchars($post['date']) ?></span>
                            <span><?= htmlspecialchars($post['readTime']) ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-20 bg-green-600 dark:bg-green-700 text-white">
            <div class="container mx-auto px-4 max-w-4xl text-center">
                <h2 class="text-3xl font-serif font-bold mb-4">Ready to Share Your Story?</h2>
                <p class="text-xl mb-8">Join BlogoSphere today and start your writing journey.</p>
                <a href="signup.php" class="bg-white text-green-600 hover:bg-gray-100 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 px-8 py-3 rounded-full text-lg font-semibold transition-colors inline-block">Create your account</a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-100 dark:bg-gray-800 py-8">
            <div class="container mx-auto px-4 text-center text-sm text-gray-600 dark:text-gray-400">
                <p>&copy; <?= date('Y') ?> BlogoSphere | Empowering voices, one story at a time</p>
            </div>
        </footer>
    </div>

    <script>
        // Theme toggle functionality
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;

        // Function to set the theme
        function setTheme(theme) {
            if (theme === 'dark') {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }
            localStorage.setItem('theme', theme);
        }

        // Check for saved theme preference or use system preference
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            setTheme(savedTheme);
        } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            setTheme('dark');
        }

        // Toggle theme when button is clicked
        themeToggle.addEventListener('click', () => {
            const currentTheme = html.classList.contains('dark') ? 'light' : 'dark';
            setTheme(currentTheme);
        });

        // Listen for system theme changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!localStorage.getItem('theme')) {
                setTheme(e.matches ? 'dark' : 'light');
            }
        });
    </script>
</body>
</html>