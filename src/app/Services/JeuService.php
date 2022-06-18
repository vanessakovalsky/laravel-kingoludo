<?php

namespace App\Services;

use App\Models\JeuModel;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Support\Facades\Auth;

class JeuService 
{
    public function calcul($un, $deux){
        $result = $un + $deux;
        return $result;
    }

    public function remise($pourcentage, $total){
        $prix_remise = $total - ($pourcentage * $total);
        return $prix_remise;
    }

    public function edit($id){
        $jeu = JeuModel::find($id);

        if(Auth::check() ){
            $categories = Categorie::all();
            $collections = Collection::all();
            return view('jeu.edit',compact('jeu','categories','collections'));
        }
        else { 
            return 'Merci de <a href="/login">vous connecter</a>';
        }
    }
}