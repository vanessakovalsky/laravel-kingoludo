<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $table = 'collections';

    public function jeu() {
        return $this->belongsToMany(JeuModel::class,'collection_jeu');
    }
}
