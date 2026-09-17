@extends('layouts.app')

@section('title', 'Nos liens – Prix HEORVES')

@section('content')
<!-- Hero Section -->
@include('layouts.partials.hero', [
'title' => 'Nos liens',
'subtitle' => 'Découvrez les ressources autour du prix Honoré d’Estienne d’Orves',
'heroImage' => null
])

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            @foreach($liensParCategorie as $categorie => $liens)
            <div class="mb-5">
                <h2>{{ $categorie }}</h2>
                <div class="list-group">
                    @foreach($liens as $lien)
                    <a href="{{ $lien['url'] }}"
                        class="list-group-item list-group-item-action"
                        target="_blank">
                        <i class="fas fa-external-link-alt me-2"></i>
                        {{ $lien['title'] }}
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
</section>
@endsection