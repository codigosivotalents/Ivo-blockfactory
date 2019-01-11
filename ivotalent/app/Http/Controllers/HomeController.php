<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Represent;
use App\Manager; 

use App\User;
use App\Talentos;
use App\Country;


class HomeController extends Controller
{

    public function home()
    {
        if(Auth::user()){

            $id = Auth::user()->id;
            $currentuser = User::find($id);

            $currentuser_Talento1 = Talentos::find($currentuser->principalTalent ? $currentuser->principalTalent:1);
            $currentuser_Talento2 = Talentos::find($currentuser->secondaryTalent ? $currentuser->secondaryTalent:1);
            $currentuser_Talento3 = Talentos::find($currentuser->terciaryTalent ? $currentuser->terciaryTalent:1);
            $currentuser_country = Country::find($currentuser->country_id ? $currentuser->country_id:0); 

       if((!$currentuser->profile)||(!$currentuser->termino_accept)){
                $currentuser = null;
                $currentuser_represent = null;
                $currentuser_manager = null;
                return redirect('/verificar');

                }

                

                
             return view('home',compact('currentuser','currentuser_Talento1','currentuser_Talento2','currentuser_Talento3','currentuser_country'));


        }
        else{
            return redirect('/');
        }     
    }   
  
}
