@props([
'title' => null,
'subtitle' => null,
'heroImage' => null
])

<section
    class="text-center {{ $heroImage ? 'py-5' : 'py-4 hero-grey' }}" {{-- couleur du bandeau en css--}}
    @if($heroImage)
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ $heroImage }}');
               background-size: cover;
               background-position: center;
               color: white;"
    @endif>
    <div class="{{ $heroImage ? 'container py-5' : '' }}">

        @if($title)
        <h1 class="fw-bold {{ $heroImage ? 'text-white display-4' : 'text-dark display-5' }}">
            {{ $title }}
        </h1>
        @endif

        @if($subtitle)
        <p class="lead hero-subtitle {{ $heroImage ? 'fs-4' : '' }}">
            {{ $subtitle }}
        </p>
        @endif

    </div>
</section>