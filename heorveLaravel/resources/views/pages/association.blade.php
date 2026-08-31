@extends('layouts.app')

@section('title', 'association – Prix HEORVES')

@section('content')


<!-- Section : Image et biographie -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Biographie -->
            <div class="col-lg-8">
                <p class="fs-5">Mieux qu’un long récit, vous trouverez ci-dessous le lien vers l’association IHEDN des pays de la Loire qui organise le prix de lecture Honoré d’Estienne d’Orves<br>

                    Le site est hébergé chez OVH.<br>

                    <a href="https://www.auditeurs-ihedn-pdl.org/">Association IHEDN des pays de la Loire</a><br>
                    <img src="{{ asset('images/logo-ihedn-paysdelaloire.jpg') }}" alt="logo de l'association ihedn-paysdelaloire">
                </p>

                <h2>In memoriam</h2>
                <p>Rose de Beaufort<br>
                    Rose de Beaufort, fille d’Honoré d’Estienne d’Orves, est décédée le 24 octobre 2023. Elle avait participé à la création de l’Association des familles de Compagnon de la Libération, dont elle en avait longtemps assuré la vice-présidence. « Cette femme d’une énergie exceptionnelle et d’une grande générosité avait voué sa vie à la défense de la mémoire de son père et de tous les Compagnons. »(AFCL). Ses obsèques ont été célébrées le 28 octobre 2023 en la chapelle de l’École Militaire à Paris.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection