<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function DashboardAdminAction(){
        return '<h1>MOn super tableau d party</h1>';
    }
}
