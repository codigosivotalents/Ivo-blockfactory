<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Fotos;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class FotosController extends Controller
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

    public 
    function fotos()
    {
        if(Auth::user()){

            $id = Auth::user()->id;
            $currentuser = User::find($id);
            $fotos = DB::table('fotos')
            ->where('usuario_id', '=', $id)
            ->get();
         
            $galerias = DB::table('fotos')
                ->groupBy('galeria')
                ->groupBy('usuario_id')
                ->where('usuario_id', '=', $id)
                ->select('galeria','usuario_id')
                ->get();

                
       if((!$currentuser->profile)||(!$currentuser->termino_accept)){
                $currentuser = null;
                $currentuser_represent = null;
                $currentuser_manager = null;
                return redirect('/verificar');

                }

                

            return view('fotos',compact('fotos','galerias','currentuser'));
        
                }
                else{
                    return redirect('/');
                }   
    }






    public function subirfoto(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
      
  
     

if ($request->hasFile('image')) {
 
        foreach($request->file('image') as $file){


       $imageName = time().'.'.$file->getClientOriginalExtension();
        $complete = '/files/images/'.$id.'/'.$request->galeria.'/'.$imageName;
        $image = $request->file('image');
        $t = Storage::disk('s3')->put($complete, file_get_contents($file), 'public');
        $complete = Storage::disk('s3')->url($complete);

                    $fotos = new Fotos();
                    $fotos->galeria = $request->foto_galeria;
                    $fotos->anio = $request->year;
                    $fotos->mes = $request->month;
                    $fotos->nombre_fisico =  $imageName;
                    $fotos->usuario_id = Auth::user()->id;
                    $fotos->save();
                }
       }
                
            return  redirect('/#!/fotos')
            ->with('success','La Imagen ha sido subida exitosamente.');

           
             }
                else{
                    return redirect('/');
                }  
              
    }


    public function eliminarfoto(Request $request, $id_audio)
    {

       if(Auth::user()){

           $manager = Fotos::where('galeria', $id_audio)->delete();
           


            return redirect('/#!/fotos')
            ->with('success','La Galeria ha sido eliminado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }





}
