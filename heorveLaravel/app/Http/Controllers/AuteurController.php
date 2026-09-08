<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AuteurController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:1337/api/auteurs?populate&sort=annee_prix:desc');

        $auteurs = $response->json()['data'] ?? [];

        return view('pages.auteurs', compact('auteurs'));
    }
}
