// Smooth scroll to sections
document.querySelectorAll('.smooth-scroll').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        document.querySelector(link.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Side Navigation and Overlay Control
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const menuClose = document.getElementById('menu-close');
    const sideNav = document.getElementById('side-nav');
    const overlay = document.getElementById('overlay');
    const sideLinks = document.querySelectorAll('.side-link');

    // Open Menu
    menuToggle.addEventListener('click', function () {
        sideNav.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    });

    // Close Menu
    menuClose.addEventListener('click', function () {
        sideNav.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });

    // Close Menu When Overlay Clicked
    overlay.addEventListener('click', function () {
        sideNav.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });

    // Close Menu When Link is Clicked
    sideLinks.forEach(link => {
        link.addEventListener('click', function () {
            sideNav.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });
    });

    // Smooth Scroll
    document.querySelectorAll('.smooth-scroll').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
//hero part
document.addEventListener('DOMContentLoaded', function () {
    // Typing Effect
    const heroText = document.getElementById('hero-text');
    const phrases = ["Welcome to TicketyHub.", "Your Ticket, Your Way.", "Fast. Reliable. Seamless."];
    let currentPhrase = 0;
    let currentLetter = 0;

    function typeEffect() {
        if (currentLetter <= phrases[currentPhrase].length) {
            heroText.textContent = phrases[currentPhrase].substring(0, currentLetter);
            currentLetter++;
            setTimeout(typeEffect, 100);
        } else {
            setTimeout(() => {
                currentLetter = 0;
                currentPhrase = (currentPhrase + 1) % phrases.length;
                typeEffect();
            }, 2000);
        }
    }

    typeEffect();

    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    const speed = 200; // Lower is faster

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = Math.ceil(target / speed);

                if (count < target) {
                    counter.innerText = count + increment;
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });
    };

    // Trigger counter animation when in view
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
});
document.addEventListener('DOMContentLoaded', function () {
    const featureCards = document.querySelectorAll('.feature-card');
    const gradientOverlay = document.getElementById('gradient-overlay');

    // Scroll-triggered card animations
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.3 });

    featureCards.forEach(card => observer.observe(card));

    // Gradient animation on scroll
    window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY;
        const rotateValue = scrollPosition * 0.1;

        gradientOverlay.style.transform = `rotate(${rotateValue}deg) scale(1.2)`;
    });
});