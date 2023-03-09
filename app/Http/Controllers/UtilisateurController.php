<?php

namespace App\Http\Controllers;
use App\Models\Cours;
use App\Models\Groupe;
use App\Models\ConseilPratique;
use App\Models\Suggestion;
use App\Models\User;
use App\Models\IknaMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.utilisateur',['user'=>User::all()]);
    }
    public function create()
    {
       
        return view('auth.create',['groupe'=>Groupe::all()]);
    }
    public function edit(Request $request)
    {
        $groupe=Groupe::all();
        return view('auth.edit',['user'=>User::where('id','=',$request->id)->get(),'groupe'=>$groupe]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:8',
        ]);
        User::where('id','=',$request->id)->update([
            'name'=>$request->name,
            'role'=>$request->role,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('index_utilisateur')->with('success', 'Utilisateur modifié avec succès');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);
        User::create([
            'email'=>$request->email,
            'name'=>$request->name,
            'role'=>$request->role,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('index_utilisateur')->with('success', 'Utilisateur modifié avec succès');
    }
}
