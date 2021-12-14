<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeoService 
{
    public function calculateCoordonnees($adresse){
        $adresse_encode = urlencode($adresse);
        $response = Http::get('https://api-adresse.data.gouv.fr/search/?q='.$adresse_encode);
        return $response;
    }

}