@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<section class="py-20 bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-display text-center mb-12" data-gsap="fade-up">À propos de moi</h2>
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Bio -->
            <div data-gsap="fade-right">
                <img src="{{ asset('images/profile.jpg') }}" alt="Happi Mathis" class="w-full h-96 object-cover rounded-lg mb-6">
                <h3 class="text-2xl font-semibold mb-4">Happi Mathis</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Basé à Douala, Cameroun, je suis un développeur passionné par la création d’applications web et mobiles
                    qui simplifient la vie des utilisateurs. Avec une formation d’ingénieur en informatique et plusieurs
                    années d’expérience, je combine créativité et rigueur technique pour livrer des projets d’exception.
                </p>
                <p class="text-gray-600 dark:text-gray-300">
                    Mon approche est centrée sur le client : je m’assure que chaque projet reflète vos besoins tout en
                    intégrant les meilleures pratiques de développement.
                </p>
            </div>
            <!-- Details -->
            <div data-gsap="fade-left">
                <h3 class="text-2xl font-semibold mb-4">Compétences</h3>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="p-4 bg-white dark:bg-gray-700 rounded-lg shadow">
                        <h4 class="font-medium">Backend</h4>
                        <p class="text-gray-600 dark:text-gray-300">Laravel, PHP, Node.js</p>
                    </div>
                    <div class="p-4 bg-white dark:bg-gray-700 rounded-lg shadow">
                        <h4 class="font-medium">Mobile</h4>
                        <p class="text-gray-600 dark:text-gray-300">Flutter, Dart</p>
                    </div>
                    <div class="p-4 bg-white dark:bg-gray-700 rounded-lg shadow">
                        <h4 class="font-medium">Frontend</h4>
                        <p class="text-gray-600 dark:text-gray-300">HTML, CSS, JavaScript, Tailwind</p>
                    </div>
                    <div class="p-4 bg-white dark:bg-gray-700 rounded-lg shadow">
                        <h4 class="font-medium">Bases de données</h4>
                        <p class="text-gray-600 dark:text-gray-300">MySQL, Firebase</p>
                    </div>
                </div>
                <h3 class="text-2xl font-semibold mb-4">Langues</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Français (natif), Anglais (C1 - courant)</p>
                <h3 class="text-2xl font-semibold mb-4">Centres d’intérêt</h3>
                <p class="text-gray-600 dark:text-gray-300">Football, jeux vidéo (FIFA, Call of Duty), lecture tech</p>
            </div>
        </div>
        <!-- Certifications -->
        <div class="mt-12">
            <h3 class="text-2xl font-semibold mb-4 text-center" data-gsap="fade-up">Certifications</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow" data-gsap="fade-up" data-gsap-delay="0.2">
                    <h4 class="font-medium">Laravel Certified Developer</h4>
                    <p class="text-gray-600 dark:text-gray-300">2023</p>
                </div>
                <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow" data-gsap="fade-up" data-gsap-delay="0.4">
                    <h4 class="font-medium">Flutter Mobile Development</h4>
                    <p class="text-gray-600 dark:text-gray-300">2022</p>
                </div>
                <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow" data-gsap="fade-up" data-gsap-delay="0.6">
                    <h4 class="font-medium">AWS Cloud Practitioner</h4>
                    <p class="text-gray-600 dark:text-gray-300">2024</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
