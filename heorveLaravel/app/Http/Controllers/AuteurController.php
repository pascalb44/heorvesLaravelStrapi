<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; 

class AuteurController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:1337/api/auteurs?populate=*');
        return view('auteurs.index', ['auteurs' => $response->json()]);
    }

    public function show($slug)
    {
        $response = Http::get("http://localhost:1337/api/auteurs?filters[slug]=$slug&populate=*");
        $auteur = $response->json()['data'][0] ?? null;
        return view('auteurs.show', compact('auteur'));
    }
}
