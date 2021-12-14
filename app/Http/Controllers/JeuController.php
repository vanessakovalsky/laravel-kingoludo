<?php

namespace App\Http\Controllers;

use App\Models\JeuModel;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Http\Request;
use App\Events\JeuEnregistre;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\JeuFormRequest;
use App\Services\JeuService;

class JeuController extends Controller
{

    protected $jeuService;

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct(JeuService $jeuService)
    {
        $this->authorizeResource(JeuModel::class, 'jeuModel');
        $this->jeuService = $jeuService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $titre = __('game.liste_jeux');
        // echo $titre;

        // App::setLocale('en');
        // $titre2 = __('game.liste_jeux');
        // return $titre2;
            $liste = JeuModel::all();
            Log::info('Affiche la liste de jeux à ' . date('HH:mm'));

            return view('jeu.index', ['jeux' => $liste]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categorie::all();
        $collections = Collection::all();
        return view('jeu.create',compact('categories','collections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JeuFormRequest $request)
    {
        // Donnees recu du formulaire de creation
        $jeu = JeuModel::Create($request->all());
        $jeu->collections()->attach($request->collection);
        //  JeuEnregistre::dispatch();

        return $jeu->nom;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jeu = JeuModel::find($id)->withoutGlobalScope(DemoScope::class);
        return view('jeu.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->jeuService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JeuFormRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getJeuxByCategorie($categorie){
        return JeuModel::getJeuByCategorieName($categorie);
    }
}
