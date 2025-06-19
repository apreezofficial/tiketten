<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketyHub - Book Your Tickets with Ease</title>
        <link rel="stylesheet" href="./font-awesome/css/all.css">
    <!-- Tailwind CSS CDN -->
    <script src="./tailwind.js"></script>
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
    <?php include './includes/home/hero.php'; ?>
  <?php include './includes/home/feature.php'; ?>
  <?php include './includes/home/how.php'; ?>
  <?php include './includes/home/testimonials.php'; ?>
    <!-- Contact/Newsletter Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-gradient-to-r from-primary to-secondary p-8 text-white">
                        <h2 class="text-2xl font-bold mb-4">Get In Touch</h2>
                        <p class="mb-6">Have questions about our platform? Want to discuss your specific needs? We'd love to hear from you.</p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-envelope mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold">Email Us</h4>
                                    <p>support@ticketyhub.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone-alt mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold">Call Us</h4>
                                    <p>+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold">Visit Us</h4>
                                    <p>123 Tech Street, San Francisco, CA 94107</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8">
                        <h2 class="text-2xl font-bold text-dark mb-4">Send Us a Message</h2>
                        <form id="contact-form" class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                                <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-primary-dark transition">
                                Send Message
                            </button>
                        </form>
                        
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold mb-4">Subscribe to Our Newsletter</h3>
                            <form id="newsletter-form" class="flex">
                                <input type="email" placeholder="Your email address" class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-primary focus:border-primary">
                                <button type="submit" class="bg-secondary text-white px-4 py-2 rounded-r-lg hover:bg-secondary-dark transition">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
<!-- FEATURES SECTION -->
    </main>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

    <!-- Scripts -->
    <script src="assets/ts/preloader.ts"></script>
        <script src="assets/ts/animations.ts"></script>
    <script src="assets/ts/main.ts"></script>
</body>
</html>