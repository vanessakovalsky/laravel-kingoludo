<?php

namespace App\Policies;

use App\Model\GameCollection;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GameCollectionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before($user, $ability){
        if($user->role == 'superAdmin'){
            return true;
        }
    }

    /**
     * Determine if the given post can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \App\Model\GameCollection  $post
     * @return bool
     */
    public function update(User $user, GameCollection $gameCollection)
    {
        return $user->id === $gameCollection->user_id;
    }
}
