<?php

namespace App\Http\Controllers;
use App\Models\Cours;
use App\Models\ConseilPratique;
use App\Models\Suggestion;
use App\Models\User;
use App\Models\Permission;
use App\Models\Profil;
use App\Models\IknaMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $id = Auth::id();
        $user=User::find($id);
        $permission=Permission::where('groupe','=', $user->role)->get();
        $permissions=[];
       foreach ($permission as $p) {
         if($p->permission=='true'){
            $permissions[$p->pages]=$p->permission;
         }
       }

        return view('home',["permissions"=>$permissions]);
    }
}
