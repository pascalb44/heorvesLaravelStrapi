@extends('layouts.app')

@section('title', 'biographie – Prix HEORVES')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-8">
                <h2>Biographie d’Honoré d’Estienne d’Orves</h2>
                <img src="{{ asset('images/heorves.jpg') }}" alt="portrait d'Estienne d'Orves">
                <p class="fs-5">Avant d’être connu pour ses faits de résistance, Honoré d’Estienne d’Orves était un officier de marine de carrière qui a confirmé son engagement pour la Nation en passant des rangs de la Marine Nationale (devenue vichyste par obligation) à la France Libre, ce qui n’était pas évident pour nombre de ses compatriotes.
                    Le drapeau des FFL en est un symbole<br>

                    <img src="{{ asset('images/FFL.jpg') }}" alt="drapeau des FFL">
                </p>
            </div>
        </div>
        <div>
            <p class="fs-5">Il embarque, à Newlyn, le 21 décembre 1940, sous le pseudonyme de « Jean-Pierre Girard », avec un radio télégraphiste, Georges Marty, sur un bateau de pêche, la Marie-Louise, à destination de Plogoff.<br>

                Il avait établi la première liaison avec Londres le 25 décembre 1940.<br>

                Installé chez les Clément, à Chantenay-sur-Loire près de Nantes, parfaitement aidé dans ses déplacements par Maurice Barlier, il rayonne à travers toute la Bretagne et ne tarde pas à mettre sur pied l’organisation précise du réseau. Il transmet en outre des renseignements capitaux sur les défenses côtières allemandes, les sous-marins, les aérodromes et les dépôts d’essence de la région nantaise.<br>

                Du 6 au 19 janvier, il se rend à Paris pour organiser un second réseau et rencontre Jan Doornik et de nombreuses personnalités. De retour à Nantes, le 20 janvier, il se réinstalle chez les Clément. Ceux-ci ont mis leur maison à son entière disposition, et lui font part de leur inquiétude au sujet du comportement suspect de Marty. Honoré d’Estienne d’Orves décide alors de renvoyer son radio à l’occasion du prochain voyage à Londres.<br>

                Mais il est déjà trop tard. Lui-même et tous les membres de son réseau, trahis par leur radio télégraphiste Marty, de son vrai nom Alfred Gaessler sont arrêtés dans la nuit du 21 janvier par les allemands qui envahissent la demeure.<br>

                Après avoir résisté, d’Estienne d’Orves, le visage en sang, est menotté et conduit avec ses compagnons à Angers.<br>

                Il sera fusillé au Mont Valérien le 29 août 1941.
            </p>

        </div>
</section>
@endsection