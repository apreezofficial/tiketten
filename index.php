<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketyHub - Book Your Tickets with Ease</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
        <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/general.css">
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-red-100">

    <!-- Preloader -->
    <div id="preloader" class="fixed top-0 left-0 w-full h-full bg-white flex items-center justify-center z-50">
        <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-blue-500"></div>
    </div>
    <?php include 'nav.php'; ?>
    <main id="main-content">
<!-- HERO SECTION -->
<section id="hero" class="relative h-screen flex items-center justify-center bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 text-white overflow-hidden">

    <!-- Animated Background Shapes -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <div class="absolute bg-white bg-opacity-10 rounded-full w-16 h-16 animate-bounce-slow" style="top: 20%; left: 10%;"></div>
        <div class="absolute bg-white bg-opacity-10 rounded-full w-24 h-24 animate-bounce-slower" style="top: 50%; left: 80%;"></div>
        <div class="absolute bg-white bg-opacity-10 rounded-full w-20 h-20 animate-bounce-slowest" style="top: 70%; left: 30%;"></div>
    </div>

    <!-- Hero Content -->
    <div class="z-10 text-center px-4">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight" id="hero-text"></h1>
        <p class="text-lg md:text-2xl mb-8">The fastest, easiest way to get your tickets anytime, anywhere.</p>
        <a href="#features" class="bg-white text-indigo-600 px-8 py-4 rounded-full shadow-lg hover:shadow-indigo-400 transition duration-300 smooth-scroll hover:scale-105 inline-block">Get Started</a>

        <!-- Hero Stats -->
        <div class="mt-12 flex justify-center space-x-12 text-center">
            <div>
                <h2 class="text-3xl font-bold counter" data-target="10000">0</h2>
                <p class="text-lg">Tickets Sold</p>
            </div>
            <div>
                <h2 class="text-3xl font-bold counter" data-target="5000">0</h2>
                <p class="text-lg">Happy Customers</p>
            </div>
            <div>
                <h2 class="text-3xl font-bold counter" data-target="200">0</h2>
                <p class="text-lg">Events Supported</p>
            </div>
        </div>
    </div>

    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <a href="#features" class="smooth-scroll">
            <div class="w-8 h-14 border-2 border-white rounded-full flex items-center justify-center animate-bounce">
                <div class="w-2 h-2 bg-white rounded-full mb-1"></div>
            </div>
        </a>
    </div>
</section>
<!-- FEATURES SECTION -->
<section id="features" class="light-fr py-20 bg-gradient-to-r from-purple-500 to-indigo-500 text-white transition-colors duration-500 dark:bg-gradient-to-r dark:from-gray-900 dark:to-black relative overflow-hidden">
    <!-- Animated Gradient Overlay -->
    <div id="gradient-overlay" class="absolute inset-0 bg-gradient-to-r from-purple-500 to-indigo-500 opacity-50 z-0 transition-transform duration-500 rotate-animation"></div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl font-bold mb-12 text-white animate-fade-in dark:text-indigo-400">Why Choose TicketyHub?</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            // Feature items array
            $features = [
                [
                    'icon' => 'fas fa-bolt',
                    'title' => 'Instant Booking',
                    'description' => 'Secure your tickets in seconds with our blazing fast system.'
                ],
                [
                    'icon' => 'fas fa-lock',
                    'title' => '100% Secure Payments',
                    'description' => 'All transactions are encrypted and completely secure.'
                ],
                [
                    'icon' => 'fas fa-tags',
                    'title' => 'Exclusive Discounts',
                    'description' => 'Get unbeatable deals and save big on top events.'
                ],
                [
                    'icon' => 'fas fa-calendar-alt',
                    'title' => 'Real-Time Updates',
                    'description' => 'Stay informed with live event changes and availability.'
                ],
                [
                    'icon' => 'fas fa-ticket-alt',
                    'title' => 'Mobile Tickets',
                    'description' => 'Access your tickets on the go with our mobile-friendly platform.'
                ],
                [
                    'icon' => 'fas fa-headset',
                    'title' => '24/7 Support',
                    'description' => 'Our team is always ready to help you anytime you need us.'
                ]
            ];

            // Loop through each feature and display it
            foreach ($features as $feature) {
                echo '
                <div class="bg-white dark:bg-gray-800 dark:text-white p-8 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-indigo-300 transition duration-300 feature-card">
                    <div class="text-indigo-600 dark:text-indigo-400 text-5xl mb-4"><i class="' . $feature['icon'] . '"></i></div>
                    <h3 class="text-2xl font-bold mb-2">' . $feature['title'] . '</h3>
                    <p class="text-gray-600 dark:text-gray-300">' . $feature['description'] . '</p>
                </div>
                ';
            }
            ?>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const featureCards = document.querySelectorAll('.feature-card');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.2 // triggers sooner for faster effect
        });

        featureCards.forEach(card => {
            observer.observe(card);
        });
    });
</script>
    </main>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

    <!-- Scripts -->
    <script src="assets/ts/preloader.ts"></script>
    <script src="assets/ts/main.ts"></script>
</body>
</html>