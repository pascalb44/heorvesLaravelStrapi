<!-- resources/views/layouts/partials/header.blade.php -->
<header class="bg-white shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light container py-3">
        <a class="navbar-brand" href="{{ route('home') }}">
            <span class="fw-bold text-primary">Prix HEORVES</span>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('notre-prix') }}">Notre prix</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('association') }}">L'association</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('bio') }}">Biographie d’Honoré d’Estienne d’Orves</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('nos-liens') }}">Nos liens</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('legal') }}">Mentions légales</a></li>
            </ul>
        </div>
    </nav>
</header>