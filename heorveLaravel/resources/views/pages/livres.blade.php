@extends('layouts.app')

@section('title', 'Nos livres – Prix HEORVES')

@section('content')
<!-- Hero Section -->
@include('layouts.partials.hero', [
'title' => 'Nos livres',
'subtitle' => 'Les livres primés par le Prix Honoré d’Estienne d’Orves'
])

<!-- Description -->
<section class="py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-m-8 text-center">
                <p class="fs-5">
                    Les livres sont classés selon l’ordre d’attribution du prix,
                    <strong>du plus récent au plus ancien</strong>.
                </p>
                <p class="fs-5">Cliquez sur un livre pour en savoir plus.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach($livres as $livre)
            <a class="bookList" href="{{ route('livres.detail', $livre['id']) }}">
                <p class="card-text text-muted"> Prix {{ $livre['annee_prix'] }} : {{ $livre['titre'] }}</p>
            </a>
            @endforeach
        </div>
    </div>

</section>
@endsection