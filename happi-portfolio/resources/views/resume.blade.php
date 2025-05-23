@extends('layouts.app')

@section('title', 'Parcours')

@section('content')
<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-display text-center mb-12 text-primary dark:text-primary-dark" data-gsap="fade-up">Mon Parcours</h2>
        <!-- Timeline -->
        <div class="relative">
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-primary dark:bg-primary-dark"></div>
            <!-- Education -->
            <div class="mb-12 flex items-center" data-gsap="fade-up">
                <div class="w-1/2 pr-8 text-right">
                    <h3 class="text-2xl font-semibold text-primary dark:text-primary-dark">Diplôme d’Ingénieur</h3>
                    <p class="text-text-light dark:text-text-dark">IAI Douala</p>
                    <p class="text-gray-500 dark:text-gray-400">2020 - 2023</p>
                </div>
                <div class="w-1/2"></div>
            </div>
            <div class="mb-12 flex items-center flex-row-reverse" data-gsap="fade-up" data-gsap-delay="0.2">
                <div class="w-1/2 pl-8">
                    <h3 class="text-2xl font-semibold text-primary dark:text-primary-dark">Licence en Informatique</h3>
                    <p class="text-text-light dark:text-text-dark">IAI Douala</p>
                    <p class="text-gray-500 dark:text-gray-400">2020 - 2023</p>
                </div>
                <div class="w-1/2"></div>
            </div>
            <div class="mb-12 flex items-center" data-gsap="fade-up" data-gsap-delay="0.4">
                <div class="w-1/2 pr-8 text-right">
                    <h3 class="text-2xl font-semibold text-primary dark:text-primary-dark">Baccalauréat Scientifique</h3>
                    <p class="text-text-light dark:text-text-dark">Lycée Joss, Douala</p>
                    <p class="text-gray-500 dark:text-gray-400">2017</p>
                </div>
                <div class="w-1/2"></div>
            </div>
            <!-- Experience -->
            <div class="mt-12">
                <h3 class="text-3xl font-semibold text-center mb-8 text-primary dark:text-primary-dark" data-gsap="fade-up">Expérience</h3>
                <div class="space-y-8">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg" data-gsap="fade-up">
                        <h4 class="text-xl font-medium text-primary dark:text-primary-dark">Stagiaire Développeur - AFRICAN WINDOWS SARL</h4>
                        <p class="text-gray-500 dark:text-gray-400">2022</p>
                        <ul class="list-disc list-inside text-text-light dark:text-text-dark">
                            <li>Conception d’une application web de gestion avec Laravel</li>
                            <li>Optimisation des performances des bases de données</li>
                            <li>Collaboration avec une équipe agile</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg" data-gsap="fade-up" data-gsap-delay="0.2">
                        <h4 class="text-xl font-medium text-primary dark:text-primary-dark">Stagiaire IT - Mairie de Douala</h4>
                        <p class="text-gray-500 dark:text-gray-400">2021</p>
                        <ul class="list-disc list-inside text-text-light dark:text-text-dark">
                            <li>Gestion de projets de numérisation</li>
                            <li>Support technique et formation des utilisateurs</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg" data-gsap="fade-up" data-gsap-delay="0.4">
                        <h4 class="text-xl font-medium text-primary dark:text-primary-dark">Stagiaire Mobile & Multimédia - CIJ</h4>
                        <p class="text-gray-500 dark:text-gray-400">2020</p>
                        <ul class="list-disc list-inside text-text-light dark:text-text-dark">
                            <li>Développement d’une application mobile avec Flutter</li>
                            <li>Création de montages vidéo et infographies pour campagnes numériques</li>
                            <li>Tests unitaires et déploiement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
