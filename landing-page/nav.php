  <!-- Navigation -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="#" class="text-2xl font-bold text-primary">TicketyHub</a>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="nav-link hover:text-primary transition">Home</a>
                    <a href="#features" class="nav-link hover:text-primary transition">Features</a>
                    <a href="#how-it-works" class="nav-link hover:text-primary transition">How It Works</a>
                    <a href="#testimonials" class="nav-link hover:text-primary transition">Testimonials</a>
                    <a href="#pricing" class="nav-link hover:text-primary transition">Pricing</a>
                    <a href="#contact" class="nav-link hover:text-primary transition">Contact</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-600 hover:text-primary focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2 pb-4">
                <a href="#home" class="block px-3 py-2 rounded hover:bg-gray-100 nav-link">Home</a>
                <a href="#features" class="block px-3 py-2 rounded hover:bg-gray-100 nav-link">Features</a>
                <a href="#how-it-works" class="block px-3 py-2 rounded hover:bg-gray-100 nav-link">How It Works</a>
                <a href="#testimonials" class="block px-3 py-2 rounded hover:bg-gray-100 nav-link">Testimonials</a>
                <a href="#pricing" class="block px-3 py-2 rounded hover:bg-gray-100 nav-link">Pricing</a>
             <?php echo'<a href="#contact" class="block px-3 py-2 rounded hover:bg-gray-100 nav-link">Contact</a>';?>
            </div>
        </nav>
    </header>
    