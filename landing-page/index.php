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
<!-- Testimonials Section -->
<section id="testimonials" class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-dark mb-3">What Our Customers Say</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base">Don't just take our word for it - hear from our satisfied customers</p>
        </div>
        
        <div class="relative max-w-7xl mx-auto">
            <!-- Navigation Arrows -->
            <button class="testimonial-prev absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white p-2 sm:p-3 rounded-full shadow-lg hover:bg-primary hover:text-white transition-all duration-300 transform hover:scale-110 focus:outline-none -ml-2 sm:-ml-4">
                <i class="fas fa-chevron-left text-primary text-lg sm:text-xl hover:text-white"></i>
            </button>
            <button class="testimonial-next absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white p-2 sm:p-3 rounded-full shadow-lg hover:bg-primary hover:text-white transition-all duration-300 transform hover:scale-110 focus:outline-none -mr-2 sm:-mr-4">
                <i class="fas fa-chevron-right text-primary text-lg sm:text-xl hover:text-white"></i>
            </button>
            
            <!-- Testimonial Carousel -->
            <div class="testimonial-carousel overflow-hidden px-8 sm:px-12">
                <div class="flex transition-transform duration-500 ease-in-out">
                    <!-- Duplicate slides for infinite effect -->
                    <!-- Testimonial 1 -->
                    <div class="testimonial-slide w-full sm:w-1/2 md:w-1/3 px-2 py-4 sm:py-6 transition-all duration-300">
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-md h-full transform transition-all duration-300 hover:shadow-lg border-t-4 border-primary/30">
                            <div class="flex items-center mb-3 sm:mb-4">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold mr-2 sm:mr-3 text-sm sm:text-base">JD</div>
                                <div>
                                    <h4 class="font-semibold text-dark text-sm sm:text-base">John Doe</h4>
                                    <p class="text-gray-500 text-xs sm:text-xs">Event Organizer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm mb-2 sm:mb-3">"TicketyHub made selling tickets for our charity gala so simple. The platform is intuitive and customer support was excellent."</p>
                            <div class="text-yellow-400 text-xs sm:text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="testimonial-slide w-full sm:w-1/2 md:w-1/3 px-2 py-4 sm:py-6 transition-all duration-300">
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-md h-full transform transition-all duration-300 hover:shadow-lg border-t-4 border-secondary/30">
                            <div class="flex items-center mb-3 sm:mb-4">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary font-bold mr-2 sm:mr-3 text-sm sm:text-base">AS</div>
                                <div>
                                    <h4 class="font-semibold text-dark text-sm sm:text-base">Alice Smith</h4>
                                    <p class="text-gray-500 text-xs sm:text-xs">Music Festival</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm mb-2 sm:mb-3">"We've used several ticketing platforms, but TicketyHub stands out for reliability and great features. Real-time analytics are a game-changer."</p>
                            <div class="text-yellow-400 text-xs sm:text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="testimonial-slide w-full sm:w-1/2 md:w-1/3 px-2 py-4 sm:py-6 transition-all duration-300">
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-md h-full transform transition-all duration-300 hover:shadow-lg border-t-4 border-primary/30">
                            <div class="flex items-center mb-3 sm:mb-4">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold mr-2 sm:mr-3 text-sm sm:text-base">RJ</div>
                                <div>
                                    <h4 class="font-semibold text-dark text-sm sm:text-base">Robert Johnson</h4>
                                    <p class="text-gray-500 text-xs sm:text-xs">Conference</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm mb-2 sm:mb-3">"Customizable ticket options allowed us to create exactly what we needed. Attendees loved the mobile tickets!"</p>
                            <div class="text-yellow-400 text-xs sm:text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 4 -->
                    <div class="testimonial-slide w-full sm:w-1/2 md:w-1/3 px-2 py-4 sm:py-6 transition-all duration-300">
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-md h-full transform transition-all duration-300 hover:shadow-lg border-t-4 border-secondary/30">
                            <div class="flex items-center mb-3 sm:mb-4">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary font-bold mr-2 sm:mr-3 text-sm sm:text-base">MS</div>
                                <div>
                                    <h4 class="font-semibold text-dark text-sm sm:text-base">Maria Sanchez</h4>
                                    <p class="text-gray-500 text-xs sm:text-xs">Theater Director</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm mb-2 sm:mb-3">"The box office management tools saved us countless hours during our busy season. Highly recommend for performing arts organizations!"</p>
                            <div class="text-yellow-400 text-xs sm:text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 5 -->
                    <div class="testimonial-slide w-full sm:w-1/2 md:w-1/3 px-2 py-4 sm:py-6 transition-all duration-300">
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-md h-full transform transition-all duration-300 hover:shadow-lg border-t-4 border-primary/30">
                            <div class="flex items-center mb-3 sm:mb-4">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold mr-2 sm:mr-3 text-sm sm:text-base">TK</div>
                                <div>
                                    <h4 class="font-semibold text-dark text-sm sm:text-base">Tom Kennedy</h4>
                                    <p class="text-gray-500 text-xs sm:text-xs">Sports Events</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm mb-2 sm:mb-3">"Season ticket management has never been easier. Our fans love the mobile integration and our staff loves the reporting tools."</p>
                            <div class="text-yellow-400 text-xs sm:text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 6 -->
                    <div class="testimonial-slide w-full sm:w-1/2 md:w-1/3 px-2 py-4 sm:py-6 transition-all duration-300">
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-md h-full transform transition-all duration-300 hover:shadow-lg border-t-4 border-secondary/30">
                            <div class="flex items-center mb-3 sm:mb-4">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary font-bold mr-2 sm:mr-3 text-sm sm:text-base">LP</div>
                                <div>
                                    <h4 class="font-semibold text-dark text-sm sm:text-base">Lisa Patel</h4>
                                    <p class="text-gray-500 text-xs sm:text-xs">University Events</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm mb-2 sm:mb-3">"Perfect for our student organization events. The free tier gives us everything we need for small campus gatherings."</p>
                            <div class="text-yellow-400 text-xs sm:text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Duplicate slides for infinite effect -->
                    <!-- Testimonial 1 -->
                    <div class="testimonial-slide w-full sm:w-1/2 md:w-1/3 px-2 py-4 sm:py-6 transition-all duration-300">
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-md h-full transform transition-all duration-300 hover:shadow-lg border-t-4 border-primary/30">
                            <div class="flex items-center mb-3 sm:mb-4">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold mr-2 sm:mr-3 text-sm sm:text-base">JD</div>
                                <div>
                                    <h4 class="font-semibold text-dark text-sm sm:text-base">John Doe</h4>
                                    <p class="text-gray-500 text-xs sm:text-xs">Event Organizer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm mb-2 sm:mb-3">"TicketyHub made selling tickets for our charity gala so simple. The platform is intuitive and customer support was excellent."</p>
                            <div class="text-yellow-400 text-xs sm:text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="testimonial-slide w-full sm:w-1/2 md:w-1/3 px-2 py-4 sm:py-6 transition-all duration-300">
                        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-md h-full transform transition-all duration-300 hover:shadow-lg border-t-4 border-secondary/30">
                            <div class="flex items-center mb-3 sm:mb-4">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary font-bold mr-2 sm:mr-3 text-sm sm:text-base">AS</div>
                                <div>
                                    <h4 class="font-semibold text-dark text-sm sm:text-base">Alice Smith</h4>
                                    <p class="text-gray-500 text-xs sm:text-xs">Music Festival</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm mb-2 sm:mb-3">"We've used several ticketing platforms, but TicketyHub stands out for reliability and great features. Real-time analytics are a game-changer."</p>
                            <div class="text-yellow-400 text-xs sm:text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .testimonial-slide {
        flex: 0 0 auto;
    }
    
    .testimonial-slide:nth-child(3n+2) {
        transform: scale(1.05);
    }
    
    .testimonial-slide:nth-child(3n+2) .bg-white {
        box-shadow: 0 10px 25px -5px rgba(79, 70, 229, 0.1), 0 10px 10px -5px rgba(79, 70, 229, 0.04);
        border-top-width: 6px;
    }
    
    @media (max-width: 767px) {
        .testimonial-slide:nth-child(2n+1) {
            transform: scale(1.05);
        }
        
        .testimonial-slide:nth-child(2n+1) .bg-white {
            box-shadow: 0 10px 25px -5px rgba(79, 70, 229, 0.1), 0 10px 10px -5px rgba(79, 70, 229, 0.04);
            border-top-width: 6px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.testimonial-carousel');
    const track = carousel.querySelector('.flex');
    const slides = Array.from(document.querySelectorAll('.testimonial-slide'));
    const prevBtn = document.querySelector('.testimonial-prev');
    const nextBtn = document.querySelector('.testimonial-next');
    
    // Clone slides for infinite effect
    const clonedSlides = slides.map(slide => slide.cloneNode(true));
    clonedSlides.forEach(slide => track.appendChild(slide));
    
    const slideCount = slides.length;
    const slideWidth = slides[0].offsetWidth;
    let currentIndex = 0;
    let autoSlideInterval;
    
    // Update carousel position
    function updateCarousel() {
        track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        
        // Reset position when reaching cloned slides for seamless infinite effect
        if (currentIndex >= slideCount) {
            setTimeout(() => {
                track.style.transition = 'none';
                currentIndex = 0;
                track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                setTimeout(() => track.style.transition = 'transform 500ms ease-in-out');
            }, 500);
        } else if (currentIndex < 0) {
            setTimeout(() => {
                track.style.transition = 'none';
                currentIndex = slideCount - 1;
                track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                setTimeout(() => track.style.transition = 'transform 500ms ease-in-out');
            }, 500);
        }
    }
    
    // Next slide
    function nextSlide() {
        currentIndex++;
        updateCarousel();
    }
    
    // Previous slide
    function prevSlide() {
        currentIndex--;
        updateCarousel();
    }
    
    // Auto slide
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 6000);
    }
    
    // Event listeners
    nextBtn.addEventListener('click', () => {
        clearInterval(autoSlideInterval);
        nextSlide();
        startAutoSlide();
    });
    
    prevBtn.addEventListener('click', () => {
        clearInterval(autoSlideInterval);
        prevSlide();
        startAutoSlide();
    });
    
    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            slideWidth = slides[0].offsetWidth;
            updateCarousel();
        }, 250);
    });
  
    // Initialize
    updateCarousel();
    startAutoSlide();
    
    // Pause on hover
    carousel.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
    carousel.addEventListener('mouseleave', startAutoSlide);
});
</script>
<!-- Pricing Section -->
<section id="pricing" class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-dark mb-3">Affordable Pricing For Everyone</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base">Pay only for what you need - scale up as you grow</p>
            
            <!-- Toggle for annual/monthly -->
            <div class="flex items-center justify-center mt-6">
                <span class="text-sm font-medium mr-3">Monthly</span>
                <div class="relative inline-block w-12 mr-3 align-middle select-none">
                    <input type="checkbox" name="billing" id="billing-toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-transform duration-200 ease-in-out"/>
                    <label for="billing-toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-200 ease-in-out"></label>
                </div>
                <span class="text-sm font-medium">
                    Annual <span class="text-primary">(Save 20%)</span>
                </span>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Free Plan -->
            <div class="pricing-card group relative bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-2 border border-gray-200/80">
                <div class="p-6 sm:p-8">
                    <h3 class="text-xl font-bold text-dark mb-1">Starter</h3>
                    <p class="text-gray-500 text-sm mb-5">Perfect for trying us out</p>
                    
                    <div class="mb-6">
                        <span class="text-3xl font-extrabold text-dark">$0</span>
                        <span class="text-gray-500">/forever</span>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2 text-sm"></i>
                            <span class="text-gray-600">Up to 50 tickets per event</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2 text-sm"></i>
                            <span class="text-gray-600">2 basic ticket types</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2 text-sm"></i>
                            <span class="text-gray-600">Email support</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <i class="fas fa-times text-red-400 mt-1 mr-2 text-sm"></i>
                            <span>No custom branding</span>
                        </li>
                    </ul>
                    
                    <button class="w-full bg-gray-100 text-dark px-4 py-3 rounded-lg font-medium hover:bg-gray-200 transition duration-200 group-hover:bg-primary group-hover:text-white">
                        Get Started Free
                    </button>
                </div>
            </div>
            
            <!-- Pro Plan (Featured) -->
            <div class="pricing-card group relative rounded-xl shadow-lg transform hover:-translate-y-2 transition-all duration-300 z-10">
                <div class="absolute inset-0 bg-gradient-to-br from-primary to-secondary rounded-xl shadow-xl"></div>
                <div class="absolute top-4 right-4 bg-yellow-300 text-dark text-xs font-bold px-3 py-1 rounded-full">MOST POPULAR</div>
                <div class="relative p-6 sm:p-8 text-white z-10">
                    <h3 class="text-xl font-bold mb-1">Professional</h3>
                    <p class="text-white/90 text-sm mb-5">Best for growing businesses</p>
                    
                    <div class="mb-6">
                        <span class="text-3xl font-extrabold">$7</span>
                        <span class="text-white/80">/month</span>
                        <span class="block text-white/70 text-sm mt-1">billed annually ($84)</span>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-white mt-1 mr-2 text-sm"></i>
                            <span>Up to 500 tickets per event</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-white mt-1 mr-2 text-sm"></i>
                            <span>5 ticket types</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-white mt-1 mr-2 text-sm"></i>
                            <span>Priority email support</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-white mt-1 mr-2 text-sm"></i>
                            <span>Basic analytics</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-white mt-1 mr-2 text-sm"></i>
                            <span>Custom branding</span>
                        </li>
                    </ul>
                    
                    <button class="w-full bg-white text-primary px-4 py-3 rounded-lg font-medium hover:bg-gray-100 transition duration-200 group-hover:bg-dark group-hover:text-white">
                        Start 7-Day Free Trial
                    </button>
                </div>
            </div>
            
            <!-- Business Plan -->
            <div class="pricing-card group relative bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-2 border border-gray-200/80">
                <div class="p-6 sm:p-8">
                    <h3 class="text-xl font-bold text-dark mb-1">Business</h3>
                    <p class="text-gray-500 text-sm mb-5">For serious event organizers</p>
                    
                    <div class="mb-6">
                        <span class="text-3xl font-extrabold text-dark">$15</span>
                        <span class="text-gray-500">/month</span>
                        <span class="block text-gray-500 text-sm mt-1">billed annually ($180)</span>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2 text-sm"></i>
                            <span class="text-gray-600">Unlimited tickets</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2 text-sm"></i>
                            <span class="text-gray-600">Unlimited ticket types</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2 text-sm"></i>
                            <span class="text-gray-600">24/7 priority support</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2 text-sm"></i>
                            <span class="text-gray-600">Advanced analytics</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2 text-sm"></i>
                            <span class="text-gray-600">API access</span>
                        </li>
                    </ul>
                    
                    <button class="w-full bg-gray-100 text-dark px-4 py-3 rounded-lg font-medium hover:bg-gray-200 transition duration-200 group-hover:bg-primary group-hover:text-white">
                        Start 7-Day Free Trial
                    </button>
                </div>
            </div>
        </div>
        
        <div class="mt-12 text-center">
            <div class="inline-flex items-center bg-primary/10 text-primary px-4 py-3 rounded-lg">
                <i class="fas fa-gem mr-2"></i>
                <span class="text-sm font-medium">All plans include: 0% platform fees, fraud protection, mobile check-in</span>
            </div>
            
            <p class="mt-8 text-gray-600 text-sm">Need custom enterprise pricing? <a href="#contact" class="text-primary font-medium hover:underline">Contact our sales team</a></p>
        </div>
    </div>
</section>

<style>
    .toggle-checkbox:checked {
        transform: translateX(100%);
        background-color: theme('colors.primary');
        border-color: theme('colors.primary');
    }
    .toggle-checkbox:checked + .toggle-label {
        background-color: theme('colors.primary');
    }
    .pricing-card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('billing-toggle');
    const prices = {
        monthly: ['$0', '$9', '$19'],
        annual: ['$0', '$7', '$15']
    };
    
    toggle.addEventListener('change', function() {
        const planPrices = this.checked ? prices.annual : prices.monthly;
        document.querySelectorAll('.pricing-card .text-3xl').forEach((el, index) => {
            el.textContent = planPrices[index];
        });
    });
});
</script>
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