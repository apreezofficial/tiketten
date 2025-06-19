<footer class="bg-gray-900 text-gray-400 py-8 mt-12">
    <div class="container mx-auto text-center space-y-4">
        <div class="space-x-4">
            <a href="#" class="hover:text-white">Home</a>
            <a href="#" class="hover:text-white">About</a>
            <a href="#" class="hover:text-white">Contact</a>
        </div>
        <div class="space-x-4">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>

        <!-- Theme Toggle Switch -->
        <div class="flex items-center justify-center space-x-2">
            <span id="theme-label" class="text-gray-400">Light</span>
            <button id="theme-toggle" class="w-12 h-6 flex items-center bg-gray-700 rounded-full p-1 transition-colors duration-300">
                <div id="toggle-circle" class="bg-white w-4 h-4 rounded-full transform transition-transform duration-300"></div>
            </button>
            <span class="text-gray-400">Dark</span>
        </div>

        <p>&copy; <?php echo date('Y'); ?> TicketyHub. All rights reserved.</p>
    </div>
</footer>
<script>
    // Elements
    const themeToggle = document.getElementById('theme-toggle');
    const toggleCircle = document.getElementById('toggle-circle');
    const themeLabel = document.getElementById('theme-label');

    // On page load, check saved theme
    document.addEventListener('DOMContentLoaded', () => {
        const savedTheme = localStorage.getItem('theme') || 'light';
        setTheme(savedTheme);
    });

    // Toggle button click
    themeToggle.addEventListener('click', () => {
        if (document.body.classList.contains('dark')) {
            setTheme('light');
        } else {
            setTheme('dark');
        }
    });

    // Set theme function
    function setTheme(theme) {
        if (theme === 'dark') {
            document.body.classList.add('dark');
            themeToggle.classList.add('active');
            themeLabel.textContent = 'Dark';
            localStorage.setItem('theme', 'dark');
        } else {
            document.body.classList.remove('dark');
            themeToggle.classList.remove('active');
            themeLabel.textContent = 'Light';
            localStorage.setItem('theme', 'light');
        }
    }
</script>