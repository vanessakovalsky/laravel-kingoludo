<?php

namespace App\Models;

use App\Scopes\DemoScope;
use App\Events\JeuEnregistre;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JeuModel extends Model
{
    use HasFactory;

    protected $fillable = ['nom','categorie_id'];

    protected $dispatchesEvents = [
        'saved' => JeuEnregistre::class,
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function collections(){
        return $this->belongsToMany(Collection::class, 'collection_jeu');
    }

    public function getJeuByCategorieName($nom_categorie){
        // SELECT * FROM jeu_models 
        // LEFT JOIN categories 
        // ON categories.id = jeu_models.categorie_id
        // WHERE categories.nom = $nom_categorie
        $jeux = DB::table('jeu_models')
                    ->join('categories',
                    'categories.id','=','jeu_models.categorie_id')
                    ->where('categories.nom',$nom_categorie)
                    ->select('jeu_models.nom','categories.nom as cat')
                    ->get();
        return $jeux;
    }

        /**
     * Scope a query to only include users of a given type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public function scopeByCategorie($query){
        return $query->orderBy('jeu_models.categorie_id');
    }

    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new DemoScope);
    }
}
