<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\User;


class AcercademiController extends Controller
{

    public function acercademi()
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


             return view('acercademi',compact('currentuser'));


        }
        else{
            return redirect('/');
        }     
    }   

    
}
