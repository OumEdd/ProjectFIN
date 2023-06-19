<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\responsable;
class respoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexDashboardRespo(){
        return view('responsable.dashboard');
    }
    public function AuthLoginRespo(Request $request){
        $user = responsable::where('email_respo', '=', $request->email_respo)->where('password_respo', '=', $request->password_respo)->first();
        if ($user) {
                $request->session()->put('loginId2', $user->id_admin);
                return redirect('dashboard_responsable');
            }
        }
    

    }

