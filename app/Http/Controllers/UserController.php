<?php

namespace App\Http\Controllers;

use App\Services\GeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    protected $geoService;

    public function __construct(GeoService $geoService){
        $this->geoService = $geoService;
    }

    public function coordonneesGPS(){
        $user = Auth::user();
        $coor = $this->geoService->calculateCoordonnees($user->adresse);
        return 'Les coordonnees GPS sont' . $coor;
    }
}
