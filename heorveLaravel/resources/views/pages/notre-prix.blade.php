@extends('layouts.app')

@section('title', 'Notre prix – Prix Honoré d’Estienne d’Orves')

@section('content')
<!-- Hero Section -->
@include('layouts.partials.hero', [
'title' => 'Notre prix',
'subtitle' => 'Prix de lecture Honoré d’Estienne d’Orves'
])


<!-- Section 1: Présentation générale -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-primary mb-4">Le prix d’Estienne d’Orves</h2>
                <p class="fs-5">
                    Le prix d’Estienne d’Orves est destiné à récompenser un ouvrage original dont les perspectives s’inscrivent dans la valorisation de la culture de défense.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-primary mb-4">LES ORIGINES DU PRIX D’ESTIENNE D’ORVES</h2>

                <h3 class="mt-4 mb-3">Pourquoi ce prix ?</h3>
                <p class="fs-5">
                    Le prix d’Estienne d’Orves est destiné à récompenser un ouvrage original dont les perspectives s’inscrivent dans la valorisation de la culture de défense.
                </p>

                <p class="fs-5">
                    Il a été créé en <strong>2002</strong>, à l’initiative du président de l’Association régionale des Auditeurs de l’IHEDN des Pays de la Loire, Jean-Marie Remy, dans l’intention de développer les formes sous lesquelles l’Association pouvait contribuer au rayonnement de la culture de défense, l’une des missions que nous confie l’Institut en nous délivrant la formation d’auditeur.
                </p>

                <p class="fs-5">
                    L’Association remplissait jusqu’à cette date cet engagement sous la forme d’une aide accordée au DEA <em>Identités régionales et géostratégie dans le monde atlantique</em> dépendant du Centre de Recherche sur l’Histoire du Monde atlantique (CRHMA) à l’Université de Nantes et dirigé par Jean-Pierre Bois, auditeur IHEDN (121ème session, Nantes 1995).
                </p>

                <p class="fs-5">
                    L’évolution du DEA en Master 2 <em>Spécialité : Relations internationales et histoire du monde atlantique</em> et du Centre de recherche devenu <em>Centre de Recherche en Histoire Internationale et Atlantique (CRHIA)</em> et l’accession de Jean-Pierre Bois à la Présidence de l’Association régionale en 2003, succédant ainsi à Jean-Marie Remy, imposaient à l’Association de renouveler la forme de son engagement.
                </p>

                <p class="fs-5">
                    C’est justement parce qu’il a été arrêté à Nantes et qu’il en a fait l’un des cœurs de la Résistance à l’occupant que la ville de Nantes est partenaire de l’Association en accueillant tous les ans la remise du Prix.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-primary mb-4">Que récompense-t-il ?</h2>
                <p class="fs-5">
                    Le prix couronne une recherche originale de caractère scientifique ou un ouvrage de grande diffusion dont le thème original répond aux centres d’intérêt de l’IHEDN. Il a récompensé d’abord des études historiques à caractère géostratégique ou géopolitique portant sur des sujets intéressant la Défense.
                </p>
                <p class="fs-5">
                    Depuis 2007, le jury s’est ouvert à des ouvrages non universitaires, mais du même intérêt. Il ne se limite pas à des auteurs ou des sujets nantais ou ligériens, la culture de Défense devant avoir des horizons plus larges.
                </p>
                <p class="fs-5">
                    C’est aussi une manière de donner à l’IHEDN régionale au sein de sa région une place et une visibilité plus importante qu’une simple institution locale. Dans le même esprit d’ouverture, la remise du prix, jusqu’ici faite avec le soutien et dans le cadre d’autorités nantaises ou régionales très diverses, se donne pour 2008 un cadre national.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-primary mb-4">Pourquoi lui avoir donné ce nom ?</h2>
                <p class="fs-5">
                    Le nom du commandant Honoré d’Estienne d’Orves a été donné à ce prix, avec l’accord de Madame de Beaufort, sa fille, autant pour entretenir le souvenir d’un grand résistant, modèle de ce que pouvait être, dans les circonstances de la guerre, le service du pays et la grandeur d’un homme, qu’en raison des attaches nantaises de la famille d’Estienne d’Orves, et le rôle particulier de la ville et la région de Nantes dans son destin.
                </p>
                <p class="fs-5">
                    Madame de Beaufort, fille du commandant d’Estienne d’Orves, et sa cousine Madame de Becdelièvre, ont régulièrement honoré la remise du prix de leur présence.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: Remise du prix -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-primary mb-4">Remise du prix</h2>
                <p class="fs-5">
                    C’est justement parce qu’il a été arrêté à Nantes et qu’il en a fait l’un des cœurs de la Résistance à l’occupant que la ville de Nantes est partenaire de l’Association en accueillant tous les ans la remise du Prix au nom de la politique de Mémoire de la Ville de Nantes.
                </p>
                <p class="fs-5">
                    Nantes qui a la particularité d’être l’une des 5 villes de France titulaires de la Croix de Compagnon de la Libération, mais aussi de la médaille de la Résistance française comme le montrent ses armoiries.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-primary mb-4">En résumé</h2>
                <p class="fs-5">
                    Les œuvres primées se partagent en deux catégories qui se sont succédées au fil des années. De 2002 à 2006 ont été primées les œuvres de recherches universitaires, à savoir les mémoires de Master 1 et 2 (Maîtrise et DEA) et à partir de 2007 ont été récompensés les livres édités dans le commerce auprès du grand public.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection