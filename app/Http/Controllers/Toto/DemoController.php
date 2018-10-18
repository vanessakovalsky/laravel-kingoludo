<?php

namespace App\Http\Controllers\Toto;

use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function DemoAction(){
        return "on voit rien";
    }

    public function BonjourAction($name){
        return 'Bonjour '.$name;
    }

    public function LoggedOnlyAction(){
        return 'Je suis connecté';
    }
}
