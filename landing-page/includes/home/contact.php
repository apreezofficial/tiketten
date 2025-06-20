
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Contact Form Submission
    const contactForm = document.getElementById('contact-form');
    const newsletterForm = document.getElementById('newsletter-form');
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
</script>