<?php

namespace App\Http\Controllers;

use App\Services\GeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DemoController extends Controller
{
    protected $geoService;

    public function __construct(GeoService $geoService){
        $this->geoService = $geoService;
    }

    public function index($id){
        $this->geoService->calculateCoordonnees('1 avenue massena 06100 Nice');
        return 'Toto est passé dans la classe demo'.$id;
    }

    public function appel(Request $request){
        if(! Gate::allows('test')){
            dd('non autorisé');
            abort(403, "Accès non autorisé");
        }
        else {
            dd('autorisé');
        }
    }

}
