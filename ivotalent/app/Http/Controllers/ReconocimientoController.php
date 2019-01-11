<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Reconocimientos;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ReconocimientoController extends Controller
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

    public function reconocimiento()
    {
        if(Auth::user()){
            $id = Auth::user()->id;
            $currentuser = User::find($id);
            $currentReconocmientos = Reconocimientos::where('IdUser', $id )
                                            ->orderBy('Hasta', 'desc')
                                            ->get();


       if((!$currentuser->profile)||(!$currentuser->termino_accept)){
                $currentuser = null;
                $currentuser_represent = null;
                $currentuser_manager = null;
                return redirect('/verificar');

                }


                
                
            return view('reconocimiento',compact('currentReconocmientos','currentuser'));
        
                }
                else{
                    return redirect('/');
                }   

        
    }


    public function subirreconocimiento(Request $request)
    {
        $id = Auth::user()->id;
             $currentuser = User::find($id);
         $Supercomplete = "";
        if ($request->hasFile('imagereconocimiento')) {
 
        foreach($request->file('imagereconocimiento') as $file){


        $imageName = time().'.'.$file->getClientOriginalExtension();
        $complete = '/files/reconocimientos/'.$id.'/'.$request->galeria.$imageName;
        $image = $request->file('imagereconocimiento');
        $Supercomplete = 'https://s3.us-east-2.amazonaws.com/ivotalents/files/reconocimientos/'.$id.'/'.$request->galeria.$imageName;

        $t = Storage::disk('s3')->put($complete, file_get_contents($file), 'public');
        $complete = Storage::disk('s3')->url($complete);

                    $currentuser = User::find($id);
                    $currentuser->save();
                }
       }


        $reconocimientos = new Reconocimientos();
        $reconocimientos->Titulo = $request->Titulo_Reconocimiento;
        $reconocimientos->Rol = $request->Rol_Reconocimiento;
        $reconocimientos->Empresa = $request->Empresa_Reconocimiento;
        $reconocimientos->Locacion = $request->Locacion_Reconocimiento;
        $reconocimientos->Desde = $request->DesdeDia_Reconocimiento."/".$request->DesdeMes_Reconocimiento;
        $reconocimientos->Hasta = $request->HastaDia_Reconocimiento."/".$request->HastaMes_Reconocimiento;
        $reconocimientos->Texto = $request->Texto_Reconocimiento;
        $reconocimientos->Imagen = $Supercomplete;
        $reconocimientos->IdUser = Auth::user()->id;
        
        $reconocimientos->save();

        return redirect('/#!/reconocimiento')
            ->with('success','La informacion ha sido subida exitosamente.');
    }





  public function eliminarreconocimiento(Request $request,$id_rec)
    {
        if(Auth::user()){

            $id = Auth::user()->id;
            $currentReconocmientos = Reconocimientos::where('id', $id_rec )
                                            ->delete();

            return redirect('/#!/reconocimiento')
            ->with('success','La informacion ha sido eliminada exitosamente.');
        
                }
                else{
                    return redirect('/');
                }   

        
    }




}
