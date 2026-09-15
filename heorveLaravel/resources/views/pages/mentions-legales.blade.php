@extends('layouts.app')

@section('content')
<!-- Hero Section -->
@include('layouts.partials.hero', [
'title' => 'Mentions légales',
'subtitle' => 'Découvrez les ressources autour du prix Honoré d’Estienne d’Orves'
])

<!-- Section : Image et biographie -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Biographie -->
            <div class="col-lg-8">
                <h2>Mentions légales</h2>
                    <p class="fs-5">Ce site est non officiel et n’engage que la responsabilité de son auteur Pascal Boucault, gérant d’Ossitoweb.<br>
                        Le site est hébergé chez OVH.<br>
                        Les liens ont été choisis de manière à ne pas influencer le lecteur sur un quelconque site commercial.<br>
                        Les textes des livres sont pour la plupart les 4e de couvertures telles que l’on peut les trouver sur internet.<br>
                        Les textes relatifs aux remises des prix et autres documents émanant de l’association sont issus pour la plupart des archives de l’ancien site internet.<br>
                        Les discours ont été repris sous la signature de leurs auteurs
                    </p>
            </div>
            <div class="col-lg-8">
                <h2>Explications des images</h2>
                    <p class="fs-5 creditImages">Le drapeau des FFL<br>
                        https://commons.wikimedia.org/w/index.php?curid=593178<br>
                    </p>
                    <p class="fs-5 creditImages">
                        Les armoiries de la ville de Nantes décorées également de la Croix de guerre 1939-1945<br>
                        http://svowebmaster.free.fr/blason_nantes.html<br>
                    </p>
                    <p class="fs-5 creditImages"> Le logo de l’association :<br>
                        https://ihedn-paysdelaloire.fr/<br>
                    </p>
                    <p class="fs-5 creditImages">Le portrait d’Honoré d’Estienne d’Orves en tenue d’officier de marine<br>
                        https://www.ordredelaliberation.fr/fr/compagnons/honore-estienne-dorves-d
                    </p>
            </div>

        </div>
    </div>
</section>
@endsection