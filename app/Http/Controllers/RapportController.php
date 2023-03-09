<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Http\Request;

class RapportController extends Controller
{
    public function index()
    {
        $sexe["homme"]=Profil::where('sexe','=','Homme')->get()->count();
        $sexe["femme"]=Profil::where('sexe','=','Femme')->get()->count();
        $sexe["autres"]=Profil::where('sexe','=','Autres')->get()->count();

       $tranche["tranche10_14"]=Profil::where('tranche_age','=','10-14 ans')->get()->count();
       $tranche["tranche15_19"] =Profil::where('tranche_age','=','15-19 ans')->get()->count();
       $tranche["tranche20_24"] =Profil::where('tranche_age','=','20-24 ans')->get()->count();
       $tranche["tranche25_49"] =Profil::where('tranche_age','=','25-49 ans')->get()->count();
       $tranche["tranche50"]=Profil::where('tranche_age','=','50 ans et plus')->get()->count();
      
        return view('rapport.index',['sexe'=>$sexe,'tranche'=>$tranche]);
    }
}
