<?php

namespace App\Http\Controllers;

use App\Services\GeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

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

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $liste = User::all();
            Log::info("Affiche la liste d'utilisateurs");

            return view('user.index', ['users' => $liste]);
        
    }

}
