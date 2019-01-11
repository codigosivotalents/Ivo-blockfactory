<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', 'WelcomeController@welcome')->name('welcome');

Route::get('/welcome', 'WelcomeController@welcome')->name('welcome');

Route::get('logout', function (){
return redirect('welcome')->with(Auth::logout());
});


Route::get('/logout', 'WelcomeController@welcome')->name('welcome');

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');

Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/perfil', 'PerfilController@perfil')->name('perfil');

    Route::get('/audios', 'AudiosController@audios')->name('audios');

    Route::get('/videos', 'VideosController@videos')->name('videos');

    Route::get('/fotos', 'FotosController@fotos')->name('fotos');

    Route::get('/reconocimiento', 'ReconocimientoController@reconocimiento')->name('reconocimiento');

    Route::get('/educacion', 'EducacionController@educacion')->name('educacion');

    Route::get('/experiencia', 'ExperienciaController@experiencia')->name('experiencia');


    Route::post('/perfil/fletch', 'PerfilController@fletch')->name('fletch');

    Route::post('/profile/fetch','PerfilController@fetch')->name('fetch');


    Route::get('/home', 'HomeController@home')->name('home');

    Route::get('/fenotipo', 'FenotipoController@fenotipo')->name('fenotipo');

    Route::get('/acercademi', 'AcercademiController@acercademi')->name('acercademi');

    Route::get('/verificar', 'VerificarController@verificar')->name('verificar');


    Route::post('/perfil/cambiarnombre','PerfilController@cambiarnombre')->name('cambiarnombre');

    Route::post('/perfil/cambiaremail','PerfilController@cambiaremail')->name('cambiaremail');

    Route::post('/perfil/cambiarnombreartistico','PerfilController@cambiarnombreartistico')->name('cambiarnombreartistico');

    Route::post('/perfil/cambiargenero','PerfilController@cambiargenero')->name('cambiargenero');

    Route::post('/perfil/cambiarpais','PerfilController@cambiarpais')->name('cambiarpais');

    Route::post('/perfil/cambiaridioma','PerfilController@cambiaridioma')->name('cambiaridioma');

    Route::post('/perfil/cambiarnacionalidad','PerfilController@cambiarnacionalidad')->name('cambiarnacionalidad');

    Route::post('/perfil/cambiarredes','PerfilController@cambiarredes')->name('cambiarredes');

    Route::post('/perfil/cambiartalenta','PerfilController@cambiartalenta')->name('cambiartalenta');

    Route::post('/perfil/cambiartalentb','PerfilController@cambiartalentb')->name('cambiartalentb');

    Route::post('/perfil/cambiartalentc','PerfilController@cambiartalentc')->name('cambiartalentc');

    Route::post('/perfil/cambiarmanager','PerfilController@cambiarmanager')->name('cambiarmanager');

    Route::post('/perfil/eliminarmanager','PerfilController@eliminarmanager')->name('eliminarmanager');

    Route::post('/perfil/cambiaracercademi','PerfilController@cambiaracercademi')->name('cambiaracercademi');

    Route::post('/perfil/cambiarfenotipo','PerfilController@cambiarfenotipo')->name('cambiarfenotipo');

    Route::post('/perfil/cambiartallas','PerfilController@cambiartallas')->name('cambiartallas');

    Route::post('/perfil/cambiarmedidas','PerfilController@cambiarmedidas')->name('cambiarmedidas');

   Route::post('/perfil/cambiarperfil','PerfilController@cambiarperfil')->name('cambiarperfil');

   Route::post('/perfil/cambiarnac','PerfilController@cambiarnac')->name('cambiarnac');

   Route::post('/perfil/eliminarrepresentante','PerfilController@eliminarrepresentante')->name('eliminarrepresentante');

   Route::post('/perfil/subirfotoperfil','PerfilController@subirfotoperfil')->name('subirfotoperfil');


   
    Route::post('/perfil/cambiarrepresentante','PerfilController@cambiarrepresentante')->name('cambiarrepresentante');


    Route::post('/audios/subiraudio','AudiosController@subiraudio')->name('subiraudio');

    Route::post('/eliminaraudio/{id_audio}','AudiosController@eliminaraudio')->name('eliminaraudio');

    Route::post('/videos/subirvideo','VideosController@subirvideo')->name('subirvideo');

    Route::post('/eliminarvideo/{id_audio}','VideosController@eliminarvideo')->name('eliminarvideo');

    Route::post('/imagen/subirfoto','FotosController@subirfoto')->name('subirfoto');

    Route::post('/eliminarfoto/{id_audio}','FotosController@eliminarfoto')->name('eliminarfoto');


    Route::post('/reconocimiento/subirreconocimiento','ReconocimientoController@subirreconocimiento')->name('subirreconocimiento');

    Route::post('/reconocimiento/eliminarreconocimiento/{id_rec}','ReconocimientoController@eliminarreconocimiento')->name('eliminarreconocimiento');


    Route::post('/educacion/subireducacion','EducacionController@subireducacion')->name('subireducacion');

    Route::post('/educacion/eliminareducacion/{id_rec}','EducacionController@eliminareducacion')->name('eliminareducacion');


    Route::post('/experiencia/subirexperiencia','ExperienciaController@subirexperiencia')->name('subirexperiencia');

    Route::post('/experiencia/eliminarexperiencia/{id_rec}','ExperienciaController@eliminarexperiencia')->name('eliminarexperiencia');


    Route::post('/perfil/aceptar', 'PerfilController@aceptarterminos')->name('aceptarterminos');

   });


