@extends('layouts.app')

@section('title', 'Projets')

@section('content')
<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-display text-center mb-12 text-primary dark:text-primary-dark" data-gsap="fade-up">Mes Réalisations</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="project-card bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300" data-gsap="fade-up">
                <img src="{{ asset('images/association-platform.jpg') ?? 'https://via.placeholder.com/400x200?text=Association' }}" alt="Plateforme de gestion" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-primary dark:text-primary-dark bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent dark:from-primary-dark dark:to-accent-dark">Plateforme de Gestion des Associations</h3>
                    <p class="text-text-light dark:text-text-dark mb-4">
                        Une application Laravel pour gérer les membres, événements et finances des associations. Inclut un tableau de bord interactif.
                    </p>
                    <button data-project="association" class="text-accent hover:text-accent-dark dark:text-accent-dark dark:hover:text-accent font-medium underline">Détails</button>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="project-card bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300" data-gsap="fade-up" data-gsap-delay="0.2">
                <img src="{{ asset('images/mobile-app.jpg') ?? 'https://via.placeholder.com/400x200?text=Mobile' }}" alt="Application mobile" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-primary dark:text-primary-dark bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent dark:from-primary-dark dark:to-accent-dark">Application Mobile de Suivi</h3>
                    <p class="text-text-light dark:text-text-dark mb-4">
                        Une app Flutter pour le suivi des tâches avec notifications push et synchronisation Firebase.
                    </p>
                    <button data-project="mobile" class="text-accent hover:text-accent-dark dark:text-accent-dark dark:hover:text-accent font-medium underline">Détails</button>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="project-card bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300" data-gsap="fade-up" data-gsap-delay="0.4">
                <img src="{{ asset('images/multimedia.jpg') ?? 'https://via.placeholder.com/400x200?text=Multimedia' }}" alt="Montages vidéo" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-primary dark:text-primary-dark bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent dark:from-primary-dark dark:to-accent-dark">Montages Vidéo & Infographies</h3>
                    <p class="text-text-light dark:text-text-dark mb-4">
                        Vidéos promotionnelles et infographies créées avec Adobe Premiere Pro, After Effects et Canva pour des campagnes percutantes.
                    </p>
                    <button data-project="multimedia" class="text-accent hover:text-accent-dark dark:text-accent-dark dark:hover:text-accent font-medium underline">Détails</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="project-modal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex items-center justify-center z-50">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl max-w-lg w-full shadow-2xl">
            <h3 id="modal-title" class="text-2xl font-display mb-4 text-primary dark:text-primary-dark"></h3>
            <p id="modal-description" class="text-text-light dark:text-text-dark mb-6"></p>
            <button id="close-modal" class="px-6 py-2 bg-primary text-white font-semibold rounded-full hover:bg-accent transition no-theme">Fermer</button>
        </div>
    </div>
</section>
@endsection
