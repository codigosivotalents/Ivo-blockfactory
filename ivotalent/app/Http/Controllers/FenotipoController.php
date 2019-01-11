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
class FenotipoController extends Controller
{

    public function fenotipo()
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
                $currentuser_country = Country::find($currentuser->country_id ? $currentuser->country_id:1); 
                $currentuser_province = Province::find($currentuser->province_id ? $currentuser->province_id:1); 
                $currentuser_city = City::find($currentuser->city_id ? $currentuser->city_id:1); 

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

                
             return view('fenotipo',compact('currentuser','currentuser_age','currentuser_gender','currentuser_represent','currentuser_manager',
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


    
    
}
