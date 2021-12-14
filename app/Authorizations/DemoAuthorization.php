<?php

namespace App\Authorizations;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class DemoAuthorization
{

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function demo(User $user){
        dd('arrive dans la méthode');
        return Response::allow();
    }
}
