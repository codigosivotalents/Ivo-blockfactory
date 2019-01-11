<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Represent;
use App\Manager; 

use App\User;

use App\Gender;
use App\Country;
use App\City;
use App\Province;
use App\Tonos;
use App\Color_Ojos;
use App\Contextura;
use App\Etnias;
use App\Look;
use App\Tipo_Pantalon;
use App\Tallas;
use App\Tatuajes;
use App\Tipo_Zapatos;
use App\Tipo_Camisa;
use App\Color_Cabello;
use App\Talentos;
use App\Camisa;
use App\Pantalon;
use App\Zapatos;
use App\Tipo_Altura;
use App\Tipo_Busto;
use App\Tipo_Cintura;
use App\Tipo_Cadera;
use App\Idioma;
use App\Talento_Categoria;
use App\Talento_Especialidad;
use App\Talento_Genero;
use App\Fotos;
use App\Audios;
use App\Videos;
use Carbon\Carbon;
use App\Nacionalidad;

//Controlador CARGADO. Se debe REVISAR para traer Menos.
class PerfilController extends Controller
{

    public function perfil()
    {
        if(Auth::user()){

            $id = Auth::user()->id;
            $currentuser = User::find($id);
            $currentuser_piel = Tonos::find($currentuser->tono_id ? $currentuser->tono_id:1);
            $currentuser_Ojos = Color_Ojos::find($currentuser->color_ojos_id ? $currentuser->color_ojos_id:1);
            $currentuser_Contextura = Contextura::find($currentuser->contextura_id ? $currentuser->contextura_id:1);
            $currentuser_Etnia = Etnias::find($currentuser->etnias_id ? $currentuser->etnias_id:1);
            $currentuser_Look = Look::find($currentuser->look_id ? $currentuser->look_id:1);
            $currentuser_Cabello = Color_Cabello::find($currentuser->color_cabello_id ? $currentuser->color_cabello_id:1);
            $currentuser_Tatuajes = ($currentuser->tatuaje_id ? $currentuser->tatuaje_id:'No');

            $currentuser_Zapatos = Zapatos::find($currentuser->zapatos ? $currentuser->zapatos:1);
            $currentuser_Tipo_Zapatos = Tipo_Zapatos::find($currentuser->tipo_zapatos_id ? $currentuser->tipo_zapatos_id:1);


            $currentuser_Pantalon = Pantalon::find($currentuser->pantalon ? $currentuser->pantalon:1);
            $currentuser_Tipo_Pantalon = Tipo_Pantalon::find($currentuser->tipo_pantalon_id ? $currentuser->tipo_pantalon_id:1);

            $currentuser_Camisa = Camisa::find($currentuser->camisa ? $currentuser->camisa:1);
            $currentuser_Tipo_Camisa = Tipo_Camisa::find($currentuser->tipo_camisa_id ? $currentuser->tipo_camisa_id:1);


            $currentuser_Tipo_Altura = Tipo_Altura::find($currentuser->tipo_altura_id ? $currentuser->tipo_camisa_id:1);
            $currentuser_Tipo_Busto = Tipo_Busto::find($currentuser->tipo_busto_id ? $currentuser->tipo_camisa_id:1);
            $currentuser_Tipo_Cintura = Tipo_Cintura::find($currentuser->tipo_cintura_id ? $currentuser->tipo_camisa_id:1);
            $currentuser_Tipo_Cadera = Tipo_Cadera::find($currentuser->tipo_cadera_id ? $currentuser->tipo_camisa_id:1);


            $currentuser_Talento1 = Talentos::find($currentuser->principalTalent ? $currentuser->principalTalent:1);
            $currentuser_Talento2 = Talentos::find($currentuser->secondaryTalent ? $currentuser->secondaryTalent:1);
            $currentuser_Talento3 = Talentos::find($currentuser->terciaryTalent ? $currentuser->terciaryTalent:1);

            $currentuser_Idioma1 = Idioma::find($currentuser->idioma1_id ? $currentuser->idioma1_id:1);
            $currentuser_Idioma2 = Idioma::find($currentuser->idioma2_id ? $currentuser->idioma2_id:1);
            $currentuser_Idioma3 = Idioma::find($currentuser->idioma3_id ? $currentuser->idioma3_id:1);


            $gender = Gender::all();
            $talentos = Talentos::all();
            $idiomas = Idioma::all();
            $pieles = Tonos::all();
            $ojos = Color_Ojos::all();
            $contexturas = Contextura::all();
            $etnias = Etnias::all();
            $looks = Look::all();
            $cabellos = Color_Cabello::all();

            $camisa = Camisa::all();
            $pantalon = Pantalon::all();
            $zapatos = Zapatos::all();


            
            $paises = Country::all()->sortBy('name');    
            
           
            $provincias = Province::where('id_pais', $currentuser->country_id)->get();

            if($currentuser->country_id){
                $pais_codigo = Country::find($currentuser->country_id); 
             }else{
                 
                $pais_codigo = Country::find(1); ;
            }
            


            $ciudades = City::where('pais_codigo', $pais_codigo->code_country)->get();


            $nacionalidad = Nacionalidad::all()->sortBy('name');



            $talento_categoria = Talento_Categoria::all();
            $talento_especialidad = Talento_Especialidad::all();

            $talento_genero1 = Talento_Genero::where('talento_id', $currentuser->principalTalent)->get(); 
            $talento_genero2 = Talento_Genero::where('talento_id', $currentuser->secondaryTalent)->get(); 
            $talento_genero3 = Talento_Genero::where('talento_id', $currentuser->terciaryTalent)->get(); 


            $currentuser_Talento_Categoria1 = Talento_Categoria::find($currentuser->principalCategoria ? $currentuser->principalCategoria:1);
            $currentuser_Talento_Especialidad1 = Talento_Especialidad::find($currentuser->principalEspecialidad ? $currentuser->principalEspecialidad:1);
            $currentuser_Talento_Genero1 = Talento_Genero::find($currentuser->principalGenero ? $currentuser->principalGenero:1);

            $currentuser_Talento_Categoria2 = Talento_Categoria::find($currentuser->secondaryCategoria ? $currentuser->secondaryCategoria:1);
            $currentuser_Talento_Especialidad2 = Talento_Especialidad::find($currentuser->secondaryEspecialidad ? $currentuser->secondaryEspecialidad:1);
            $currentuser_Talento_Genero2 = Talento_Genero::find($currentuser->secondaryGenero ? $currentuser->secondaryGenero:1);

            $currentuser_Talento_Categoria3 = Talento_Categoria::find($currentuser->terciaryCategoria ? $currentuser->terciaryCategoria:1);
            $currentuser_Talento_Especialidad3 = Talento_Especialidad::find($currentuser->terciaryEspecialidad ? $currentuser->terciaryEspecialidad:1);
            $currentuser_Talento_Genero3 = Talento_Genero::find($currentuser->terciaryGenero ? $currentuser->terciaryGenero:1);


            if($currentuser->wizzardToken && !empty($currentuser->wizzardToken) && !is_null($currentuser->wizzardToken)){
                $currentuser_age = $currentuser->age ? $currentuser->age." años" : "-----";
                $currentuser_gender = Gender::find($currentuser->gender_id ? $currentuser->gender_id:1);
				
				$currentuser_country = Country::find($currentuser->country_id ? $currentuser->country_id:0); 
                $currentuser_province = Province::find($currentuser->province_id ? $currentuser->province_id:0); 
                $currentuser_city = City::find($currentuser->city_id ? $currentuser->city_id:0);
				
                

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



       if((!$currentuser->profile)||(!$currentuser->termino_accept)){
                $currentuser = null;
                $currentuser_represent = null;
                $currentuser_manager = null;
                return redirect('/verificar');

                }


                
                
             return view('perfil',compact('currentuser','currentuser_age','currentuser_gender','currentuser_represent','currentuser_manager',
             'currentuser_country','currentuser_province','currentuser_city','currentEducation','currentExperience','currentuser_Cabello','currentuser_piel',
             'currentuser_Ojos','currentuser_Contextura','currentuser_Etnia','currentuser_Look','currentuser_Pantalon','currentuser_Tallas','currentuser_Tatuajes',
             'currentuser_Zapatos','currentuser_Talento1','currentuser_Talento2','currentuser_Talento3','currentuser_Zapatos','currentuser_Tipo_Zapatos','currentuser_Pantalon',
             'currentuser_Tipo_Pantalon','currentuser_Camisa','currentuser_Tipo_Camisa','currentuser_Tipo_Altura','currentuser_Tipo_Busto','currentuser_Tipo_Cintura'
             ,'currentuser_Tipo_Cadera','currentuser_Idioma1','currentuser_Idioma2','currentuser_Idioma3','talentos','idiomas','pieles','ojos','contexturas','etnias','looks',
             'cabellos','gender','camisa','pantalon','zapatos','currentuser_Talento_Categoria1','currentuser_Talento_Especialidad1','currentuser_Talento_Genero1',
             'currentuser_Talento_Categoria2','currentuser_Talento_Especialidad2','currentuser_Talento_Genero2','currentuser_Talento_Categoria3',
             'currentuser_Talento_Especialidad3','currentuser_Talento_Genero3','talento_categoria','talento_especialidad','talento_genero1','talento_genero2',
             'talento_genero3','paises','provincias','ciudades','nacionalidad'));


        }
        else{
            return redirect('/');
        }     
    }   
    }


        
    Public function fletch(Request $request){

        if(Auth::user()){
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $paiselegido = $request->get('paiselegido');

        $output = "";

       if ($select == "country_id" )
       {                   
          $talento_genero1 = Province::where('id_pais', $value)->get();
          $output = "<option value='0'>Provincia*</option>";
          foreach ($talento_genero1 as $key) {
              $output .= "<option value='".$key->id."'>".$key->name."</option>";
          }
          
       } 


       if ($select == "province_id" )
       {                   
          $pais_codigo = country::find($paiselegido); 

          $talento_genero1 = city::where('pais_codigo', $pais_codigo->code_country)->get();
          $output = "<option value='0'>Ciudad*</option>";
          foreach ($talento_genero1 as $key) {
              $output .= "<option value='".$key->id."'>".$key->name."</option>";
          }
          
       } 

       echo  $output;
    }
    else{
        return redirect('welcome');
    }   
    }

    
    Public function fetch(Request $request){
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        
    if ($select == "principalGenero"){ $idtalento = $request->get('idtalento1'); }
    if ($select == "secondaryGenero"){ $idtalento = $request->get('idtalento2'); }
    if ($select == "terciaryGenero"){ $idtalento = $request->get('idtalento3'); }

    $output = "";

       if ($select == "principalTalent" || $select == "secondaryTalent"  || $select == "terciaryTalent" )
       {    
         $output = "<option value='0'>Genero*</option>";               
          $talento_genero1 = Talento_Genero::where('talento_id', $value)->get();
          foreach ($talento_genero1 as $key) {
              $output .= "<option value='".$key->id."'>".$key->nombre."</option>";
          }
          
       } 


       if ($select == "principalGenero" || $select == "secondaryGenero"  || $select == "terciaryGenero" )
       {  $output = "<option value='0'>Categoria*</option>";                   
          $talento_genero1 = Talento_Categoria::where('talento_id', $idtalento)->get();
          foreach ($talento_genero1 as $key) {
              $output .= "<option value='".$key->id."'>".$key->nombre."</option>";
          }
          
       } 


       if ($select == "principalCategoria" || $select == "secondaryCategoria"  || $select == "terciaryCategoria" )
       {   $output = "<option value='0'>Especialidad*</option>";                  
          $talento_genero1 = Talento_Especialidad::where('categoria_id', $value)->get();
          foreach ($talento_genero1 as $key) {
              $output .= "<option value='".$key->id."'>".$key->nombre."</option>";
          }
          
       } 



       echo  $output;

    }


    

public function cambiaremail(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->email2 = $request->email2;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','El Nombre ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }


public function cambiarnombre(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->name = $request->nombre;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','El Nombre ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }



public function cambiarnombreartistico(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->artisticname = $request->artisticname;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','El Nombre Artistico ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }


public function cambiargenero(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
            $currentuser->gender_id = $request->gender_id;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','El Género ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }



public function cambiarpais(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->country_id = $request->country_id;
           $currentuser->province_id = $request->province_id;
           $currentuser->city_id = $request->city_id;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','El Pais ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }



public function cambiaridioma(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->idioma1_id = $request->idioma1_id;
           $currentuser->idioma2_id = $request->idioma2_id;
           $currentuser->idioma3_id = $request->idioma3_id;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','El Pais ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }


public function cambiarnacionalidad(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->nacionalidad = $request->nacionalidad_id;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','La Nacionalidad ha sido modificada exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }


public function cambiarredes(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->facebook = $request->facebook;
           $currentuser->instagram = $request->instagram;
           $currentuser->twitter = $request->twitter; 
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','Las Redes Sociales han sido modificadas exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }




public function cambiartalenta(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->principalTalent = $request->principalTalent;
           $currentuser->principalGenero = $request->principalGenero;
           $currentuser->principalCategoria = $request->principalCategoria;
           $currentuser->principalEspecialidad = $request->principalEspecialidad;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','El Talento ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }




public function cambiartalentb(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->secondaryTalent = $request->secondaryTalent;
           $currentuser->secondaryGenero = $request->secondaryGenero;
           $currentuser->secondaryCategoria = $request->secondaryCategoria;
           $currentuser->secondaryEspecialidad = $request->secondaryEspecialidad;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','El Talento ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }




public function cambiartalentc(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->terciaryTalent = $request->terciaryTalent;
           $currentuser->terciaryGenero = $request->terciaryGenero;
           $currentuser->terciaryCategoria = $request->terciaryCategoria;
           $currentuser->terciaryEspecialidad = $request->terciaryEspecialidad;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','El Talento ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }



public function cambiarmanager(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);

