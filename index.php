<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketyHub - Book Your Tickets with Ease</title>
        <link rel="stylesheet" href="/font-awesome/css/all.css">
    <!-- Tailwind CSS CDN -->
    <script src="/tailwind.js"></script>
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

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center bg-gradient-to-r from-primary to-secondary overflow-hidden">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-6 z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                <span id="typed-text" class="inline-block"></span>
                <span class="typing-cursor">|</span>
            </h1>
            <p class="text-xl md:text-2xl text-white mb-8 max-w-2xl mx-auto">
                The easiest way to sell tickets for your events. Fast, secure, and hassle-free.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#pricing" class="bg-white text-primary px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300 transform hover:scale-105">
                    Get Started
                </a>
                <a href="#how-it-works" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white/10 transition duration-300 transform hover:scale-105">
                    Learn More
                </a>
            </div>
        </div>
        
        <!-- Animated Scrolling Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#features" class="text-white">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </section>
    <!-- Features Section -->
<section id="features" class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Amazing Features</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Everything you need to manage your event tickets in one place</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="feature-card relative p-[3px] rounded-xl bg-gradient-to-br from-primary via-secondary to-primary bg-[length:200%_200%] animate-gradient-rotate">
                <div class="bg-white p-8 rounded-lg h-full transition-all duration-300 hover:-translate-y-2">
                    <div class="text-primary mb-6">
                        <i class="fas fa-ticket-alt text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Easy Ticketing</h3>
                    <p class="text-gray-600">Create and customize tickets for your events in minutes with our intuitive interface.</p>
                </div>
            </div>
            
            <!-- Feature 2 -->
            <div class="feature-card relative p-[3px] rounded-xl bg-gradient-to-br from-primary via-secondary to-primary bg-[length:200%_200%] animate-gradient-rotate animation-delay-500">
                <div class="bg-white p-8 rounded-lg h-full transition-all duration-300 hover:-translate-y-2">
                    <div class="text-primary mb-6">
                        <i class="fas fa-chart-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Real-time Analytics</h3>
                    <p class="text-gray-600">Track ticket sales, attendance, and revenue with comprehensive dashboards.</p>
                </div>
            </div>
            
            <!-- Feature 3 -->
            <div class="feature-card relative p-[3px] rounded-xl bg-gradient-to-br from-primary via-secondary to-primary bg-[length:200%_200%] animate-gradient-rotate animation-delay-1000">
                <div class="bg-white p-8 rounded-lg h-full transition-all duration-300 hover:-translate-y-2">
                    <div class="text-primary mb-6">
                        <i class="fas fa-shield-alt text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Secure Payments</h3>
                    <p class="text-gray-600">PCI-compliant payment processing with multiple payment options for your attendees.</p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card relative p-[3px] rounded-xl bg-gradient-to-br from-primary via-secondary to-primary bg-[length:200%_200%] animate-gradient-rotate animation-delay-1500">
                <div class="bg-white p-8 rounded-lg h-full transition-all duration-300 hover:-translate-y-2">
                    <div class="text-primary mb-6">
                        <i class="fas fa-mobile-alt text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mobile Check-In</h3>
                    <p class="text-gray-600">Fast attendee check-in with QR code scanning from any smartphone or tablet.</p>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="feature-card relative p-[3px] rounded-xl bg-gradient-to-br from-primary via-secondary to-primary bg-[length:200%_200%] animate-gradient-rotate animation-delay-2000">
                <div class="bg-white p-8 rounded-lg h-full transition-all duration-300 hover:-translate-y-2">
                    <div class="text-primary mb-6">
                        <i class="fas fa-users text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Attendee Management</h3>
                    <p class="text-gray-600">Easily manage attendee lists, send notifications, and track participation.</p>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="feature-card relative p-[3px] rounded-xl bg-gradient-to-br from-primary via-secondary to-primary bg-[length:200%_200%] animate-gradient-rotate animation-delay-2500">
                <div class="bg-white p-8 rounded-lg h-full transition-all duration-300 hover:-translate-y-2">
                    <div class="text-primary mb-6">
                        <i class="fas fa-bullhorn text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Marketing Tools</h3>
                    <p class="text-gray-600">Built-in email campaigns and social media integration to promote your events.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How It Works Section -->
