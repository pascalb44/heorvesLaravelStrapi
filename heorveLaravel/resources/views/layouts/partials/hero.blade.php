<!-- resources/views/layouts/partials/hero.blade.php -->
@props([
'title' => 'Prix HEORVES', // Titre par défaut
'subtitle' => null, // Sous-titre (optionnel)
'heroImage' => null, // Image de fond (optionnel)
])

<section class="py-5 text-center"
    @if($heroImage)
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ $heroImage }}');
                    background-size: cover;
                    background-position: center;
                    color: white;"
    @else
    style="background-color: #f8f9fa;"
    @endif>
    <div class="container py-5">
        <h1 class="display-4 fw-bold {{ $heroImage ? 'text-white' : 'text-primary' }}">
            {{ $title }}
        </h1>
        @if($subtitle)
        <p class="lead fs-4 {{ $heroImage ? 'text-white' : 'text-secondary' }}">
            {{ $subtitle }}
        </p>
        @endif
    </div>
</section>