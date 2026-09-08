<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Balises meta de base -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prix de lecture Honoré d’Estienne d’Orves – Association IHEDN Pays de la Loire">

    <!-- Titre dynamique (peut être surchargé par les vues) -->
    <title>@yield('title', 'Prix HEORVES')</title>

    <!-- Bootstrap CSS (pour le design) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Font Awesome (pour les icônes) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts (Roboto) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS personnalisé (optionnel) -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Section pour ajouter des styles spécifiques à une page -->
    @yield('styles')
</head>

<body>
    <!-- Header (navbar) -->
        @include('layouts.partials.header')
       

    <main>
        @yield('content')
    </main>


    <!-- Bootstrap JS + Popper (pour les composants interactifs) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Section pour ajouter des scripts spécifiques à une page -->
    @yield('scripts')
</body>

</html>