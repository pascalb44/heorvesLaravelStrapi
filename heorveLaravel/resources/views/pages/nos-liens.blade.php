@extends('layouts.app')

@section('title', 'Nos liens – Prix HEORVES')

@section('content')
<!-- Hero Section -->
@include('layouts.partials.hero', [
'title' => 'Nos liens',
'subtitle' => 'Découvrez les ressources autour du prix Honoré d’Estienne d’Orves'
])

<!-- Section : Image et biographie -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Biographie -->
            <div class="col-lg-8">
                <h2>Biographie d’Honoré d’Estienne d’Orves</h2>
                <p class="fs-5">
                </p>
                <a href="https://www.ordredelaliberation.fr/fr/compagnons/honore-estienne-dorves-d"
                    class="btn btn-primary mt-3"
                    target="_blank">
                    <i class="fas fa-external-link-alt me-2"></i>
                    En savoir plus sur Honoré d’Estienne d’Orves
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Section : Liens autour des livres primés -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Liens autour des livres primés</h2>
        <!-- Dans la section "Liens autour des livres primés" -->
        @foreach($liensParCategorie as $categorie => $liens)
        <div class="mb-5">
            <h3>{{ $categorie }}</h3>
            <div class="list-group">
                @foreach($liens as $lien)
                <a href="{{ $lien['url'] }}"
                    class="list-group-item list-group-item-action"
                    target="_blank">
                    <i class="fas fa-external-link-alt me-2"></i>
                    {{ $lien['titre'] }}
                </a>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection