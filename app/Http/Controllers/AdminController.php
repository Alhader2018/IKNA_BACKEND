<?php

namespace App\Http\Controllers;
use App\Models\IknaMessage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexMessage(Request $request)
    {

        $messages=IknaMessage::where('id_expeditaire', '!=' , 'medecin')->get()->unique('id_expeditaire');
        $message=IknaMessage::where('id_expeditaire', $request->id)->orWhere('id_destinateur',$request->id)->get();
        return view('/message', ['messages' => $messages,'message' => $message]);

    }
}
