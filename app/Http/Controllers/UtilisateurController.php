<?php

namespace App\Http\Controllers;
use App\Models\Cours;
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
    public function edit(Request $request)
    {
        return view('auth.edit',['user'=>User::where('id','=',$request->id)->get()]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
        ]);
        User::where('id','=',$request->id)->update([
            'name'=>$request->name,
            'role'=>$request->role,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('index_utilisateur')->with('success', 'Utilisateur modifié avec succès');
    }
}
