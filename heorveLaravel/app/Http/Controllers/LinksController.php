<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LinksController extends Controller
{
    public function index()
    {
        try {
            // Récupère les liens depuis Strapi (format flat)
            $response = Http::get('http://localhost:1337/api/liens');

            if (!$response->successful()) {
                Log::error('Erreur Strapi: ' . $response->body());
                return view('pages.nos-liens', [
                    'liensParCategorie' => [],
                    'error' => 'Impossible de charger les liens depuis Strapi.'
                ]);
            }

            $liens = $response->json()['data'] ?? [];

            // Groupe les liens par catégorie (SANS attributes)
            $liensParCategorie = [];
            foreach ($liens as $lien) {
                // ⬇️ Utilise directement $lien['categorie'] au lieu de $lien['attributes']['categorie']
                $categorie = $lien['categorie'] ?? 'Non classé';
                if (!isset($liensParCategorie[$categorie])) {
                    $liensParCategorie[$categorie] = [];
                }
                $liensParCategorie[$categorie][] = $lien;
            }

            return view('pages.nos-liens', compact('liensParCategorie'));
        } catch (\Exception $e) {
            Log::error('Erreur dans LinksController: ' . $e->getMessage());
            return view('pages.nos-liens', [
                'liensParCategorie' => [],
                'error' => 'Une erreur est survenue.'
            ]);
        }
    }
}
