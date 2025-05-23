@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<!-- Hero Section with Particles -->
<section id="hero" class="relative h-screen flex items-center justify-center text-center overflow-hidden bg-gradient-to-br from-primary to-accent">
    <div id="particles-js" class="absolute inset-0"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-5xl md:text-7xl font-display text-white mb-4" data-gsap="fade-up">Happi Mathis</h1>
        <p class="text-2xl md:text-4xl mb-6 text-white"><span id="typed-text"></span></p>
        <p class="text-lg text-text-dark dark:text-text-dark mb-8 max-w-2xl mx-auto">
            Développeur Web & Mobile passionné, je crée des solutions innovantes avec Laravel et Flutter pour transformer vos idées en réalité.
        </p>
        <div class="space-x-4">
            <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-primary text-white font-semibold rounded-full hover:bg-accent transition no-theme">Me contacter</a>
            <a href="{{ route('download.cv') }}" class="inline-block px-8 py-3 bg-transparent border border-white text-white hover:bg-white hover:text-primary rounded-full transition no-theme">Télécharger CV</a>
        </div>
    </div>
</section>

<!-- Why Me -->
<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-display mb-12" data-gsap="fade-up">Pourquoi travailler avec moi ?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg" data-gsap="fade-up" data-gsap-delay="0.2">
                <h3 class="text-xl font-semibold mb-4">Expertise Technique</h3>
                <p class="text-text-light dark:text-text-dark">Maîtrise de Laravel, Flutter, et bases de données pour des solutions robustes.Outil d'infographie</p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg" data-gsap="fade-up" data-gsap-delay="0.4">
                <h3 class="text-xl font-semibold mb-4">Approche Client</h3>
                <p class="text-text-light dark:text-text-dark">Écoute active et solutions sur mesure pour répondre à vos besoins.</p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg" data-gsap="fade-up" data-gsap-delay="0.6">
                <h3 class="text-xl font-semibold mb-4">Livraison Rapide</h3>
                <p class="text-text-light dark:text-text-dark">Respect des délais avec un code de qualité et optimisé.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Particles.js
    particlesJS('particles-js', {
        particles: {
            number: { value: 80, density: { enable: true, value_area: 800 } },
            color: { value: '#FFFFFF' }, // White particles for contrast
            shape: { type: 'circle' },
            opacity: { value: 0.5 },
            size: { value: 3, random: true },
            move: { enable: true, speed: 2, direction: 'none', out_mode: 'out' }
        },
        interactivity: {
            detect_on: 'canvas',
            events: { onhover: { enable: true, mode: 'repulse' }, onclick: { enable: true, mode: 'push' } },
            modes: { repulse: { distance: 100, duration: 0.4 }, push: { particles_nb: 4 } }
        }
    });

    // Typed.js
    var typed = new Typed('#typed-text', {
        strings: ['Développeur Web.', 'Expert Flutter.', 'Innovateur Mobile.'],
        typeSpeed: 60,
        backSpeed: 40,
        backDelay: 2000,
        loop: true
    });

    // GSAP Animations
    gsap.from('[data-gsap="fade-up"]', {
        y: 50,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        scrollTrigger: {
            trigger: '[data-gsap="fade-up"]',
            start: 'top 80%',
        }
    });
</script>
@endsection
