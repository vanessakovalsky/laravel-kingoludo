<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class DemoScope implements Scope
{

    public function apply(Builder $builder, Model $JeuModel)
    {
        $builder->where('nom', '!=', 'Les aventuriers du rail');
    }

}