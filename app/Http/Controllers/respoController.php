<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\responsable;
use App\Models\reclamation;
use App\Models\complaint_respo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;

use function PHPSTORM_META\map;

class respoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexDashboardRespo()
    {
        $data = responsable::where('id_respo', '=', session::get('loginId'))->first();
        $rec = reclamation::all();
        $comptRec=0;
        $comptObserv=0;
        $comptSugg=0;
        foreach($rec as $item){
            if($item->type_rec=='reclamation'){
                $comptRec++;
            }
            if($item->type_rec=='observation'){
                $comptObserv++;
            }
            if($item->type_rec=='suggestion'){
                $comptSugg++;
            }
        }
        if (session::has('loginId')) {
            return view('responsable.dashboardRespo', compact('data','comptRec','comptObserv','comptSugg'));
        }
    }
    public function AuthLoginRespo(Request $request)
    {
        $user = responsable::where('email_respo', '=', $request->email_respo)->where('password_respo', '=', $request->password_respo)->first();
        if ($user) {
            $request->session()->put('loginId', $user->id_respo);
            $request->session()->put('ville_trav', $user->ville_trav);
            return redirect('dashboard_responsable');
        }
    }

    public function logoutRespo()
    {
        if (session::has('loginId')) {
            session::pull('loginId');
            return redirect('Responsable');
        }
    }

    public function pageReclamation()
    {
        $data = responsable::where('id_respo', '=', session::get('loginId'))->first();
        $rec = reclamation::all();
        $table = new Collection();
        foreach ($rec as $item) {
            if ($item->ville_rec == session::get('ville_trav') && $item->type_rec == 'reclamation' && $item->valide_rec == 0) {
                $row = ['ville_rec' => $item->ville_rec, 'service_rec' => $item->service_rec, 'id_rec' => $item->id_rec, 'message_rec' => $item->message_rec];
                $table->push($row);
            }
        }
        return view('responsable.reclamation', compact(['data', 'table']));
    }
    public function pageObersation()
    {
        $data = responsable::where('id_respo', '=', session::get('loginId'))->first();
        $rec = reclamation::all();
        $table = new Collection();
        foreach ($rec as $item) {
            if ($item->ville_rec == session::get('ville_trav') && $item->type_rec == 'observation' && $item->valide_rec == 0) {
                $row = ['ville_rec' => $item->ville_rec, 'service_rec' => $item->service_rec, 'id_rec' => $item->id_rec, 'message_rec' => $item->message_rec];
                $table->push($row);
            }
        }
        return view('responsable.observation', compact(['data', 'table']));
    }
    public function pageSuggestion()
    {
        $data = responsable::where('id_respo', '=', session::get('loginId'))->first();
        $rec = reclamation::all();
        $table = new Collection();
        foreach ($rec as $item) {
            if ($item->ville_rec == session::get('ville_trav') && $item->type_rec == 'suggestion' && $item->valide_rec == 0) {
                $row = ['ville_rec' => $item->ville_rec, 'service_rec' => $item->service_rec, 'id_rec' => $item->id_rec, 'message_rec' => $item->message_rec];
                $table->push($row);
            }
        }
        return view('responsable.suggestion', compact(['data', 'table']));
    }
    public function traiteRec($id)
    {
        $data = responsable::where('id_respo', '=', session::get('loginId'))->first();
        $rec = reclamation::where('id_rec', '=', $id)->first();
        return view('responsable.traiteRec', compact(['data', 'rec']));
    }

    public function ajoutRec(Request $request, $id)
    {
        if (complaint_respo::where('id_rec', '=', $id)->where('id_respo','=',session::get('loginId'))->exists() ) {
            return back()->with('fail', 'echec');
        } else {
            DB::table('complaint_respos')
                ->insert([
                    'id_respo' => session::get('loginId'),
                    'id_rec' => $id,
                    'message_compl' => $request->input('message')
                ]);

            DB::table('reclamations')->where('id_rec','=',$id)->update(['valide_rec' => 1 ]);
            return back()->with('succes', 'traite avec succes');
        }
    }

    public function settingRespo(){
        $data = responsable::where('id_respo', '=', session::get('loginId'))->first();
        return view('responsable.settingRespo',compact('data'));
    }
    public function motPassRespo(){
        $data = responsable::where('id_respo', '=', session::get('loginId'))->first();
        return view('responsable.updatePassRespo',compact('data'));
    }
    public function updateSettingRespo(Request $request){
        DB::table('responsables')->where('id_respo','=',session::get('loginId'))->update([
            'nom_respo' => $request->input('nom_respo'),
            'prenom_respo' => $request->input('prenom_respo'),
            'adresse_respo' => $request->input('adresse_respo'),
            'email_respo' => $request->input('email_respo'),
            'tele_respo' => $request->input('tele_respo'),
            'cin_respo' => $request->input('cin_respo')
        ]);
        return back()->with('succes', 'modifier les informations avec succes');
    }

    public function changerMotPasseRespo(Request $request)
    {
        request()->validate([
            'passeActuel' => 'required',
            'password' => 'required|min:9|max:50|confirmed',
        ]);
        $res = responsable::where('id_respo', '=', session::get('loginId'))->first();
        if ($request->input('passeActuel') == $res->password_respo) {
            DB::table('responsables')->where('id_respo', '=', session::get('loginId'))->update(['password_respo' => $request->input('password')]);
            return back()->with('success', 'Modifié le mot de passe avec succés');
        } else {
            return back()->with('fail', 'Le mot de passe actuel incorrect');
        }
    }
}
