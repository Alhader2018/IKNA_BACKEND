<?php

namespace App\Http\Controllers;
use App\Http\Resources\IknaMessageResssource;
use Illuminate\Http\Request;
use App\Models\IknaMessage;
use App\Http\Requests\StoreIknaMessageRequest;
use App\Http\Requests\UpdateIknaMessageRequest;
use Illuminate\Support\Facades\Validator;
class IknaMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($request->id))
        {
          
            $message=IknaMessage::where('id_expeditaire', $request->id)->orWhere('id_destinateur',$request->id)->get();
            return IknaMessageResssource::collection($message);
        }
        else
        {
            return IknaMessageResssource::collection(IknaMessage::all());
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIknaMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        header('Access-Control-Allow-Origin', '*');
        $input = $request->all();

       /* $validation = Validator::make($input, [
            'avatar' => 'mimes:m4v,avi,flv,mp4,mov,mp3,jpg,png,aac,gif,jpeg',
            'avatar' => 'max:10240',
            'type_message'=>'required'
        ]);
        if($validation->fails()){
            return response()->json([
                'erreur' => $validation->messages()
            ]);

        } else{
        */
            if($request->file('avatar')!=null){
                $path = $request->file('avatar')->store('images');
                $path=explode("/",$path);
            }
          
            
            $message=new IknaMessage();
            $message->type_message=$request->type_message;
            $message->contenu= $request->contenu;
            if(isset($path)){$message->logo= $path[1];} 
            $message-> id_destinateur=$request->id_destinateur;
            $message-> id_expeditaire= $request->id_expeditaire;
            $message->save();
           
            return new IknaMessageResssource($message);
               
        
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IknaMessage  $iknaMessage
     * @return \Illuminate\Http\Response
     */
    public function show(IknaMessage $iknaMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IknaMessage  $iknaMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(IknaMessage $iknaMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIknaMessageRequest  $request
     * @param  \App\Models\IknaMessage  $iknaMessage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIknaMessageRequest $request, IknaMessage $iknaMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IknaMessage  $iknaMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(IknaMessage $iknaMessage)
    {
        //
    }
}
