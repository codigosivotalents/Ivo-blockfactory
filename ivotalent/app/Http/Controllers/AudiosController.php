<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Audios;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AudiosController extends Controller
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

    public function audios()
    {
        if(Auth::user()){

        $id = Auth::user()->id;
        $currentuser = User::find($id);
        $audios = DB::table('audios')
            ->where('usuario_id', '=', $id)
            ->get();

            
           if((!$currentuser->profile)||(!$currentuser->termino_accept)){
                $currentuser = null;
                $currentuser_represent = null;
                $currentuser_manager = null;
                return redirect('/verificar');

                }

                
        return view('audios',compact('audios','currentuser'));
    
        
            }
            else{
                return redirect('/');
            }   
            
    }



    public function subiraudio(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
       
                $audioName = '/files/audios/'.$id.'/'.time().'.'.$request->audios->getClientOriginalExtension();
                $audio = $request->file('audios');
                $t = Storage::disk('s3')->put($audioName, file_get_contents($audio), 'public');
                $audioName = Storage::disk('s3')->url($audioName);


       
                    $audios = new Audios();

                    $audios->nombre = $request->nombreaudio;
                    $audios->anio = $request->anioaudio;
                    $audios->mes = $request->mesaudio;
                    $audios->nombre_fisico = $audioName;
                    $audios->usuario_id = Auth::user()->id;
                    $audios->save();
                    

            return redirect('/#!/audios')
            ->with('success','El Audio ha sido subido exitosamente.');
             }
                else{
                    return redirect('/');
                }  
              
    }


    public function eliminaraudio(Request $request, $id_audio)
    {

       if(Auth::user()){

           $manager = Audios::where('id_audio', $id_audio)->delete();
           


            return redirect('/#!/audios')
            ->with('success','El Audio ha sido eliminado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }




}
