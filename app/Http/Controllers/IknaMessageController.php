<?php

namespace App\Http\Controllers;
use App\Http\Resources\IknaMessageResssource;
use Illuminate\Http\Request;
use App\Models\IknaMessage;
use App\Http\Requests\StoreIknaMessageRequest;
use App\Http\Requests\UpdateIknaMessageRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class IknaMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chat(Request $request){
        $message=Iknamessage::where("id_expeditaire","=",$request->id)
        ->orWhere("id_destinateur","=",$request->id)
        ->orderBy('id', 'asc')
        ->get();
    
        $content="";
    
            foreach($message as $m){
                if($m->id_expeditaire=="medecin"  && $m->type_message=="text")
                {
                    $content.="
                    <div class='incoming_msg'>
                      <div class='incoming_msg_img'> <img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'> </div>
                      <div class='received_msg'>
                        <div class='received_withd_msg'>
                          <p>$m->contenu</p>
                          <span class='time_date'> $m->created_at</span>
                        
                        </div>
                      </div>
                    </div>";
                }
                if($m->expeditaire!="medecin" && $m->type_message=="audio")
                {
                    $content.=" <div class='outgoing_msg'>
                    <div class='sent_msg'>
                    <p>$m->contenu</p>
                    <span class='time_date'> $m->created_at</span>
                
                    <audio controls>
                    <source src='https://api.mconsulting.ml/laravel/public/uploads/images/".$m->logo."' type='audio/wav'>
                    Votre navigateur ne supporte pas l'audio.
                    </audio>
                    </div>
                    </div>";
                }
                
                if($m->id_expeditaire=="medecin" && $m->type_message=="audio")
                {
                    $content.="
                    <div class='incoming_msg'>
                      <div class='incoming_msg_img'> <img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'> </div>
                      <div class='received_msg'>
                        <div class='received_withd_msg'>
                          <p>$m->contenu</p>
                          <span class='time_date'> $m->created_at</span>
                          <audio controls>
                          <source src='https://api.mconsulting.ml/laravel/public/uploads/images/".$m->logo."' type='audio/wav'>
                          Votre navigateur ne supporte pas l'audio.
                          </audio>
                        </div>
                      </div>
                    </div>";
                }
                
                if($m->id_expeditaire=="medecin" && $m->type_message=="image")
                {
                    $content.="
                    <div class='incoming_msg'>
                      <div class='incoming_msg_img'> <img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'> </div>
                      <div class='received_msg'>
                        <div class='received_withd_msg'>
                          <p>$m->contenu</p>
                          <span class='time_date'> $m->created_at</span>
                          <img src='https://api.mconsulting.ml/laravel/public/uploads/images/".$m->logo."'>
                        </div>
                      </div>
                    </div>";
                }
                
                if($m->expeditaire!="medecin" && $m->type_message=="image")
                {
                   $content.=" <div class='outgoing_msg'>
                   <div class='sent_msg'>
                   <p>$m->contenu</p>
                   <span class='time_date'> $m->created_at</span>
                   <img src='https://api.mconsulting.ml/laravel/public/uploads/images/".$m->logo."'>
                 </div>
                 </div>";
                }
            }

            
       
       return $content;
    }
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
                $path = $request->file('avatar')->store('images', 'uploads');
                $url=explode("/",$path);
            }
          
            
            $message=new IknaMessage();
            $message->type_message=$request->type_message;
            $message->contenu= $request->contenu;
            if(isset($url)){$message->logo= $url[1];} 
            $message-> id_destinateur=$request->id_destinateur;
            $message-> id_expeditaire= $request->id_expeditaire;
            $message->pseudo= $request->pseudo;
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
        $profil=IknaMessage::select('pseudo')->distinct()->get();
        return view("messages.index",["profil"=>$profil]);
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
    public function user_ressource(){
        $messages = IknaMessage::all();
        $participants = [];
    
        foreach ($messages as $message) {
            if ($message->id_expeditaire !== "medecin") {
                $participants[] = $message->id_expeditaire;
            }
            if ($message->id_destinateur !== "medecin") {
                $participants[] = $message->id_destinateur;
            }
        }
    
        $participants = array_unique($participants);
        
        // Convertir le tableau $participants en un tableau d'objets avec une clé `id`
        $participants = array_map(function($participant) {
            return ['id' => $participant];
        }, $participants);
    
        return response()->json($participants);
    }
    
}
