@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="py-20 bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-display text-center mb-12" data-gsap="fade-up">Contactez-moi</h2>
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Info -->
            <div data-gsap="fade-right">
                <h3 class="text-2xl font-semibold mb-4">Mes coordonnées</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-2"><strong>Téléphone :</strong> (+237) 697-48-60-59 / 654-19-01-93</p>
                <p class="text-gray-600 dark:text-gray-300 mb-2"><strong>Email :</strong> <a href="mailto:kenwayhappi@gmail.com" class="text-accent hover:underline">kenwayhappi@gmail.com</a></p>
                <p class="text-gray-600 dark:text-gray-300"><strong>Localisation :</strong> Douala, Cameroun</p>
                <div class="mt-6">
                    <a href="{{ route('download.cv') }}" class="inline-block px-6 py-2 bg-primary text-white rounded-full hover:bg-accent transition">Télécharger mon CV</a>
                </div>
            </div>
            <!-- Form -->
            <div data-gsap="fade-left">
                @if (session('success'))
                    <div class="bg-green-100 text-green-800 p-4 rounded mb-6" data-gsap="fade-up">
                        {{ session('success') }}
                    </div>
                @endif
                <form id="contact-form" action="{{ route('send.message') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium">Nom</label>
                        <input type="text" name="name" id="name" class="w-full p-3 border rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-3 border rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium">Message</label>
                        <textarea name="message" id="message" rows="5" class="w-full p-3 border rounded-lg @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-accent transition">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        const button = this.querySelector('button[type="submit"]');
        button.textContent = 'Envoi...';
        button.disabled = true;
    });
</script>
@endsection
