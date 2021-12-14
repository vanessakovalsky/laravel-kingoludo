<?php

namespace App\Policies;

use App\Models\User;
use App\Models\JeuModel;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class JeuPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\JeuModel  $jeuModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, JeuModel $jeuModel)
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if ($user->role == 'admin') {
            return Response::allow();
        }
        else {
            return Response::deny('Accès non autorisé');
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\JeuModel  $jeuModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, JeuModel $jeuModel)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\JeuModel  $jeuModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, JeuModel $jeuModel)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\JeuModel  $jeuModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, JeuModel $jeuModel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\JeuModel  $jeuModel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, JeuModel $jeuModel)
    {
        //
    }
}
