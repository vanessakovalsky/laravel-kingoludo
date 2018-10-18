<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\ModelGame;
use Illuminate\Support\Facades\DB;

class GameCollection extends Model
{
    protected $table = "game_collection";
    /*
     * @return int
     */
    protected $game_id;

    /*
     * @return int
     */
    protected $user_id;

    /*
     * @return string
     */
    protected $etat;

    public function modelGame(){
        return $this->belongsToMany(ModelGame::class,'game_collection','id','game_id');
    }

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @param mixed $game_id
     */
    public function setGameId($game_id): void
    {
        $this->game_id = $game_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }

    public function getAllCollectionByGame($id_game){
        $results = DB::table('game_collection')
            ->select('id')
            ->where('game_id',$id_game)
            ->get();
        return $results;
    }

    public function getUserByGame($id_game) {
        $results = DB::raw('SELECT * FROM game_collection WHERE user_id IN (SELECT id from user WHERE created_at < now-1d)');
        return $results;
    }


}
