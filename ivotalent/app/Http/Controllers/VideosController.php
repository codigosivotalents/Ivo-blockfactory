<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Videos;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class VideosController extends Controller
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

    public function videos()
    {
        if(Auth::user()){

           
            $id = Auth::user()->id;
            $currentuser = User::find($id);
            $videos = DB::table('videos')
            ->where('usuario_id', '=', $id)
            ->get();

         if((!$currentuser->profile)||(!$currentuser->termino_accept)){
                $currentuser = null;
                $currentuser_represent = null;
                $currentuser_manager = null;
                return redirect('/verificar');

                }

                
                
            return view('videos',compact('videos','currentuser'));

                }
                else{
                    return view('/');
                }   
      
    }





    public function subirvideo(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;       
              
                $videoName = '/files/videos/'.$id.'/'.time().'.'.$request->video->getClientOriginalExtension();
                $video = $request->file('video');
                $t = Storage::disk('s3')->put($videoName, file_get_contents($video), 'public');
                $videoName = Storage::disk('s3')->url($videoName);


       
                    $videos = new Videos();

                    $videos->nombre = $request->nombre;
                    $videos->anio = $request->aniovideo;
                    $videos->mes = $request->mesvideo;
                    $videos->nombre_fisico = $videoName;
                    $videos->usuario_id = Auth::user()->id;
                    $videos->save();
                    
                    

            return redirect('/#!/videos')
            ->with('success','El Video ha sido subido exitosamente.');
             }
                else{
                    return redirect('/');
                }  
              
    }


    public function eliminarvideo(Request $request, $id_audio)
    {

       if(Auth::user()){

           $manager = Videos::where('id_audio', $id_audio)->delete();
           


            return redirect('/#!/videos')
            ->with('success','El Video ha sido eliminado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }


}
