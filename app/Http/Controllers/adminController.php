<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\responsable;
use App\Models\service;
use App\Models\ville;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;

class adminController extends Controller
{
    public function indexDashboardAdmin()
    {

        if (session::has('loginId2')) {
            return view('admin.dashboardAdmin', [
                'data' => admin::where('id_admin', '=', session::get('loginId2'))->first()
            ]);
        }
    }
    public function AuthLoginAdmin(Request $request)
    {
        $user = admin::where('email_admin', '=', $request->email_admin)->where('password_admin', '=', $request->password_admin)->first();
        if ($user) {
            $request->session()->put('loginId2', $user->id_admin);
            return redirect('dashboard_admin');
        }
    }
    public function logoutAdmin()
    {
        if (session::has('loginId2')) {
            session::pull('loginId2');
            return redirect('Responsable');
        }
    }
    public function ad_respo()
    {
        $respo = responsable::all();
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.respo', compact(['respo', 'data']));
    }
    public function ad_service()
    {
        $serv = service::all();
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.service', compact(['serv', 'data']));
    }
    public function ad_ville()
    {
        $ville = ville::all();
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.ville', compact(['data', 'ville']));
    }


    public function updateRespo($id)
    {
        $respo = responsable::where('id_respo', '=', $id)->first();
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.updateRespo', compact(['data', 'respo']));
    }

    public function ModifyRespo(Request $request, $id)
    {
        $request->validate([
            'nom_respo'=>'required',
            'prenom_respo'=>'required',
            'email_respo'=>'required',
            'adresse_respo'=>'required',
            'tele_respo'=>'required'
        ]);
        $query = DB::table('responsables')
            ->where('id_respo', $id)
            ->update([
                'nom_respo' => $request->input('nom_respo'),
                'prenom_respo' => $request->input('prenom_respo'),
                'adresse_respo' => $request->input('adresse_respo'),
                'email_respo' => $request->input('email_respo'),
                'tele_respo' => $request->input('tele_respo'),
            ]);
        if ($query) {
            return   back()->with('success', 'Data have been successfuly updated');
        } else {
            return back()->with('fail', 'Somthing went wrogn');
        }
    }
    public function deleteRespo($id)
    {
        DB::table('responsables')
            ->where('id_respo', $id)
            ->delete();
        return back();
    }


    public function updateServ($id)
    {
        $serv = service::where('id_serv', '=', $id)->first();
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.updateServ', compact(['data', 'serv']));
    }

    public function ModifyServ(Request $request, $id)
    {
        $request->validate([
            'nom_serv'=>'required'
        ]);
        $query = DB::table('services')
            ->where('id_serv', $id)
            ->update([
                'nom_serv' => $request->input('nom_serv')
            ]);
        if ($query) {
            return   back()->with('success', 'Data have been successfuly updated');
        } else {
            return back()->with('fail', 'Somthing went wrogn');
        }
    }

    public function deleteServ($id)
    {
        DB::table('services')
            ->where('id_serv', $id)
            ->delete();
        return back();
    }

    public function updateVille($id)
    {
        $ville = service::where('id_ville', '=', $id)->first();
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.updateVille', compact(['data', 'ville']));
    }

    public function ModifyVille(Request $request, $id)
    {
        $request->validate([
            'nom_ville'=>'required'
        ]);
        $query = DB::table('villes')
            ->where('id_ville', $id)
            ->update([
                'nom_ville' => $request->input('nom_ville')
            ]);
        if ($query) {
            return   back()->with('success', 'Data have been successfuly updated');
        } else {
            return back()->with('fail', 'Somthing went wrogn');
        }
    }

    public function deleteVille($id)
    {
        DB::table('villes')
            ->where('id_ville', $id)
            ->delete();
        return back();
    }
}
