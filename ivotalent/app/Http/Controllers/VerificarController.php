<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Audios;
use App\Terminos;
use App\Manager; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class VerificarController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function verificar()
    {
        
        if(Auth::user()){
          $id = Auth::user()->id;
           $currentuser = User::find($id);

            if($currentuser->represent_id){
                $currentuser_represent = Represent::find($currentuser->represent_id);
            }
            else{
                $currentuser_represent = null;
            }

 if($currentuser->manager_id){
                $currentuser_manager = Manager::find($currentuser->manager_id);
            }
            else{
                $currentuser_manager = null;   
                
         }
        $id = Auth::user()->id;
        $currentuser = User::find($id);

        $currentuserTerminos = Terminos::where('perfil_id', $currentuser->profile)->get();

        return view('verificar',compact('currentuser','currentuser_manager','currentuser_represent','currentuserTerminos'));
    
        
            }
            else{
                return redirect('/');
            }   
            
    }


}
