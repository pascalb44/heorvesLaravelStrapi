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
                <p class="fs-5">https://www.ordredelaliberation.fr/fr/compagnons/honore-estienne-dorves-d"<br>
                    https://resistance-44.fr/?Honore-d-Estienne-d-Orves
                </p>

            </div>
        </div>
    </div>
</section>

<!-- Section : Liens autour des livres primés -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="col-lg-8">Liens autour des livres primés</h2>
        <p class="fs-5">https://fondationmemoiredeportation.com/2019/04/26/conference-du-27-avril-2019-avec-luc-antoine-lenoir-diplome-en-sciences-politiques-et-en-histoire/[Luc-Antoine Lenoir]<br>
            https://inflexions.net/auteurs/bachelet-jean-ren%C3%A9[Jean-René Bachelet]<br>
            https://etudesgeostrategiques.com/2017/03/26/morts-en-opex/[Nicolas Mingasson]<br>
            http://lignesdedefense.blogs.ouest-france.fr/archive/2016/05/07/le-prix-d-estienne-d-orves-pour-offensive-eclair-au-mali-de-16141.html[Rémi Scarpa]<br>
            https://institutdeslibertes.org/guerre-et-strategie-au-xxie-siecle/[Christian Malis]<br>
            https://www.lesclesdumoyenorient.com/Jean-Mathieu-Boris-Combattant-de-la-France-Libre-Compte-rendu-et-entretien-avec.html [Jean-Mathieu Boris]<br>
            https://www.asafrance.fr/analyses/communiques-asaf/item/prix-2013-honore-d-estienne-d-orves-decerne-a-l-asaf.html [ASAF]<br>
            https://www.defense.gouv.fr/actualites/memoire-et-culture/engage-du-lieutenant-nicolas-barthe[Nicolas Barthe]<br>
            https://www.iris-france.org/note-de-lecture/afghanistan-au-c%C2%9Cur-du-chaos/[Ariane Quentier]<br>
            https://www.defnat.com/e-RDN/vue-article.php?carticle=4855 [Pierre Servent]<br>
            https://lavoiedelepee.blogspot.com/2014/06/irak-les-nouvelles-armees-du-chaos.html [Michel Goya]<br>
            https://www.defnat.com/e-RDN/vue-article.php?carticle=4208 [Emmanuelle Dancourt]<br>
            https://musee-resistance-chateaubriant.fr/biographies/letertre-marcel-pere [Patrick Simon-Letertre]<br>
            http://cidif2.go1.cc/index.php/lettres-du-c-i-d-i-f/46-lettre-n-34-35/230-34-055-memoires-et-theses-sur-linde-et-lasie-du-sud-au-crhia [Mathilda Moutoussamy]<br>
            http://recherche-archives.vendee.fr/ark:/22574/vta6ac888e122ed2514 [Franck Segretin]<br>
            https://books.openedition.org/pur/25909 [Frédéric Loquin]<br>
            https://books.openedition.org/pur/25906 [Olivier Dupont]<br>
        </p>
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