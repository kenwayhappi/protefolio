<!DOCTYPE html>
<html lang="fr" class="theme-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Happi Mathis, Développeur Web & Mobile à Douala, Cameroun. Expert en Laravel et Flutter.">
    <meta name="keywords" content="Happi Mathis, Développeur, Laravel, Flutter, Web, Mobile, Cameroun">
    <meta name="author" content="Happi Mathis">
    <title>{{ config('app.name', 'Happi Mathis') }} | @yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <!-- GSAP & ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <!-- Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans">
    <!-- Theme Toggle -->
    <button id="theme-toggle" class="fixed top-4 right-4 p-3 bg-primary text-white rounded-full z-50 hover:bg-accent transition no-theme">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
    </button>

    <!-- Navigation -->
    <nav class="bg-white dark:bg-background-dark shadow-lg fixed w-full z-40 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-3xl font-display text-primary dark:text-primary-dark">Happi Mathis</a>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link text-lg font-medium hover:text-accent dark:hover:text-accent-dark">Accueil</a>
                    <a href="{{ route('about') }}" class="nav-link text-lg font-medium hover:text-accent dark:hover:text-accent-dark">À propos</a>
                    <a href="{{ route('resume') }}" class="nav-link text-lg font-medium hover:text-accent dark:hover:text-accent-dark">Parcours</a>
                    <a href="{{ route('projects') }}" class="nav-link text-lg font-medium hover:text-accent dark:hover:text-accent-dark">Projets</a>
                    <a href="{{ route('contact') }}" class="nav-link text-lg font-medium hover:text-accent dark:hover:text-accent-dark">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-background-dark text-text-dark py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-2xl font-display mb-4">Happi Mathis</h3>
            <p class="text-lg mb-4">Développeur Web & Mobile | Douala, Cameroun</p>
            <div class="flex justify-center space-x-6 mb-6">
                <a href="mailto:kenwayhappi@gmail.com" class="hover:text-accent-dark transition">Email</a>
                <a href="tel:+237697486059" class="hover:text-accent-dark transition">Téléphone</a>
                <a href="{{ route('download.cv') }}" class="hover:text-accent-dark transition">Télécharger CV</a>
            </div>
            <p class="text-sm">© {{ date('Y') }} Happi Mathis. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Theme Toggle
        const toggle = document.getElementById('theme-toggle');
        toggle.addEventListener('click', () => {
            const isDark = document.documentElement.classList.toggle('theme-dark');
            document.documentElement.classList.toggle('theme-light', !isDark);
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('theme-dark');
            document.documentElement.classList.remove('theme-light');
        }

        // Smooth Scrolling for in-page links only
        document.querySelectorAll('.nav-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#')) {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                        window.history.pushState(null, null, href);
                    }
                }
            });
        });

        // GSAP Navigation Animation
        gsap.from('.nav-link', {
            y: -20,
            opacity: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: 'power2.out',
        });
    </script>
    @yield('scripts')
</body>
</html>
