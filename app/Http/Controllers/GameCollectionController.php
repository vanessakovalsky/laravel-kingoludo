<?php

namespace App\Http\Controllers;

use App\Model\GameCollection;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game_collec = GameCollection::all();

        return view('collection.index',compact('game_collec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GameCollection::create($request->all);

        redirect(route('collection.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('collection.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  GameCollection  $gameCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(GameCollection $collection)
    {
        $user = Auth::user();
        if($user && $this->authorize('update',$collection)){
        //if($user && $user->can('update',$collection)){
            return view('collection.edit');
        }
        else {
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameCollection $gameCollection)
    {

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
}