<section id="how-it-works" class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">How TicketyHub Works</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">From login to event success - your complete ticketing journey</p>
        </div>
        
        <div class="relative">
            <!-- Animated gradient progress line -->
            <div class="hidden md:block absolute left-1/2 h-full w-1 bg-gradient-to-b from-primary/20 via-secondary/20 to-primary/20 transform -translate-x-1/2 top-0"></div>
            
            <!-- Steps -->
            <div class="space-y-16 md:space-y-0">
                <!-- Step 1 - Login & Setup -->
                <div class="step-item flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8 md:pl-4">
                        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-primary">
                            <span class="step-number flex items-center justify-center w-12 h-12 bg-gradient-to-br from-primary to-secondary text-white rounded-full font-bold mb-4">1</span>
                            <h3 class="text-xl font-semibold mb-3 text-dark">Login & Setup</h3>
                            <p class="text-gray-600 mb-4">Create your organizer account and set up your profile in minutes.</p>
                            <div class="flex items-center text-sm text-primary">
                                <i class="fas fa-user-circle mr-2"></i>
                                <span>Simple registration process</span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-8">
                        <div class="relative h-64 rounded-xl overflow-hidden shadow-lg">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                 alt="TicketyHub dashboard" 
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/70 to-transparent flex items-end p-6">
                                <div class="text-white">
                                    <h4 class="font-semibold">Organizer Dashboard</h4>
                                    <p class="text-sm opacity-80">Your command center for all events</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 2 - Create Event -->
                <div class="step-item flex flex-col md:flex-row items-center md:flex-row-reverse">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pl-8 md:pr-4">
                        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-secondary">
                            <span class="step-number flex items-center justify-center w-12 h-12 bg-gradient-to-br from-secondary to-primary text-white rounded-full font-bold mb-4">2</span>
                            <h3 class="text-xl font-semibold mb-3 text-dark">Create Your Gig</h3>
                            <p class="text-gray-600 mb-4">Set up event details, venue, dates, and multiple ticket types in our intuitive dashboard.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-primary/10 text-primary text-xs rounded-full">Concerts</span>
                                <span class="px-3 py-1 bg-primary/10 text-primary text-xs rounded-full">Conferences</span>
                                <span class="px-3 py-1 bg-primary/10 text-primary text-xs rounded-full">Workshops</span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pr-8">
                        <div class="relative h-64 rounded-xl overflow-hidden shadow-lg">
                            <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                 alt="Create event interface" 
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/70 to-transparent flex items-end p-6">
                                <div class="text-white">
                                    <h4 class="font-semibold">Event Creation</h4>
                                    <p class="text-sm opacity-80">All the tools you need in one place</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3 - Customize Tickets -->
                <div class="step-item flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8 md:pl-4">
                        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-primary">
                            <span class="step-number flex items-center justify-center w-12 h-12 bg-gradient-to-br from-primary to-secondary text-white rounded-full font-bold mb-4">3</span>
                            <h3 class="text-xl font-semibold mb-3 text-dark">Design Tickets</h3>
                            <p class="text-gray-600 mb-4">Create beautiful branded tickets with QR codes, seat numbers, and custom fields.</p>
                            <div class="flex items-center text-sm text-secondary">
                                <i class="fas fa-palette mr-2"></i>
                                <span>Custom branding options available</span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-8">
                        <div class="relative h-64 rounded-xl overflow-hidden shadow-lg">
                            <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                 alt="Event tickets design" 
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/70 to-transparent flex items-end p-6">
                                <div class="text-white">
                                    <h4 class="font-semibold">Ticket Designs</h4>
                                    <p class="text-sm opacity-80">Make your tickets stand out</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 4 - Sell & Promote -->
                <div class="step-item flex flex-col md:flex-row items-center md:flex-row-reverse">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pl-8 md:pr-4">
                        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-secondary">
                            <span class="step-number flex items-center justify-center w-12 h-12 bg-gradient-to-br from-secondary to-primary text-white rounded-full font-bold mb-4">4</span>
                            <h3 class="text-xl font-semibold mb-3 text-dark">Sell & Promote</h3>
                            <p class="text-gray-600 mb-4">Use our marketing tools to promote your event across social media and email.</p>
                            <div class="flex space-x-4 text-gray-500">
                                <i class="fab fa-facebook-f hover:text-primary cursor-pointer"></i>
                                <i class="fab fa-twitter hover:text-primary cursor-pointer"></i>
                                <i class="fab fa-instagram hover:text-primary cursor-pointer"></i>
                                <i class="fas fa-envelope hover:text-primary cursor-pointer"></i>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pr-8">
                        <div class="relative h-64 rounded-xl overflow-hidden shadow-lg">
                            <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                 alt="Event promotion" 
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/70 to-transparent flex items-end p-6">
                                <div class="text-white">
                                    <h4 class="font-semibold">Event Promotion</h4>
                                    <p class="text-sm opacity-80">Reach your audience effectively</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 5 - Manage Event -->
                <div class="step-item flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8 md:pl-4">
                        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-primary">
                            <span class="step-number flex items-center justify-center w-12 h-12 bg-gradient-to-br from-primary to-secondary text-white rounded-full font-bold mb-4">5</span>
                            <h3 class="text-xl font-semibold mb-3 text-dark">Manage Your Gig</h3>
                            <p class="text-gray-600 mb-4">Real-time attendee tracking, check-in tools, and post-event analytics.</p>
                            <div class="flex items-center space-x-2 text-sm">
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full flex items-center">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    <span>Live stats</span>
                                </span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full flex items-center">
                                    <i class="fas fa-qrcode mr-1"></i>
                                    <span>QR scanning</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-8">
                        <div class="relative h-64 rounded-xl overflow-hidden shadow-lg">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                 alt="Event management" 
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/70 to-transparent flex items-end p-6">
                                <div class="text-white">
                                    <h4 class="font-semibold">Event Management</h4>
                                    <p class="text-sm opacity-80">Everything under control</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Animation for step items when they come into view */
    .step-item {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease-out;
    }
    
    .step-item.animate {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Gradient border animation for the active step */
    .step-item:nth-child(odd) .bg-white {
        border-left-color: theme('colors.primary');
    }
    
    .step-item:nth-child(even) .bg-white {
        border-left-color: theme('colors.secondary');
    }
</style>

<script>
    // Animate steps when they come into view
    document.addEventListener('DOMContentLoaded', function() {
        const stepItems = document.querySelectorAll('.step-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        stepItems.forEach(item => {
            observer.observe(item);
        });
    });
