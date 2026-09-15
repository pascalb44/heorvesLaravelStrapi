@extends('layouts.app')

@section('title', 'association – Prix HEORVES')

@section('content')

<!-- Hero Section -->
@include('layouts.partials.hero', [
'title' => 'L\'association',
'subtitle' => null,
'heroImage' => null
])
<!-- Section : Image et biographie -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-8 mx-auto">
                <p class="fs-5">Vous trouverez ci-dessous le lien vers l’association IHEDN des pays de la Loire qui organise le prix de lecture Honoré d’Estienne d’Orves<br>
                    <a href="https://www.auditeurs-ihedn-pdl.org/">Association IHEDN des pays de la Loire</a>
                </p>
                <div class="containerImg">
                    <img src="{{ asset('images/logo-ihedn-paysdelaloire.jpg') }}" alt="logo de l'association ihedn-paysdelaloire">
                </div>

                <h2>In memoriam</h2>
                <h3>Rose de Beaufort</h3><br>
                <p>Rose de Beaufort, fille d’Honoré d’Estienne d’Orves, est décédée le 24 octobre 2023. Elle avait participé à la création de l’Association des familles de Compagnon de la Libération, dont elle en avait longtemps assuré la vice-présidence. « Cette femme d’une énergie exceptionnelle et d’une grande générosité avait voué sa vie à la défense de la mémoire de son père et de tous les Compagnons. »(AFCL). Ses obsèques ont été célébrées le 28 octobre 2023 en la chapelle de l’École Militaire à Paris.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection