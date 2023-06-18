<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
public function accueil(){
    return view('accueil');
}

public function propos(){
    return view('propos');
}
public function service_Reclamation(){
    return view('Service_Reclamation');
}
public function service_Observation(){
    return view('Service_Observation');
}
public function service_Suggestion(){
    return view('Service_Suggestion');
}
public function clarification(){
    return view('clarification');
}
public function guide(){
    return view('guide');
}
public function equipe(){
    return view('equipe');
}
public function Responsable(){
    return view('Responsable');
}
}
