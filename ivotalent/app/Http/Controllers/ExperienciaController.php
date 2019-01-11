<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Experiencias;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ExperienciaController extends Controller
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

    public function experiencia()
    {
        
        if(Auth::user()){

            $id = Auth::user()->id;
             $currentuser = User::find($id);

             
       if((!$currentuser->profile)||(!$currentuser->termino_accept)){
                $currentuser = null;
                $currentuser_represent = null;
                $currentuser_manager = null;
                return redirect('/verificar');

                }

         


            $currentExperiencias = Experiencias::where('IdUser', $id )
                                            ->orderBy('Hasta', 'desc')
                                            ->get();

            return view('experiencia',compact('currentExperiencias','currentuser'));
        
                }
                else{
                    return redirect('/');
                }   
                 
    }



    public function subirexperiencia(Request $request)
    {
        $id = Auth::user()->id;
             $currentuser = User::find($id);
         $Supercomplete = "";
         if ($request->hasFile('imagenexperiencia')) {
 
        foreach($request->file('imagenexperiencia') as $file){


        $imageName = time().'.'.$file->getClientOriginalExtension();
        $complete = '/files/experiences/'.$id.'/'.$request->galeria.$imageName;
        $image = $request->file('imagenexperiencia');
        $Supercomplete = 'https://s3.us-east-2.amazonaws.com/ivotalents/files/experiences/'.$id.'/'.$request->galeria.$imageName;

        $t = Storage::disk('s3')->put($complete, file_get_contents($file), 'public');
        $complete = Storage::disk('s3')->url($complete);

                    $currentuser = User::find($id);
                    $currentuser->save();
                }
       }


        $Experiencias = new Experiencias();
        $Experiencias->Titulo = $request->Titulo_Experiencia;
        $Experiencias->Empresa = $request->Empresa_Experiencia;
        $Experiencias->Locacion = $request->Locacion_Experiencia;
        $Experiencias->Desde = $request->DesdeDia_Experiencia."/".$request->DesdeMes_Experiencia;
        $Experiencias->Hasta = $request->HastaDia_Experiencia."/".$request->HastaMes_Experiencia;
        $Experiencias->Texto = $request->Texto_Experiencia;
        $Experiencias->Imagen = $Supercomplete;
        $Experiencias->IdUser = Auth::user()->id;
        
        $Experiencias->save();

        return redirect('/#!/experiencia')
            ->with('success','La informacion ha sido subida exitosamente.');
    }





  public function eliminarexperiencia(Request $request,$id_rec)
    {
        if(Auth::user()){

            $id = Auth::user()->id;
            $currentReconocmientos = Experiencias::where('id', $id_rec )
                                            ->delete();

            return redirect('/#!/experiencia')
            ->with('success','La informacion ha sido eliminada exitosamente.');
        
                }
                else{
                    return redirect('/');
                }   

        
    }


}
