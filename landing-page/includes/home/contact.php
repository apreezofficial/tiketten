<!-- Contact/Newsletter Section -->
<section id="contact" class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Floating animated elements -->
    <div class="absolute -top-20 -left-20 w-40 h-40 bg-primary/10 rounded-full filter blur-3xl animate-float-slow"></div>
    <div class="absolute bottom-10 -right-10 w-60 h-60 bg-secondary/10 rounded-full filter blur-3xl animate-float-medium"></div>
    
    <div class="container mx-auto px-4 sm:px-6 relative z-10">
        <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden transform transition-all duration-500 hover:shadow-3xl">
            <div class="md:flex">
                <!-- Contact Info Side -->
                <div class="md:w-2/5 bg-gradient-to-br from-primary to-secondary p-8 sm:p-10 text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-noise opacity-10"></div>
                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold mb-6">Get In Touch</h2>
                        <p class="mb-8 text-white/90">Have questions? Need help? We're here for you.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start group">
                                <div class="bg-white/10 p-3 rounded-lg mr-4 group-hover:bg-white/20 transition duration-300">
                                    <i class="fas fa-envelope text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg">Email Us</h4>
                                    <p class="text-white/80 hover:text-white transition">support@ticketyhub.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start group">
                                <div class="bg-white/10 p-3 rounded-lg mr-4 group-hover:bg-white/20 transition duration-300">
                                    <i class="fas fa-phone-alt text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg">Call Us</h4>
                                    <p class="text-white/80 hover:text-white transition">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start group">
                                <div class="bg-white/10 p-3 rounded-lg mr-4 group-hover:bg-white/20 transition duration-300">
                                    <i class="fas fa-map-marker-alt text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg">Visit Us</h4>
                                    <p class="text-white/80 hover:text-white transition">123 Tech Street, San Francisco, CA</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-10 pt-6 border-t border-white/20">
                            <h4 class="font-semibold mb-4">Follow Us</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition duration-300">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Form Side -->
                <div class="md:w-3/5 p-8 sm:p-10">
                    <div class="mb-8 text-center md:text-left">
                        <h2 class="text-3xl font-bold text-dark mb-2">Send Us a Message</h2>
                        <p class="text-gray-600">We respond within 24 hours.</p>
                    </div>
                    
                    <form id="contact-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                                <div class="relative">
                                    <input type="text" id="name" name="name"  
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition duration-300"
                                           placeholder="Your name">
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                </div>
                                <div class="error-message text-red-500 text-xs mt-1 hidden"></div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition duration-300"
                                           placeholder="your@email.com">
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                </div>
                                <div class="error-message text-red-500 text-xs mt-1 hidden"></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <div class="relative">
                                <input type="text" id="subject" name="subject" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition duration-300"
                                       placeholder="What's this about?">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <i class="fas fa-tag text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <div class="relative">
                                <textarea id="message" name="message" rows="5" required 
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition duration-300"
                                          placeholder="Your message..."></textarea>
                                <div class="absolute top-3 right-3 flex items-center pr-3 pointer-events-none">
                                    <i class="fas fa-pen text-gray-400"></i>
                                </div>
                            </div>
                            <div class="error-message text-red-500 text-xs mt-1 hidden"></div>
                        </div>
                        
                        <div class="flex items-center">
                            <button type="submit" id="submit-btn" 
                                    class="bg-gradient-to-r from-primary to-secondary text-white px-8 py-3 rounded-lg font-medium hover:shadow-lg transition-all duration-300 transform hover:scale-[1.02] flex items-center">
                                <span id="submit-text">Send Message</span>
                                <span id="submit-spinner" class="ml-2 hidden">
                                    <i class="fas fa-spinner fa-spin"></i>
                                </span>
                            </button>
                            
                            <div id="success-message" class="ml-4 hidden">
                                <div class="flex items-center bg-green-100 text-green-700 px-4 py-2 rounded-lg">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Message sent successfully!</span>
                                </div>
                            </div>
                            
                            <div id="error-message" class="ml-4 hidden">
                                <div class="flex items-center bg-red-100 text-red-700 px-4 py-2 rounded-lg">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    <span>Error sending message. Please try again.</span>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <h3 class="text-xl font-semibold mb-6">Subscribe to Our Newsletter</h3>
                        <form id="newsletter-form" class="flex">
                            <div class="relative flex-grow">
                                <input type="email" id="newsletter-email" name="email" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-primary focus:border-primary transition duration-300"
                                       placeholder="Your email address">
                                <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                    <i class="fas fa-paper-plane text-gray-400"></i>
                                </div>
                            </div>
                            <button type="submit" 
                                    class="bg-gradient-to-r from-secondary to-primary text-white px-6 py-3 rounded-r-lg font-medium hover:shadow-lg transition-all duration-300 transform hover:scale-[1.02]">
                                Subscribe
                            </button>
                        </form>
                        <div id="newsletter-success" class="mt-3 hidden">
                            <div class="flex items-center bg-green-100 text-green-700 px-4 py-2 rounded-lg">
                                <i class="fas fa-check-circle mr-2"></i>
                                <span>Thanks for subscribing!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .bg-noise {
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.2'/%3E%3C/svg%3E");
    }
    
    @keyframes float-slow {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(2deg); }
    }
    
    @keyframes float-medium {
        0%, 100% { transform: translateX(0) rotate(0deg); }
        50% { transform: translateX(15px) rotate(-3deg); }
    }
    
    .animate-float-slow {
        animation: float-slow 8s ease-in-out infinite;
    }
    
    .animate-float-medium {
        animation: float-medium 6s ease-in-out infinite;
    }
    
    .form-group:focus-within label {
        color: theme('colors.primary');
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Contact Form Submission
    const contactForm = document.getElementById('contact-form');
    const newsletterForm = document.getElementById('newsletter-form');
    
    // Formspree endpoint - REPLACE WITH YOUR ACTUAL FORMSPREE ID
    const contactFormEndpoint = 'https://formspree.io/f/YOUR_FORMSPREE_ID';
    const newsletterFormEndpoint = 'https://formspree.io/f/YOUR_NEWSLETTER_FORMSPREE_ID';
    
    // Contact form handler
    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const submitBtn = document.getElementById('submit-btn');
        const submitText = document.getElementById('submit-text');
        const submitSpinner = document.getElementById('submit-spinner');
        const successMessage = document.getElementById('success-message');
        const errorMessage = document.getElementById('error-message');
        
        // Validate form
        if (!validateForm(contactForm)) return;
        
        // Show loading state
        submitBtn.disabled = true;
        submitText.textContent = 'Sending...';
        submitSpinner.classList.remove('hidden');
        errorMessage.classList.add('hidden');
        successMessage.classList.add('hidden');
        
        try {
            const formData = new FormData(contactForm);
            
            const response = await fetch(contactFormEndpoint, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            });
            
            if (response.ok) {
                // Show success message
                successMessage.classList.remove('hidden');
                errorMessage.classList.add('hidden');
                contactForm.reset();
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.add('hidden');
                }, 5000);
            } else {
                throw new Error('Form submission failed');
            }
        } catch (error) {
            console.error('Error:', error);
            errorMessage.classList.remove('hidden');
            successMessage.classList.add('hidden');
        } finally {
            // Reset button state
            submitBtn.disabled = false;
            submitText.textContent = 'Send Message';
            submitSpinner.classList.add('hidden');
        }
    });
    
    // Newsletter form handler
    newsletterForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const emailInput = document.getElementById('newsletter-email');
        const successMessage = document.getElementById('newsletter-success');
        
        // Simple validation
        if (!emailInput.value || !emailInput.checkValidity()) {
            emailInput.focus();
            return;
        }
        
        try {
            const formData = new FormData(newsletterForm);
            
            const response = await fetch(newsletterFormEndpoint, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            });
            
            if (response.ok) {
                // Show success message
                successMessage.classList.remove('hidden');
                newsletterForm.reset();
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.add('hidden');
                }, 5000);
            }
        } catch (error) {
            console.error('Error:', error);
        }
    });
    
    // Form validation function
    function validateForm(form) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        
        requiredFields.forEach(field => {
            const errorElement = field.closest('.form-group').querySelector('.error-message');
            
            if (!field.value.trim()) {
                errorElement.textContent = 'This field is required';
                errorElement.classList.remove('hidden');
                field.classList.add('border-red-500');
                field.classList.remove('border-gray-300');
                isValid = false;
            } else {
                errorElement.classList.add('hidden');
                field.classList.remove('border-red-500');
                field.classList.add('border-gray-300');
                
                // Email validation
                if (field.type === 'email' && !field.checkValidity()) {
                    errorElement.textContent = 'Please enter a valid email';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    field.classList.remove('border-gray-300');
                    isValid = false;
                }
            }
        });
        
        return isValid;
    }
    
    // Add real-time validation
    contactForm.querySelectorAll('input, textarea').forEach(field => {
        field.addEventListener('input', function() {
            if (this.hasAttribute('required')) {
                const errorElement = this.closest('.form-group').querySelector('.error-message');
                
                if (!this.value.trim()) {
                    errorElement.textContent = 'This field is required';
                    errorElement.classList.remove('hidden');
                    this.classList.add('border-red-500');
                    this.classList.remove('border-gray-300');
                } else {
                    errorElement.classList.add('hidden');
                    this.classList.remove('border-red-500');
                    this.classList.add('border-gray-300');
                }
            }
        });
    });
});
</script>t