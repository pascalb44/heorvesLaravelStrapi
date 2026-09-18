@extends('layouts.app')

@section('content')
<!-- Hero Section -->
@include('layouts.partials.hero', [
'title' => 'Nos auteurs',
'subtitle' => 'Les auteurs primés par le Prix Honoré d’Estienne d’Orves'
])

<!-- Description -->
<section class="py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-m-8 text-center">
                <p class="fs-5">
                    Les auteurs sont classés selon l’ordre d’attribution du prix,
                    <strong>du plus récent au plus ancien</strong>.
                </p>
                <p class="fs-5">Cliquez sur un auteur pour en savoir plus.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach($auteurs as $auteur)
            <div class="col-md-4 col-lg-4 mb-4 auteursListe">
                <a href="{{ route('auteurs.detail', $auteur['id']) }}">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h3 class="card-title">{{ $auteur['nom'] }}</h3>
                            <p class="card-text text-muted">
                                Prix {{ $auteur['annee_prix'] }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection