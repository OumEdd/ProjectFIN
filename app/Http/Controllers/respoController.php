<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexDashboardRespo(){
        return view('responsable.dashboard');
    }

    }
