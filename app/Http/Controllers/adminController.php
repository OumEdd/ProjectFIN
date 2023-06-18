<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function indexDashboardAdmin(){
        return view('admin.dashboard');
    }
}
