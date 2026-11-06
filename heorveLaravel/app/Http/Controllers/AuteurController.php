<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AuteurController extends Controller
{
    public function index()
    {
        $response = Http::get('http://57.131.160.5:1337/api/auteurs?populate&sort=annee_prix:desc');

        $auteurs = $response->json()['data'] ?? [];

        return view('pages.auteurs', compact('auteurs'));
    }
    public function show(int $id)
{
    $auteurResponse = Http::get("http://57.131.160.5:1337/api/auteurs", [
        'filters[id][$eq]' => $id,
        'populate' => '*'
    ]);

    $auteurJson = $auteurResponse->json();

    if (!empty($auteurJson['data'])) {
        $item = $auteurJson['data'][0]['attributes'] ?? $auteurJson['data'][0];
        $type = 'auteur';
        return view('pages.livres-detail', compact('item', 'type'));
    }

    abort(404, "Auteur introuvable");
}




}
