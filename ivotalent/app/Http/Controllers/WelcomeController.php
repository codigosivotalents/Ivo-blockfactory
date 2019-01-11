<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Represent;
use App\Manager; 
use App\Gender;

use App\User;

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


//Controlador CARGADO  y del PRINCIPAL. Se debe REVISAR para traer Menos ( Cambiar la Arquitectura Inicial ).
class WelcomeController extends Controller
{
    public function welcome()
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
            $gender = Gender::all();
            $currentuser_gender = Gender::find($currentuser->gender_id ? $currentuser->gender_id:1);

            $paises = Country::all()->sortBy('name');    

            $provincias = Province::where('id_pais', $currentuser->country_id)->get();

            if($currentuser->country_id){
                $pais_codigo = Country::find($currentuser->country_id); 
             }else{
                 
                $pais_codigo = Country::find(1); ;
            }
            


            $ciudades = City::where('pais_codigo', $pais_codigo->code_country)->get();


            $nacionalidad = Nacionalidad::all()->sortBy('name');


            $currentuser_Idioma1 = Idioma::find($currentuser->idioma1_id ? $currentuser->idioma1_id:1);
            $currentuser_Idioma2 = Idioma::find($currentuser->idioma2_id ? $currentuser->idioma2_id:1);
            $currentuser_Idioma3 = Idioma::find($currentuser->idioma3_id ? $currentuser->idioma3_id:1);

            $idiomas = Idioma::all();

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


             if((!$currentuser->profile)||(!$currentuser->termino_accept)){
                $currentuser = null;
                $currentuser_represent = null;
                $currentuser_manager = null;
                return redirect('/verificar');

                }

            return view('welcome',compact('currentuser','currentuser_represent','currentuser_manager','gender','currentuser_gender','paises','provincias','ciudades','nacionalidad',
             'currentuser_Idioma1','currentuser_Idioma2','currentuser_Idioma3','idiomas','nacionalidad','currentuser_Talento_Categoria1','currentuser_Talento_Especialidad1','currentuser_Talento_Genero1',
             'currentuser_Talento_Categoria2','currentuser_Talento_Especialidad2','currentuser_Talento_Genero2','currentuser_Talento_Categoria3',
             'currentuser_Talento_Especialidad3','currentuser_Talento_Genero3','talento_categoria','talento_especialidad','talento_genero1','talento_genero2',
             'talento_genero3','talentos','pieles','ojos','contexturas','etnias','looks','cabellos','camisa','pantalon','zapatos'));

        }
        else{
            $currentuser = null;
            $currentuser_represent = null;
            $currentuser_manager = null;
            
            return view('welcome',compact('currentuser','currentuser_represent','currentuser_manager'));
        }        
    }



}