           $manager = Manager::find($currentuser->manager_id);


           if($manager){
                    
                    $manager->manager_name = $request->manager_name;
                    $manager->manager_lastname = $request->manager_lastname;
                    $manager->manager_email = $request->manager_email;
                    $manager->manager_phone = $request->manager_phone;
                    $manager->manager_enterprise = $request->manager_enterprise;
        
                    $manager->save();
                }
                else{
                    $manager = new Manager(); 
                    $manager->manager_name = $request->manager_name;
                    $manager->manager_lastname = $request->manager_lastname;
                    $manager->manager_email = $request->manager_email;
                    $manager->manager_phone = $request->manager_phone;
                    $manager->manager_enterprise = $request->manager_enterprise;

                    $manager->save();

                    $currentuser->manager_id = $manager->id;
                    $currentuser->save();
                }



           

            return redirect('/#!/perfil')
            ->with('success','El Manager ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }




public function eliminarmanager(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           
           $manager = Manager::find($currentuser->manager_id)->delete();
           $currentuser->manager_id = null;
           
            return redirect('/#!/perfil')
            ->with('success','El Manager ha sido eliminado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }




public function cambiaracercademi(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->acercademi = $request->acercademi;
           $currentuser->save();

            return redirect('/#!/acercademi')
            ->with('success','El campo ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }




public function cambiarfenotipo(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
           $currentuser = User::find($id);
            $currentuser->tono_id = $request->tono_id;
            $currentuser->color_cabello_id = $request->color_cabello_id;

            $currentuser->color_ojos_id = $request->color_ojos_id;
            $currentuser->contextura_id = $request->contextura_id;

            $currentuser->etnias_id = $request->etnias_id;
            
            $currentuser->look_id = $request->look_id;
            $currentuser->tatuaje_id = $request->tatuaje_id;
           $currentuser->save();

            return redirect('/#!/fenotipo')
            ->with('success','El campo ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }





public function cambiartallas(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
           $currentuser = User::find($id);
            $currentuser->camisa = $request->camisa;
            $currentuser->tipo_camisa_id = $request->tipo_camisa_id;

            $currentuser->cintura = $request->cintura;
            $currentuser->tipo_cintura_id = $request->tipo_cintura_id;

            $currentuser->pantalon = $request->pantalon;
            $currentuser->tipo_pantalon_id = $request->tipo_pantalon_id;
            $currentuser->zapatos = $request->zapatos;
            $currentuser->tipo_zapatos_id = $request->tipo_zapatos_id;
           $currentuser->save();

            return redirect('/#!/fenotipo')
            ->with('success','El campo ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }





public function cambiarmedidas(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
           $currentuser = User::find($id);
            $currentuser->altura = $request->altura;
            $currentuser->tipo_altura_id = $request->tipo_altura_id;

            $currentuser->busto = $request->busto;
            $currentuser->tipo_busto_id = $request->tipo_busto_id;

            $currentuser->cintura = $request->cintura;
            $currentuser->tipo_cintura_id = $request->tipo_cintura_id;

            $currentuser->cadera = $request->cadera;
            $currentuser->tipo_cadera_id = $request->tipo_cadera_id;
           $currentuser->save();

            return redirect('/#!/fenotipo')
            ->with('success','El campo ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }




public function cambiarperfil(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->profile = $request->profiler;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','El Perfil ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }




public function cambiarnac(Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->day = $request->dia_nacimiento;
           $currentuser->month = $request->mes_nacimiento;
           $currentuser->year = $request->anio_nacimiento;
           $currentuser->save();

            return redirect('/#!/perfil')
            ->with('success','LA fecha de Nacimiento ha sido modificada exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }



public function eliminarrepresentante(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           $manager = Represent::find($currentuser->represent_id)->delete();
           $currentuser->represent_id = null;


            return redirect('/#!/perfil')
            ->with('success','El Representante ha sido eliminado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }



public function cambiarrepresentante(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);

            $manager = Represent::find($currentuser->represent_id);

           if($manager){

                    $manager->represent_name = $request->represent_name;
                    $manager->represent_lastname = $request->represent_lastname;
                    $manager->represent_email = $request->represent_email;
                    $manager->represent_phone = $request->represent_phone;
                    $manager->parentesco = $request->parentesco;
        
                    $manager->save();
                }
                else{
                    $manager = new Represent(); 
                    $manager->represent_name = $request->represent_name;
                    $manager->represent_lastname = $request->represent_lastname;
                    $manager->represent_email = $request->represent_email;
                    $manager->represent_phone = $request->represent_phone;
                    $manager->parentesco = $request->parentesco;

                    $manager->save();

                    $currentuser->represent_id = $manager->id;
                    $currentuser->save();
                }



           

            return redirect('/#!/perfil')
            ->with('success','El Representante ha sido modificado exitosamente.');
             }
                else{
                    return redirect('/');
       }  
              
    }


public function aceptarterminos(Request $request)
    {

       if(Auth::user()){

           $id = Auth::user()->id;
           $currentuser = User::find($id);
           $currentuser->termino_accept = "1";
           $currentuser->save();

            return redirect('/#!/home');
             }
                else{
                    return redirect('/');
       }  
              
    }


public function subirfotoperfil (Request $request)
    {

       if(Auth::user()){

          $id = Auth::user()->id;
      
  
     

if ($request->hasFile('imageperfil')) {
 
        foreach($request->file('imageperfil') as $file){


        $imageName = time().'.'.$file->getClientOriginalExtension();
        $complete = '/files/profile/'.$id.'/'.$request->galeria.$imageName;
        $image = $request->file('imageperfil');
        $Supercomplete = 'https://s3.us-east-2.amazonaws.com/ivotalents/files/profile/'.$id.'/'.$request->galeria.$imageName;

        $t = Storage::disk('s3')->put($complete, file_get_contents($file), 'public');
        $complete = Storage::disk('s3')->url($complete);

                    $currentuser = User::find($id);
                    $currentuser->avatar =  $Supercomplete ;
                    $currentuser->save();
                }
       }
                
            return  redirect('/#!/home')
            ->with('success','La Imagen ha sido subida exitosamente.');

           
             }
                else{
                    return redirect('/');
                }  
              
    }








}
