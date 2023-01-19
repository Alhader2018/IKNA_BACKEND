<?php

namespace App\Http\Controllers;
use App\Models\Cours;
use App\Models\ConseilPratique;
use App\Models\Suggestion;
use App\Models\User;
use App\Models\Profil;
use App\Models\IknaMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stat=[];
        $stat['cours']=Cours::all()->count();
        $stat['message']=IknaMessage::all()->count();
       // $stat['conseil']=ConseilPratique::all()->count();
        $stat['user']=User::all()->count();
        $stat['profil']=Profil::all()->count();
        return view('home',['stat'=>$stat]);
    }
}
