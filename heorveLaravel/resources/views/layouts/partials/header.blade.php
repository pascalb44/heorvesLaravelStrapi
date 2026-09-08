<header class="bg-white shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light container py-3">
        <a class="navbar-brand" href="{{ route('home') }}">
            <span class="fw-bold text-primary">Prix HEORVES</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                </li>
                <!-- Dropdown "Notre prix" -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('notre-prix') }}" id="notrePrixDropdown" role="button" data-bs-toggle="dropdown">
                        Notre prix
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('notre-prix.auteurs') }}">
                                Auteurs
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('notre-prix.livres') }}">
                                Livres
                            </a>
                        </li>
                        <!-- Ajoute d'autres sous-liens si nécessaire -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('association') }}">L'association</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('biographie') }}">Biographie d’Honoré d’Estienne d’Orves</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nos-liens') }}">Nos liens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mentions-legales') }}">Mentions légales</a>
                </li>
            </ul>
        </div>
    </nav>
</header>