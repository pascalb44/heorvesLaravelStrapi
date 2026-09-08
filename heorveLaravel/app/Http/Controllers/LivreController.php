<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class LivreController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:1337/api/livres?populate&sort=annee_prix:desc');

        $livres = $response->json()['data'] ?? [];

        return view('pages.livres', compact('livres'));
    }
    public function detail( int $id)
    {
        // 1. Chercher un livre
        $livreResponse = Http::get("http://127.0.0.1:1337/api/livres", [
            'filters[id][$eq]' => $id,
            'populate' => '*'
        ]);

        $livreJson = $livreResponse->json();

        if (!empty($livreJson['data'])) {
            $item = $livreJson['data'][0];
            $type = 'livre';
            return view('pages.livres-detail', compact('item', 'type'));
        }

        // 2. Chercher un auteur
        $auteurResponse = Http::get("http://127.0.0.1:1337/api/auteurs", [
            'filters[id][$eq]' => $id,
            'populate' => '*'
        ]);

        $auteurJson = $auteurResponse->json();

        if (!empty($auteurJson['data'])) {
            $item = $auteurJson['data'][0];
            $type = 'auteur';
            return view('pages.livres-detail', compact('item', 'type'));
        }

        abort(404, "Livre ou auteur introuvable");
    }
}
