<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Educacion;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class EducacionController extends Controller
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

    public function educacion()
    {

        
        if(Auth::user()){

            
            $id = Auth::user()->id;
            $currentuser = User::find($id);
            $currentEducacion = Educacion::where('IdUser', $id )
                                            ->orderBy('Hasta', 'desc')
                                            ->get();



       if((!$currentuser->profile)||(!$currentuser->termino_accept)){
                $currentuser = null;
                $currentuser_represent = null;
                $currentuser_manager = null;
                return redirect('/verificar');

                }

                
            return view('educacion',compact('currentEducacion','currentuser'));        
                }
                else{
                    return redirect('/');
                }   
                
        
    }

  public function subireducacion(Request $request)
    {
        $id = Auth::user()->id;
             $currentuser = User::find($id);
        $Supercomplete = "";
        if ($request->hasFile('imageneducacion')) {
 
        foreach($request->file('imageneducacion') as $file){


        $imageName = time().'.'.$file->getClientOriginalExtension();
        $complete = '/files/education/'.$id.'/'.$request->galeria.$imageName;
        $image = $request->file('imageneducacion');
        $Supercomplete = 'https://s3.us-east-2.amazonaws.com/ivotalents/files/education/'.$id.'/'.$request->galeria.$imageName;

        $t = Storage::disk('s3')->put($complete, file_get_contents($file), 'public');
        $complete = Storage::disk('s3')->url($complete);

                    $currentuser = User::find($id);
                    $currentuser->save();
                }
       }

        $Educacions = new Educacion();
        $Educacions->Titulo = $request->Titulo_Educacion;
        $Educacions->Disciplina = $request->Empresa_Educacion;
        $Educacions->Institucion = $request->Locacion_Educacion;
        $Educacions->Desde = $request->DesdeDia_Educacion."/".$request->DesdeMes_Educacion;
        $Educacions->Hasta = $request->HastaDia_Educacion."/".$request->HastaMes_Educacion;
        $Educacions->Texto = $request->Texto_Educacion;
        $Educacions->Imagen = $Supercomplete;
        $Educacions->IdUser = Auth::user()->id;
        
        $Educacions->save();

        return redirect('/#!/educacion')
            ->with('success','La informacion ha sido subida exitosamente.');
    }





  public function eliminareducacion(Request $request,$id_rec)
    {
        if(Auth::user()){

            $id = Auth::user()->id;
            $currentReconocmientos = Educacion::where('id', $id_rec )
                                            ->delete();

            return redirect('/#!/educacion')
            ->with('success','La informacion ha sido eliminada exitosamente.');
        
                }
                else{
                    return redirect('/');
                }   

        
    }


    
}
