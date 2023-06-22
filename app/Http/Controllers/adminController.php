<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\responsable;
use App\Models\service;
use App\Models\ville;
use App\Models\complaint_respo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;

class adminController extends Controller
{
    public function indexDashboardAdmin()
    {
        $comptRespo=count(responsable::all());
        $comptServ=count(service::all());
        $comptVille=count(ville::all());
        $comptCompl=count(complaint_respo::all());
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        if (session::has('loginId2')) {
            return view('admin.dashboardAdmin', compact(['data','comptRespo','comptRespo','comptServ','comptVille','comptCompl']));
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

    public function complainRespo(){
        $compl = DB::table('complaint_respos')
        ->join('reclamations','reclamations.id_rec','=','complaint_respos.id_rec')
        ->join('responsables','responsables.id_respo','=','complaint_respos.id_respo')->get();
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.complaintRespo',compact('data','compl'));
    }
    public function ajouteRespo(){
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.ajouteRespo',compact('data'));
    }

    public function insertRespo(Request $request){
        DB::table('responsables')->insert([
            'nom_respo' => $request->input('nom_respo'),
            'prenom_respo' => $request->input('prenom_respo'),
            'adresse_respo' => $request->input('adresse_respo'),
            'email_respo' => $request->input('email_respo'),
            'ville_trav' => $request->input('ville_trav'),
            'cin_respo' => $request->input('cin_respo'),
            'tele_respo' => $request->input('tele_respo'),
            'password_respo' => $request->input('password_respo'),
        ]);
        return back()->with('success', 'ajouter le responsable avec succes');
    }
    public function insertServ(Request $request){
        DB::table('services')->insert([
            'nom_serv' => $request->input('nom_serv'),
        ]);
        return back()->with('success', 'ajouter le service avec succes');
    }

    public function insertVille(Request $request){
        DB::table('villes')->insert([
            'nom_ville' => $request->input('nom_ville'),
        ]);
        return back()->with('success', 'ajouter le service avec succes');
    }


    public function ajouteServ(){
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.ajouteServe',compact('data'));
    }
    public function ajouteVille(){
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.ajouteVille',compact('data'));
    }



    public function settingAdmin(){
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.settingAdmin',compact(['data']));
    }
    public function motPassAdmin(){
        $data = admin::where('id_admin', '=', session::get('loginId2'))->first();
        return view('admin.updatePassAdmin',compact('data'));
    }
    public function updateSettingAdmin(Request $request){
        DB::table('Admins')->where('id_admin','=',session::get('loginId2'))->update([
            'nom_admin' => $request->input('nom_admin'),
            'prenom_admin' => $request->input('prenom_admin'),
            'email_admin' => $request->input('email_admin'),
            'cni_admin' => $request->input('cin_admin')
        ]);
        return back()->with('succes', 'modifier les informations avec succes');
    }

    public function changerMotPasseAdmin(Request $request)
    {
        request()->validate([
            'passeActuel' => 'required',
            'password' => 'required|min:9|max:50|confirmed',
        ]);
        $res = admin::where('id_admin', '=', session::get('loginId2'))->first();
        if ($request->input('passeActuel') == $res->password_admin) {
            DB::table('admins')->where('id_admin', '=', session::get('loginId2'))->update(['password_admin' => $request->input('password')]);
            return back()->with('success', 'Modifié le mot de passe avec succés');
        } else {
            return back()->with('fail', 'Le mot de passe actuel incorrect');
        }
    }
}