</script>
.git .


    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Simple, Transparent Pricing</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Choose the plan that fits your needs</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Basic Plan -->
                <div class="pricing-card bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition duration-300 transform hover:scale-105">
                    <div class="p-8">
                        <h3 class="text-xl font-semibold mb-2">Basic</h3>
                        <p class="text-gray-600 mb-6">Perfect for small events and startups</p>
                        <div class="mb-6">
                            <span class="text-4xl font-bold text-dark">$19</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Up to 100 tickets per event</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Basic ticket types</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Email support</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <i class="fas fa-times text-red-400 mr-2"></i>
                                <span>No premium features</span>
                            </li>
                        </ul>
                        <button class="w-full bg-gray-100 text-dark px-6 py-3 rounded-lg font-medium hover:bg-gray-200 transition">
                            Get Started
                        </button>
                    </div>
                </div>
                
                <!-- Pro Plan (Featured) -->
                <div class="pricing-card bg-gradient-to-br from-primary to-secondary rounded-xl shadow-lg transform hover:scale-105 transition duration-300 relative">
                    <div class="absolute top-0 right-0 bg-yellow-400 text-dark text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">POPULAR</div>
                    <div class="p-8 text-white">
                        <h3 class="text-xl font-semibold mb-2">Professional</h3>
                        <p class="text-white/80 mb-6">Ideal for growing businesses and frequent events</p>
                        <div class="mb-6">
                            <span class="text-4xl font-bold">$49</span>
                            <span class="text-white/80">/month</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-white mr-2"></i>
                                <span>Up to 1,000 tickets per event</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-white mr-2"></i>
                                <span>Advanced ticket types</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-white mr-2"></i>
                                <span>Priority email support</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-white mr-2"></i>
                                <span>Basic analytics</span>
                            </li>
                        </ul>
                        <button class="w-full bg-white text-primary px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition">
                            Get Started
                        </button>
                    </div>
                </div>
                
                <!-- Enterprise Plan -->
                <div class="pricing-card bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition duration-300 transform hover:scale-105">
                    <div class="p-8">
                        <h3 class="text-xl font-semibold mb-2">Enterprise</h3>
                        <p class="text-gray-600 mb-6">For large events and organizations</p>
                        <div class="mb-6">
                            <span class="text-4xl font-bold text-dark">$99</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Unlimited tickets</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>All premium features</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>24/7 phone support</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Advanced analytics</span>
                            </li>
                        </ul>
                        <button class="w-full bg-gray-100 text-dark px-6 py-3 rounded-lg font-medium hover:bg-gray-200 transition">
                            Get Started
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <p class="text-gray-600">Need a custom solution? <a href="#contact" class="text-primary font-medium hover:underline">Contact us</a> for enterprise pricing.</p>
            </div>
        </div>
    </section>

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