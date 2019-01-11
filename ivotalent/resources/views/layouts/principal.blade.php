<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Hay que acomodar los modelos en una carpera de Modelos -->
<!-- Hay que acomodar los modelos en una carpera de Modelos -->
<!-- Hay que acomodar los modelos en una carpera de Modelos -->
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link href="images/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
    <link href="images/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
   
    <title>IvoTalents</title>

    <link rel="stylesheet" href="{{ asset('css/framework7.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>

   

    <script src="{{ asset('js/jquery-3.3.1.js') }}" crossorigin="anonymous"></script>  



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
     //echo ' <b>Idioma del Navegador:</b>  '.$lang
    ?>
  <?php 
header('Access-Control-Allow-Origin: *'); 
?>
</head>


<body id="mobile_wrap">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-reveal">
	<div class="view view-subnav">
	<div class="pages">
		<div data-page="panel-leftmenu" class="page pagepanel" style="background: #f7941e; !important;">	
                     <div class="page-content">
			<nav class="main-nav icons_31">
			<ul>
           <!-- <li><a href="javascript:window.location.replace('<?php echo URL::route('welcome'); ?>');" class="close-panel" data-view=".view-main"><img src="images/icons/black/home.png" alt="" title="" /><span>Principal</span></a></li> -->
            <li><a href="home" class="close-panel" data-view=".view-main"><img src="images/icons/black/user.png" alt="" title="" /><span>Perfil</span></a></li>

            <li><a href="fotos" class="close-panel" data-view=".view-main"><img src="images/icons/black/photos.png" alt="" title="" /><span>Fotos</span></a></li>
			<li><a href="videos" class="close-panel" data-view=".view-main"><img src="images/icons/black/video.png" alt="" title="" /><span>Vídeos</span></a></li>
            <li><a href="audios" class="close-panel" data-view=".view-main"><img src="images/icons/black/audio.png" alt="" title="" /><span>Audios</span></a></li>
            
			<li><a href="reconocimiento" class="close-panel" data-view=".view-main"><img src="images/icons/black/trophy.png" alt="" title="" /><span>Premios</span></a></li>
			<li><a href="experiencia" class="close-panel" data-view=".view-main"><img src="images/icons/black/star.png" alt="" title="" /><span>Experiencias</span></a></li>
            <li><a href="educacion" class="close-panel" data-view=".view-main"><img src="images/icons/black/study.png" alt="" title="" /><span>Educación</span></a></li>	
            @if($currentuser_manager)
                @if($currentuser_manager->manager_name)
                <li><a href="manager" class="close-panel" data-view=".view-main"><img src="images/icons/black/manager.png" alt="" title="" /><span>Manager</span></a></li>
                @endif
            @endif
            <!-- <li><a href="#" data-popup=".popup-login" class="open-popup close-panel"><img src="images/icons/black/lock.png" alt="" title="" /><span>Login</span></a></li>
             -->
			<li><a href="acercademi" class="close-panel" data-view=".view-main"><img src="images/icons/black/acerca.png" alt="" title="" /><span>Sobre Mí</span></a></li>
			<!-- 
			<li><a href="cart.html" class="close-panel" data-view=".view-main"><img src="images/icons/black/cart.png" alt="" title="" /><span>Cart</span></a></li>
			
			<li><a href="tables.html" class="close-panel" data-view=".view-main"><img src="images/icons/black/tables.png" alt="" title="" /><span>Tables</span></a></li>
			<li><a href="form.html" class="close-panel" data-view=".view-main"><img src="images/icons/black/form.png" alt="" title="" /><span>Forms</span></a></li>
			<li><a href="contact.html" class="close-panel" data-view=".view-main"><img src="images/icons/black/contact.png" alt="" title="" /><span>Contact</span></a></li>

            -->
			</ul>
			</nav>
                     </div>
		</div>
	  </div>
	</div>  
    </div>

    <div class="panel panel-right panel-reveal" style="background: #f7941e; !important;">
      <div class="user_login_info" >
     <div class="user_thumb">
                <img src="images/page_photo.jpg" alt="" title="" />
                  <div class="user_details">
                  @if(!empty($currentuser))
                   <p style="font-size: 1em">Bienvenido, <span>{{$currentuser->name ? $currentuser->name : "Nombre y Apellido"}}</span></p>
                  @endif
                  </div>  
                  @if ($currentuser)
                      @if ($currentuser->avatar)
                      <div class="user_avatar"><a href="#" data-popup=".popup-fotoperfil" class="open-popup">
                        <img src="{{$currentuser->avatar}}" alt="" title="" /></a></div>       

                      @else
                      <div class="user_avatar"><a href="#" data-popup=".popup-fotoperfil" class="open-popup">
                        <img src="images/avatar.png" alt="" title="" /></a></div>       
                      @endif
                   @endif
                </div>
				
                  <nav class="user-nav">
                    <ul>
                      <!--<li><a href="features.html" class="close-panel"><img src="images/icons/black/settings.png" alt="" title="" /><span>Account Settings</span></a></li>-->
                      <li><a href="features.html" class="close-panel"><img src="images/icons/black/briefcase.png" alt="" title="" /><span>Mi Cuenta</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/black/message.png" alt="" title="" /><span>Mensajes</span><strong>12</strong></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/black/love.png" alt="" title="" /><span>Favoritos</span><strong>5</strong></a></li>
                      <li>
                         <form method="POST" id="myForm1" action="{{ route('logout') }}">
                              @csrf
                        <a href="javascript:document.getElementById('myForm1').submit();" class="close-panel"><img src="images/icons/black/lock.png" alt="" title="" /><span>Salir</span></a>
                        </form>
                    </li>
                    </ul>
                  </nav>
              
      </div>
    </div>

    <div class="views">

      <div class="view view-main">



        <div class="pages">

          <div data-page="index" class="page homepage">
            <div class="page-content">
			
                        <div class="navbarpages whitebg">
                            <div class="navbar_left">
    <div class="logo_text"><a ><img src="{{ asset('images/logo.svg') }}"
       style="width: 7em;" class="brand-image"></a></div>                            
                            </div>
                            @if (Auth::check())	
                            <a href="#" data-panel="right" class="open-panel" id="myModal" >
                                <div class="navbar_right graybg"><img src="images/icons/black/user.png"  alt="" title="" /></div>
                            </a>	
                            @else
                            <a href="#" data-popup=".popup-login" class="open-popup close-panel" id="myModal" >
                                 <div class="navbar_right graybg"><img src="images/icons/black/user.png" alt="" title="" /></div>
                            </a>

                            @endif		
                            @if (Auth::check())	
                            <a href="#" data-panel="left" class="open-panel" >
                                <div class="navbar_right" style="background: #f7941e; !important;"><img src="images/icons/black/menu.png" alt="" title="" /></div>
                            </a>
                            @endif	
                           
							
                        </div>


                        @yield('content')
                                    </div>
               @if (Auth::check())	
                <ul id="navs" data-open="-" data-close="+">
                <li><a href="contact.html"><img src="images/icons/black/contact.png" alt="" title="" /></a>
                </li>
                <li><a href="#" data-popup=".popup-social" class="open-popup"><img src="images/icons/black/twitter.png" alt="" title="" /></a></li>
                <li><a href="tel:1234 5678" class="external"><img src="images/icons/black/phone.png" alt="" title="" /></a></li>
                </ul>	         
                 @else
                 <ul id="navs" data-open="-" data-close="+">
                <li><a href="#" data-popup=".popup-login" class="open-popup close-panel" id="myModal"><img src="images/icons/black/contact.png" alt="" title="" /></a></li>
                <li><a href="#" data-popup=".popup-login" class="open-popup close-panel" id="myModal"><img src="images/icons/black/twitter.png" alt="" title="" /></a></li>
                <li><a href="#" data-popup=".popup-login" class="open-popup close-panel" id="myModal"><img src="images/icons/black/insta.png" alt="" title="" /></a></li>
                </ul>
               @endif
			  
            </div>
          </div>
        </div>



      </div>
    </div>

	
    <!-- Login Popup -->
    <div class="popup popup-login" style="opacity: 0.88;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>
            <div class="loginform">
                <form id="LoginForm" method="post"action="{{ route('login') }}">
                @csrf
                            <b>  @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                   @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                  </b>
                                <br>
                    <input type="text" name="email"  type="email" value="" class="form_input required" placeholder="Nombre de Usuario" />

                    <input type="password" name="password" value="" class="form_input required" placeholder="Contraseña" />
                 
                    <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">¿Perdiste tu Contraseña?</a></div>
                    <input type="submit" class="form_submit" value="INICIAR SESIÓN" />
                </form>
                <h5>- INICIA SESION CON TU RED SOCIAL -</h5>
                <div class="signup_social">
                    <a href="{{ route('social.auth', 'facebook') }}" class="signup_facebook external">FACEBOOK</a>
                    <a href="{{ route('social.auth', 'google') }}" class="signup_twitter external">GOOGLE+</a>            
                </div>		
                <div class="signup_bottom">
                    <p>¿No tienes Cuenta aún?</p>
                    <a href="#" data-popup=".popup-signup" class="open-popup">Regístrate</a>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

    <!-- Register Popup -->
    <div class="popup popup-signup" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>
            <h4>REGISTRATE</h4>
            <div class="loginform">
                <form method="POST" action="{{ route('register') }}">
                @csrf
<input id="name" type="text" class="form_input required {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>  
  <input id="email" type="email" class="form_input required {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required>
  <input id="password" type="password" class="form_input required {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
<input id="password-confirm" type="password" class="form_input required" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                      <button type="submit" style="    width: 100%;
    padding: 12px 0;
    margin: 10px 0 0 0;
    text-align: center;
    cursor: pointer;
    font-size: 18px;
    font-weight: 300;
    color: #222222;
    border: none;
    cursor: pointer;
    -webkit-appearance: none;
    background-color: #f7941e;">
                           Registrar
                                </button>
                </form>
		<h5>- REGISTRATE CON TU RED SOCIAL -</h5>
		<div class="signup_social">
			<a href="{{ route('social.auth', 'facebook') }}" class="signup_facebook external">FACEBOOK</a>
			<a href="{{ route('social.auth', 'google') }}" class="signup_twitter external">GOOGLE+</a>            
		</div>		
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
	
    <!-- Forgot Password Popup -->
    <div class="popup popup-forgot" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>
            <h4>RECUPERACION DE CONTRASEÑA</h4>
            <div class="loginform">
                <form id="ForgotForm" method="post">
                    <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
                    <input type="submit" class="form_submit" value="ENVIAR CONTRASEÑA" />
                </form>
                <div class="signup_bottom">
                    <p>Verifica tu Email y sigue las instrucciones para recuperar tu Contraseña</p>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
	
    <!-- Social Icons Popup -->
    <div class="popup popup-social">
    <div class="content-block">
      <h4>Social Share</h4>
      <p>Share icons solution that allows you share and increase your social popularity.</p>
      <ul class="social_share">
      <li><a href="http://twitter.com/" class="external"><img src="images/icons/black/twitter.png" alt="" title="" /><span>TWITTER</span></a></li>
      <li><a href="http://www.facebook.com/" class="external"><img src="images/icons/black/facebook.png" alt="" title="" /><span>FACEBOOK</span></a></li>
      <li><a href="http://plus.google.com/" class="external"><img src="images/icons/black/gplus.png" alt="" title="" /><span>GOOGLE</span></a></li>
      <li><a href="http://www.dribbble.com/" class="external"><img src="images/icons/black/dribbble.png" alt="" title="" /><span>DRIBBBLE</span></a></li>
      <li><a href="http://www.linkedin.com/" class="external"><img src="images/icons/black/linkedin.png" alt="" title="" /><span>LINKEDIN</span></a></li>
      <li><a href="http://www.pinterest.com/" class="external"><img src="images/icons/black/pinterest.png" alt="" title="" /><span>PINTEREST</span></a></li>
      </ul>
      <div class="close_popup_button"><a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a></div>
    </div>
    </div>
    

 <!-- Seccion de POPUPS a quitar en cuanto el Framework me lo permita en la revision mas adelantada, cargando cada una en la pagina que le corresponde -->
 <!-- SECCION POPUPS -->

    @if($currentuser)   
    <!-- Nombre/Apellido Popup -->
    <div class="popup popup-name" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>
            <h4>CAMBIAR NOMBRE</h4>
            <br>
            <div class="loginform">
                <form id="NombreForm" method="post" action="{{ route('cambiarnombre') }}">
                {{csrf_field()}}
                    <input type="text" name="email" id="email" value="{{$currentuser->name ? $currentuser->name : ''}}" class="form_input required" placeholder="Nombre y Apellido" />
                    <br /><br />
                    <input type="submit" class="form_submit"  value="CAMBIAR NOMBRE" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
	


      <!-- Email Popup -->
    <div class="popup popup-email" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>
            <h4>CAMBIAR EMAIL</h4>
            <br>
            <div class="loginform">
                <form id="EmailForm" method="post" action="{{ route('cambiaremail') }}">
                {{csrf_field()}}
                    <input type="email" name="email2" id="email2" value="{{$currentuser->email2 ? $currentuser->email2 : ''}}" class="form_input required" placeholder="Email" />
                    <br /><br />
                    <input type="submit" class="form_submit"  value="CAMBIAR EMAIL" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>


        <!-- Nombre Artistico Popup -->
        <div class="popup popup-artisticname" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>
            <h4>CAMBIAR NOMBRE ARTÍSTICO</h4>
            <br>
            <div class="loginform">
                <form id="NombreArtisticoForm" method="post" action="{{ route('cambiarnombreartistico') }}">
                {{csrf_field()}}
                    <input type="text" name="artisticname" value="{{$currentuser->artisticName ? $currentuser->artisticName : ''}}" 
                    class="form_input required" placeholder="Nombre Artístico *" />       <br /><br />
                    <input type="submit" class="form_submit" value="CAMBIAR NOMBRE ARTÍSTICO" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>


    <div class="popup popup-acercademi" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>
            <h4>EDITAR ACERCA DE MÍ</h4>
            <br>
            <div class="loginform">
                <form id="AcercademiForm" method="post" action="{{ route('cambiaracercademi') }}">
                {{csrf_field()}}
                <textarea rows="4" cols="60" name="acercademi" id="acercademi" class="form_select ">{{$currentuser->acercademi ? $currentuser->acercademi : ''}}</textarea>
                    <br /><br />
                    <input type="submit" class="form_submit" value="CAMBIAR" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
    
     <!-- Genero Popup -->
     <div class="popup popup-gender" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>CAMBIAR GÉNERO</h4>
            <br>
            <div class="loginform">
                <form id="GeneroForm" method="post" action="{{ route('cambiargenero') }}">
                {{csrf_field()}}
                <select name="gender_id" id="gender_id" class="form_select" style="width: 100%; height: 55px; z-index: 1000;">
                @foreach($gender as $genders)
                    <option value="{{ $genders['id']}}"  <?php 

                    if($currentuser_gender->id == $genders['id']) { ?>
                    selected
                    <?php } ?>>{{ $genders['name']}}</option>
                 @endforeach

                  </select>       <br /><br />
                    <input type="submit"   class="form_submit"   value="CAMBIAR GÉNERO" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
            <script>
$('#gender_id').on('touchstart', function() { $(this).focus();});
</script>
        </div>
    </div>

     <!-- Pais Popup -->
     <div class="popup popup-country" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>CAMBIAR CIUDAD/PROVINCIA/PAÍS</h4>
            <br>
            <div class="loginform">
                <form id="PaisForm" method="post"  action="{{ route('cambiarpais') }}"> 
                 {{csrf_field()}}

                <div class="form_row">
                    <select name="country_id"  data-dependent="province_id" id="country_id" class="js-example-basic-single dinamico form_select" data-show-subtext="true" 
                     data-live-search="true" >
                                            <option value="0" >País* </option>    
                                            @foreach($paises as $pais)
                                                <option value="{{ $pais['id']}}"  <?php 

                                                if($currentuser->country_id == $pais['id']) { ?>
                                                selected
                                                <?php } ?>>{{ $pais['name']}}</option>
                                                @endforeach
                                            </select>
                </div>
                <div class="form_row">
                                        <select name="province_id"  id="province_id"   class="js-example-basic-single dinamico  form_select" data-dependent="city_id" 
                                        data-show-subtext="true"  data-live-search="true" >
										 <option value="0" >Provincia* </option>  
                                           @foreach($provincias as $provincia)
                                            <option value="{{ $provincia['id']}}"  <?php 

                                            if($currentuser->province_id == $provincia['id']) { ?>
                                            selected
                                            <?php } ?>>{{ $provincia['name']}}</option>
                                            @endforeach
                                        </select>
                        
                </div>        
                <div class="form_row">  
                <select name="city_id" id="city_id"   
                      name="city_id"  class="js-example-basic-single dinamico  form_select"
                       data-show-subtext="true"  data-live-search="true" >
					    <option value="0" >Ciudad* </option>  
                                            @foreach($ciudades as $ciudad)
                                            <option value="{{ $ciudad['id']}}" data-subtext="{{ $ciudad['name']}}"  <?php 

                                            if($currentuser->city_id == $ciudad['id']) { ?>
                                            selected
                                            <?php } ?>>{{ $ciudad['name']}}</option>
                                            @endforeach
                                        </select>
                  </div>                      <br /><br />
                    <input type="submit"   class="form_submit"   value="CAMBIAR CIUDAD/PROVINCIA/PAÍS" />
                </form>
            </div>
            <script>
$('#country_id').on('touchstart', function() { $(this).focus();});
$('#province_id').on('touchstart', function() { $(this).focus();});
$('#city_id').on('touchstart', function() { $(this).focus();});
</script>

            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>



     <!-- Idioma Popup -->
     <div class="popup popup-idioma" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>CAMBIAR IDIOMA</h4>
            <br>
            <div class="loginform">
                <form id="IdiomaForm" method="post" action="{{ route('cambiaridioma') }}">
                   {{csrf_field()}}
                <div class="form_row">  
                <select name="idioma1_id"  id="idioma1_id" class="form_select" >
                                     @foreach($idiomas as $idioma)
                                    <option value="{{ $idioma['id']}}"  <?php 

                                    if($currentuser->idioma1_id == $idioma['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $idioma['idioma']}}</option>
                                    @endforeach
                                </select>
                                </div> 
                                       
                <div class="form_row">  
                                 <select name="idioma2_id"  id="idioma2_id" class="form_select" >
                                     @foreach($idiomas as $idioma)
                                    <option value="{{ $idioma['id']}}"  <?php 

                                    if($currentuser->idioma2_id == $idioma['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $idioma['idioma']}}</option>
                                    @endforeach
                                </select>
                                </div>        
                <div class="form_row">  

                                 <select name="idioma3_id"  id="idioma3_id" class="form_select" >
                                    @foreach($idiomas as $idioma)
                                    <option value="{{ $idioma['id']}}"  <?php 

                                    if($currentuser->idioma3_id == $idioma['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $idioma['idioma']}}</option>
                                    @endforeach
                                </select>
                                </div>          <br /><br />
                    <input type="submit"   class="form_submit"   value="CAMBIAR IDIOMA" />
                </form>
            </div>
            <script>
$('#idioma1_id').on('touchstart', function() { $(this).focus();});
$('#idioma2_id').on('touchstart', function() { $(this).focus();});
$('#idioma3_id').on('touchstart', function() { $(this).focus();});
</script>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>


     <!-- Nacionalidad Popup -->
     <div class="popup popup-nacionalidad" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>CAMBIAR NACIONALIDAD</h4>
            <br>
            <div class="loginform">
                <form id="NacionalidadForm" method="post" action="{{ route('cambiarnacionalidad') }}">
                   {{csrf_field()}}
                <select name="nacionalidad_id"   style="width: 100%"  id="nacionalidad_id"  class="form_select">
                                 <option value="" >Nacionalidad* </option>
                                            
                                             @foreach($nacionalidad as $nacionalidades)
                                            <option value="{{ $nacionalidades['gentilicio_nac']}}"  <?php 

                                            if($currentuser->nacionalidad == $nacionalidades['gentilicio_nac']) { ?>
                                            selected
                                            <?php } ?>>{{ $nacionalidades['gentilicio_nac']}}</option>
                                            @endforeach
                                        </select>       <br /><br />
                    <input type="submit"   class="form_submit"   value="CAMBIAR NACIONALIDAD" />
                </form>
            </div>
            <script>
$('#nacionalidad_id').on('touchstart', function() { $(this).focus();});
</script>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

     <!-- Redes Popup -->
     <div class="popup popup-redes" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>
   
            <h4>CAMBIAR REDES SOCIALES</h4>
            <br>
            <div class="loginform">
                <form id="RedesForm" method="post" action="{{ route('cambiarredes') }}">
                     {{csrf_field()}}
                <div class="form_row">  
                <label style="color:gray;font-size: 1.1em;">https://www.facebook.com/</label>
               <input type="text" value="{{$currentuser->facebook}}" class="form-control input-form-register" style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    font-size: 1.1em;
                                    width:40%;
                                    margin-bottom: 3%
                                    " id="facebook" name="facebook"/>
                                    <br>
                </div>
                <div class="form_row">  

                <label style="color:gray;font-size: 1.1em;">https://www.instagram.com/</label>
                                    <input type="text" value="{{$currentuser->instagram}}" class=" form-control input-form-register" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    font-size: 1.1em;
                                    width:40%;
                                    margin-bottom: 3%
                                    " id="instagram" name="instagram"/>
                                    <br>
                </div>
                <div class="form_row">  

                
                <label style="color:gray;font-size: 1.1em;">Twitter @</label>
                                    <input type="text" value="{{$currentuser->twitter}}" class="form-control input-form-register" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    font-size: 1.1em;
                                    width:40%;
                                    margin-bottom: 3%
                                    " id="twitter" name="twitter"/>
                                    <br>
                </div>
                <br /><br />
                    <input type="submit"   class="form_submit"   value="CAMBIAR REDES SOCIALES" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

     <!-- Manager Popup -->
     <div class="popup popup-manager" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>EDITAR/CREAR MANAGER</h4>
            <br>
            <div class="loginform">
                <form id="ManagerForm" method="post" action="{{ route('cambiarmanager') }}">
                   {{csrf_field()}}
                <div class="form_row">

                <input type="text" value="@if($currentuser_manager){{$currentuser_manager->manager_name}}@endif"  placeholder="Nombre*" class="form_select" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    " id="manager_name" name="manager_name"/>
                </div>
                <div class="form_row">
                <input type="text" value="@if($currentuser_manager){{$currentuser_manager->manager_lastname}} @endif"  placeholder="Apellido*" class="form_select" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    " id="manager_lastname" name="manager_lastname"/>
                </div>
                <div class="form_row">
                <input type="text" value="@if($currentuser_manager){{$currentuser_manager->phone_number}} @endif"  placeholder="Teléfono*" class="form_select" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    " id="phone_number" name="phone_number"/>
                </div>
                <div class="form_row">
                <input type="text" value="@if($currentuser_manager){{$currentuser_manager->manager_enterprise}} @endif"  placeholder="Compañía*" class="form_select" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    " id="manager_phone" name="manager_enterprise"/>
                </div>

                <div class="form_row">
                <input type="text" value="@if($currentuser_manager){{$currentuser_manager->manager_email}} @endif"  placeholder="Email*" class="form_select" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    " id="manager_email" name="manager_email"/>
                </div>       <br /><br />
                    <input type="submit"   class="form_submit"   value="CAMBIAR MANAGER" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>



     <!-- Talentos Popup -->
     <div class="popup popup-talenta" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>EDITAR/CREAR TALENTO</h4>
            <br>
            <div class="loginform">
                <form id="TalentoForma" method="post" action="{{ route('cambiartalenta') }}">
                   {{csrf_field()}}
                <div class="form_row">
                <select name="principalTalent"  id="principalTalent"   required data-dependent="principalGenero"  class="dynamic form_select" >
                                    @foreach($talentos as $talento)
									<option value="{{ $talento['id']}}"  <?php 

                                    if($currentuser->principalTalent == $talento['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $talento['talentos']}}</option>
                                    @endforeach
                                </select>

                </div>  <script>
$('#principalTalent').on('touchstart', function() { $(this).focus();});
</script>
                <div class="form_row">
                <select name="principalGenero" id="principalGenero"  data-dependent="principalCategoria"  class="dynamic form_select">
                                        <option value="1">Género*</option>
                                        @foreach($talento_genero1 as $talento_generos)
                                            <option value="{{ $talento_generos['id']}}"  <?php 

                                            if($currentuser->principalGenero == $talento_generos['id']) { ?>
                                            selected
                                            <?php } ?>>{{ $talento_generos['nombre']}}</option>
                                        @endforeach
                                        </select>
                </div>
                <script>
$('#principalGenero').on('touchstart', function() { $(this).focus();});
</script>
                <div class="form_row">
                <select name="principalCategoria" data-dependent="principalEspecialidad" id="principalCategoria" class="dynamic form_select">
                                            <option value="1">Categoría*</option>
                                        </select>
                </div>
                <script>
$('#principalCategoria').on('touchstart', function() { $(this).focus();});
</script>
                <div class="form_row">

                <select name="principalEspecialidad"  id="principalEspecialidad" class="dynamic form_select">
                                <option value="1">Especialidad*</option>
                        </select>
                </div>       <br /><br />
                    <input type="submit"   class="form_submit"   value="CAMBIAR TALENTO" />
                </form>
            </div>
            <script>
$('#principalEspecialidad').on('touchstart', function() { $(this).focus();});
</script>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

         <!-- Talentos Popup -->
         <div class="popup popup-talentb" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>EDITAR/CREAR TALENTO</h4>
            <br>
            <div class="loginform">
                <form id="TalentoFormb" method="post" action="{{ route('cambiartalentb') }}">
                    {{csrf_field()}}
                <div class="form_row">
                <select name="secondaryTalent"  data-dependent="secondaryGenero"  id="secondaryTalent" class="dynamic form_select" >
                                    @foreach($talentos as $talento)
                                    <option value="{{ $talento['id']}}"  <?php 

                                    if($currentuser->secondaryTalent == $talento['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $talento['talentos']}}</option>
                                    @endforeach
                                </select>

                    </div>
                    <script>
$('#secondaryTalent').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="secondaryGenero" id="secondaryGenero"  data-dependent="secondaryCategoria"  class="dynamic form_select">
                                        <option value="1">Género*</option>
                                       @foreach($talento_genero2 as $talento_generos)
                                            <option value="{{ $talento_generos['id']}}"  <?php 

                                            if($currentuser->secondaryGenero == $talento_generos['id']) { ?>
                                            selected
                                            <?php } ?>>{{ $talento_generos['nombre']}}</option>
                                        @endforeach
                                        </select>
                    </div>
                    <script>
$('#secondaryGenero').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
  
                    <select name="secondaryCategoria"  data-dependent="secondaryEspecialidad"  id="secondaryCategoria" class="dynamic form_select">
                                         <option value="1">Categoría*</option>
                                        </select>
                                             
                    </div>
                    <script>
$('#secondaryCategoria').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="secondaryEspecialidad" id="secondaryEspecialidad" class="dynamic form_select">
                                 <option value="1">Especialidad*</option>
                        </select>
                    </div>                               
                    <input type="submit"   class="form_submit"   value="CAMBIAR TALENTO" />
                </form>
            </div>
            <script>
$('#secondaryEspecialidad').on('touchstart', function() { $(this).focus();});
</script>
            <div class="close_popup_button">       <br /><br />
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

        
         <!-- Talentos Popup -->
         <div class="popup popup-talentc" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>EDITAR/CREAR TALENTO</h4>
            <br>
            <div class="loginform">
                <form id="TalentoFormc" method="post"  action="{{ route('cambiartalentc') }}">
                    {{csrf_field()}}
                <div class="form_row">
                <select name="terciaryTalent"  data-dependent="terciaryGenero"  id="terciaryTalent" class="dynamic form_select" >
                                    @foreach($talentos as $talento)
                                    <option value="{{ $talento['id']}}"  <?php 

                                    if($currentuser->terciaryTalent == $talento['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $talento['talentos']}}</option>
                                    @endforeach
                                </select>

                    </div>
                    <script>
$('#terciaryTalent').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="terciaryGenero" id="terciaryGenero"  data-dependent="terciaryCategoria"  class="dynamic form_select">
                                        <option value="1">Género*</option>
                                       @foreach($talento_genero2 as $talento_generos)
                                            <option value="{{ $talento_generos['id']}}"  <?php 

                                            if($currentuser->terciaryGenero == $talento_generos['id']) { ?>
                                            selected
                                            <?php } ?>>{{ $talento_generos['nombre']}}</option>
                                        @endforeach
                                        </select>
                    </div>
                    <script>
$('#terciaryGenero').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
  
                    <select name="terciaryCategoria"  data-dependent="terciaryEspecialidad"  id="terciaryCategoria" class="dynamic form_select">
                                         <option value="1">Categoría*</option>
                                        </select>
                                             
                    </div>
                    <script>
$('#terciaryCategoria').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="terciaryyEspecialidad" id="terciaryEspecialidad" class="dynamic form_select">
                                 <option value="1">Especialidad*</option>
                        </select>
                    </div>         <br /><br />                             
                    <input type="submit"   class="form_submit"   value="CAMBIAR TALENTO" />
                </form>
            </div>
            <script>
$('#terciaryyEspecialidad').on('touchstart', function() { $(this).focus();});
</script>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>


     <!-- Fenotipo Popup -->
     <div class="popup popup-fenotipo" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>Características Físicas: FENOTIPO</h4>
            <br>
            <div class="loginform">
                <form id="FenotipoForm" method="post"   action="{{ route('cambiarfenotipo') }}">
                 {{csrf_field()}}
                    <div class="form_row">
                    <select name="tono_id"  id="tono_id"  class="form_select" >
                                     @foreach($pieles as $piel)
                                    <option value="{{ $piel['id']}}"  <?php 

                                    if($currentuser->tono_id == $piel['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $piel['tono']}}</option>
                                    @endforeach
                                </select>
                    </div>
                    <script>
$('#tono_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="color_ojos_id"  id="color_ojos_id"   class="form_select" >
                                     @foreach($ojos as $ojo)
                                    <option value="{{ $ojo['id']}}"  <?php 

                                    if($currentuser->color_ojos_id == $ojo['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $ojo['ojos']}}</option>
                                    @endforeach
                                    </select>
                    </div>
                    <script>
$('#color_ojos_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="color_cabello_id"  id="color_cabello_id"    class="form_select">
                                     @foreach($cabellos as $cabello)
                                    <option value="{{ $cabello['id']}}"  <?php 

                                    if($currentuser->color_cabello_id == $cabello['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $cabello['color']}}</option>
                                    @endforeach

                                    
                                    </select>

                    </div>
                    <script>
$('#color_cabello_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="contextura_id"  id="contextura_id"    class="form_select">
                                     @foreach($contexturas as $contextura)
                                    
                                    <option value="{{ $contextura['id']}}"  <?php 

                                    if($currentuser->contextura_id == $contextura['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $contextura['contextura']}}</option>
                                    @endforeach
                                </select>
                    </div>
                    <script>
$('#contextura_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="etnias_id"  id="etnias_id"   class="form_select">
                                     @foreach($etnias as $etnia)
                                    
                                    <option value="{{ $etnia['id']}}"  <?php 

                                    if($currentuser->etnias_id == $etnia['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $etnia['etnia']}}</option>
                                    @endforeach
                                </select>
                    </div>
                    <script>
$('#etnias_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="look_id"  id="look_id"  class="form_select">

                                      @foreach($looks as $look)
                                    
                                    <option value="{{ $look['id']}}"  <?php 

                                    if($currentuser->look_id == $look['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $look['look']}}</option>
                                    @endforeach
                                    </select>

                    </div>
                    <script>
$('#look_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                          
                    <select name="tatuaje_id"  id="tatuaje_id"  class="form_select">
                                    <option value="¿Tatuaje?">¿Tatuaje?</option>
                                    <option value="Si" @if($currentuser->tatuaje_id == "Si") 
                                    selected
                                    @endif>Si</option>
                                    <option value="No" @if($currentuser->tatuaje_id == "No") 
                                    selected
                                    @endif>No</option>
                                </select>
                      
                    </div>
                    <script>
$('#tatuaje_id').on('touchstart', function() { $(this).focus();});
</script>
                    <input type="submit"   class="form_submit"   value="CAMBIAR FENOTIPO" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>


     <!-- Tallas Popup -->
     <div class="popup popup-medidas" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>Características Físicas: MEDIDAS</h4>
            <br>
            <div class="loginform">
                <form id="TallasForm" method="post" action="{{ route('cambiarmedidas') }}">
                 {{csrf_field()}}
                <div class="form_row">
                <input type="text" value="{{$currentuser->altura}}"   style="width: 50%"   placeholder="Altura*" class="form_select" id="altura" name="altura"/>
                                             
                               
                      <select name="tipo_altura_id"  id="tipo_altura_id"      style="width: 40%"  
                      class="form_select">
                                    <option value="1" @if($currentuser->tipo_altura_id ==1) 
                                    selected
                                    @endif>CM</option>
                                    <option value="2" @if($currentuser->tipo_altura_id == 2) 
                                    selected
                                    @endif>IN</option>
                                    <select>
                    </div>
                    <script>
$('#tipo_altura_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <input type="text" value="{{$currentuser->busto}}"   style="width: 50%"  placeholder="Busto*" class="form_select" id="busto" name="busto"/>
                                     
                      <select name="tipo_busto_id"  id="tipo_busto_id"     style="width: 40%" 
                      class="form_select">
                                    <option value="1" @if($currentuser->tipo_busto_id ==1) 
                                    selected
                                    @endif>CM</option>
                                    <option value="2" @if($currentuser->tipo_busto_id == 2) 
                                    selected
                                    @endif>IN</option>
                                    <select>
                    </div>
                    <script>
$('#tipo_busto_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <input type="text" value="{{$currentuser->cintura}}"    style="width: 50%" placeholder="Cintura*" class="form_select" id="cintura" name="cintura"/>
                                             
                            
                            
                      <select name="tipo_cintura_id"  id="tipo_cintura_id"    style="width: 40%"    
                      class="form_select">
                                    <option value="1" @if($currentuser->tipo_cintura_id ==1) 
                                    selected
                                    @endif>CM</option>
                                    <option value="2" @if($currentuser->tipo_cintura_id == 2) 
                                    selected
                                    @endif>IN</option>
                                    <select>
                    </div> 
                    <script>
$('#tipo_cintura_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <input type="text" value="{{$currentuser->cadera}}"  style="width: 50%"   placeholder="Cadera*" class="form_select" id="cadera" name="cadera"/>
                                     
                                     
                      <select name="tipo_cadera_id"  id="tipo_cadera_id"   style="width: 40%"    
                      class="form_select">
                                    <option value="1" @if($currentuser->tipo_cadera_id ==1) 
                                    selected
                                    @endif>CM</option>
                                    <option value="2" @if($currentuser->tipo_cadera_id == 2) 
                                    selected
                                    @endif>IN</option>
                                    <select>
                    </div> 
                    <script>
$('#tipo_cadera_id').on('touchstart', function() { $(this).focus();});
</script>
                    <br><br>
                     <input type="submit"   class="form_submit"   value="CAMBIAR MEDIDAS" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

         <!-- Medidas Popup -->
         <div class="popup popup-tallas" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>Características Físicas: TALLAS</h4>
            <br>
            <div class="loginform">
                <form id="MedidasForm" method="post" action="{{ route('cambiartallas') }}">
                 {{csrf_field()}}
                <div class="form_row">
                <select name="camisa"  id="camisa"  style="width: 50%"   
                      class="form_select">

                                     @foreach($camisa as $camisas)
                                    
                                    <option value="{{ $camisas['id']}}"  <?php 

                                    if($currentuser->camisa == $camisas['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $camisas['nombre']}}</option>
                                    @endforeach

                                   
                                    <select>
                                    <script>
$('#camisa').on('touchstart', function() { $(this).focus();});
</script>
                    <select name="tipo_camisa_id"  style="width: 40%"     id="tipo_camisa_id"    
                      class="form_select">
                                    <option value="1" @if($currentuser->tipo_camisa_id ==1) 
                                    selected
                                    @endif>USA</option>
                                    <option value="2" @if($currentuser->tipo_camisa_id == 2) 
                                    selected
                                    @endif>EU</option>
                                    <select>
                      
                    </div>
                    <script>
$('#tipo_camisa_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="pantalon"  id="pantalon"     style="width: 50%"  
                      class="form_select">

                                      @foreach($pantalon as $pantalones)
                                    
                                    <option value="{{ $pantalones['id']}}"  <?php 

                                    if($currentuser->pantalon == $pantalones['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $pantalones['nombre']}}</option>
                                    @endforeach

                                    </select>
                                    <script>
$('#pantalon').on('touchstart', function() { $(this).focus();});
</script>

                    <select name="tipo_pantalon_id"  style="width: 40%"   id="tipo_pantalon_id"    
                      class="form_select">
                                    <option value="1" @if($currentuser->tipo_pantalon_id ==1) 
                                    selected
                                    @endif>USA</option>
                                    <option value="2" @if($currentuser->tipo_pantalon_id == 2) 
                                    selected
                                    @endif>EU</option>
                                    <select>
                    </div>    
                    <script>
$('#tipo_pantalon_id').on('touchstart', function() { $(this).focus();});
</script>
                    <div class="form_row">
                    <select name="zapatos"  id="zapatos"     style="width: 50%"  
                      class="form_select ">

                                      @foreach($zapatos as $zapato)
                                    
                                    <option value="{{ $zapato['id']}}"  <?php 

                                    if($currentuser->zapatos == $zapato['id']) { ?>
                                    selected
                                    <?php } ?>>{{ $zapato['nombre']}}</option>
                                    @endforeach
                                  <select>
       
                                  <script>
$('#zapatos').on('touchstart', function() { $(this).focus();});
</script>
                     <select name="tipo_zapatos_id"  style="width: 40%"   id="tipo_zapatos_id"    
                      class="form_select">
                                    <option value="1" @if($currentuser->tipo_zapatos_id ==1) 
                                    selected
                                    @endif>USA</option>
                                    <option value="2" @if($currentuser->tipo_zapatos_id == 2) 
                                    selected
                                    @endif>EU</option>
                                    <select>
                    </div>
                    <script>
$('#tipo_zapatos_id').on('touchstart', function() { $(this).focus();});
</script>
                                            <br /><br />
                    <input type="submit"   class="form_submit"   value="CAMBIAR TALLAS" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>


     <!-- Audios Popup -->
     <div class="popup popup-audios" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>SUBIR AUDIO</h4>
            <br>
            <div class="loginform">
                <form id="AudiosForm" method="post" action="{{ route('subiraudio') }}" enctype="multipart/form-data">
                   {{csrf_field()}}

                <div class="form_row">
                   <input type="text"   required
                     placeholder="Nombre del Audio*" class="form_select" id="nombreaudio" name="nombreaudio"/>
                </div>

                <br />
                  <h4 class="page_title">Fecha* </h4>
            

                <div class="form_row">
                    <select name="mesaudio" id="mesaudio" class="form_select">
                                        <?php
                                        for($i = 1; $i <= 12; $i++){
                                        echo "<option  @if($currentuser->month == $i) selected @endif>" . $i . "</option>";
                                        }
                                        ?>
                                        </select>
                </div>
                 <script>
                  $('#mesaudio').on('touchstart', function() { $(this).focus();});
                  </script>
                           
                                  <div class="form_row">
                                          <select name="anioaudio"  id="anioaudio" class="form_select">
                                                  <?php
                                                  for($i = date("Y")-100; $i <= date("Y"); $i++){
                                                  echo "<option  @if($currentuser->year == $i) selected @endif>" . $i . "</option>";
                                                  }
                                                  ?>
                                          </select>
                                  </div>
                            <script>
                  $('#anioaudio').on('touchstart', function() { $(this).focus();});
                  </script>
                     
   
      
                <div class="form_row">
                    <h4 class="spacing-title">
								 <input name="output2" id="output0"  class="form_submit" style="background-color:#d1d1d1" value="SELECCIONAR AUDIO" />
                </div>

                <div class="form_row">
                    <input type="file" accept="audio/*"  style="display:none" required name="audios"  id="audios">
                </div>
                <input type="submit"   class="form_submit"   value="ACEPTAR" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>

            <script>

$("#output0").click(function () {
    $("#audios").trigger('click');
});
$('#output0').on('touchstart', function() { $(this).click();});


</script>
        </div>
    </div>




 <!-- Videos Popup -->
 <div class="popup popup-videos" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>SUBIR VÍDEO</h4>
            <br>
            <div class="loginform">
                <form id="VideosForm" method="post" action="{{ route('subirvideo') }}" enctype="multipart/form-data">
                   {{csrf_field()}}

                <div class="form_row">
                   <input type="text"   required
                     placeholder="Nombre del Vídeo*" class="form_select" id="nombre" name="nombre"/>
                </div>

                <br />
                  <h4 class="page_title">Fecha* </h4>
            
                  <div class="form_row">
                    <select name="mesvideo" id="mesvideo" class="form_select">
                                        <?php
                                        for($i = 1; $i <= 12; $i++){
                                        echo "<option  @if($currentuser->month == $i) selected @endif>" . $i . "</option>";
                                        }
                                        ?>
                                        </select>
                </div>
               <script>
                  $('#mesvideo').on('touchstart', function() { $(this).focus();});
                  </script>
                <div class="form_row">
                        <select name="aniovideo"  id="aniovideo" class="form_select">
                                <?php
                                for($i = date("Y")-100; $i <= date("Y"); $i++){
                                echo "<option  @if($currentuser->year == $i) selected @endif>" . $i . "</option>";
                                }
                                ?>
                        </select>
                </div>
               <script>
                  $('#aniovideo').on('touchstart', function() { $(this).focus();});
                  </script>
        
                <div class="form_row">
                    <h4 class="spacing-title">
			 <input name="output2" id="output2"  class="form_submit" style="background-color:#d1d1d1" value="SELECCIONAR VÍDEO" />

                </div>

                <div class="form_row">
                   <input type="file" accept="video/*"  style="display:none"   required name="video" id="video">

                </div>
				<input type="submit"   class="form_submit"   value="ACEPTAR" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>

<script>
      

$("#output2").click(function () {
    $("#video").trigger('click');
});
$('#output2').on('touchstart', function() { $(this).click();});

</script>
        </div>
    </div>








 <!-- Fotos Popup -->
 <div class="popup popup-fotos" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>SUBIR FOTO</h4>
            <br>
            <div class="loginform">
                 <form id="FotosForm" method="post" action="{{ route('subirfoto') }}" enctype="multipart/form-data">
                   {{csrf_field()}}


                <div class="form_row">
                   <input type="text"   required
                     placeholder="Nombre de la Galería*" class="form_select" id="foto_galeria" name="foto_galeria"/>
                </div>

                <br />
                  <h4 class="page_title">Fecha* </h4>
            

                <div class="form_row">
                    <select name="month" id="month" class="form_select">
                                        <?php
                                        for($i = 1; $i <= 12; $i++){
                                        echo "<option  @if($currentuser->month == $i) selected @endif>" . $i . "</option>";
                                        }
                                        ?>
                                        </select>
                </div>

                <div class="form_row">
                        <select name="year"  id="year" class="form_select">
                                <?php
                                for($i = date("Y")-100; $i <= date("Y"); $i++){
                                echo "<option  @if($currentuser->year == $i) selected @endif>" . $i . "</option>";
                                }
                                ?>
                        </select>
                </div>
  

        <div class="form_row">
            <img src="/images/fotos.png" style="cursor:pointer"  width="100%"  id="output3" ></h4>
   
                </div>

                <div class="form_row">
<input type="file" accept="image/*" multiple style="display:none"  required name="image[]" id="image"  onchange="loadFile0(event)">

                </div>
                <input type="submit"   class="form_submit"   value="SUBIR GALERÍA" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>


     <script>
              var loadFile0 = function(event) {
                var reader = new FileReader();
                reader.onload = function(){
                  var output = document.getElementById('output3');
                  output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
              };

        $("#output3").click(function () {
            $("#image").trigger('click');
        });
		$('#image').on('touchstart', function() { $(this).click();});

        </script>
 

        </div>
    </div>




<!-- Videos Popup -->
 <div class="popup popup-fotoperfil" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>SUBIR FOTO - Perfíl</h4>
            <br>
            <div class="loginform">
                 <form id="FotoperfilForm" method="post" action="{{ route('subirfotoperfil') }}" enctype="multipart/form-data">
                   {{csrf_field()}}

        <div class="form_row">
            <img src="/images/photos/fotoperfil.jpeg" style="cursor:pointer"  width="100%"  id="output5" ></h4>
   
                </div>

                <div class="form_row">
				
<input type="file"  multiple style="display:none"  required name="imageperfil[]" id="imageperfil"  onchange="loadFile(event)" value="ACEPTAR">

                </div>
                <input type="submit"   class="form_submit"   value="ACEPTAR" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>


     <script>
              var loadFile = function(event) {
                var reader = new FileReader();
                reader.onload = function(){
                  var output = document.getElementById('output5');
                  output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
              };

        $("#output5").click(function () {
            $("#imageperfil").trigger('click');
        });
    $('#imageperfil').on('touchstart', function() { $(this).click();});

        </script>
 

        </div>
    </div>


    <!-- Reconocimientos Popup -->
    <div class="popup popup-reconocimientos" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>INGRESAR RECONOCIMIENTO</h4>

            <br>
            <div class="loginform">
                <form id="ReconocimientoForm" method="post" action="{{ route('subirreconocimiento') }}" enctype="multipart/form-data">
                {{csrf_field()}}
                    
                    <div class="form_row">
                          <input type="text" placeholder="Título*" class="form_select" id="Titulo_Reconocimiento" name="Titulo_Reconocimiento"/>
                     </div>

                  <div class="form_row">
                          <input type="text" placeholder="Rol o Personaje Desempeñado*" class="form_select" id="Rol_Reconocimiento" name="Rol_Reconocimiento"/>
                     </div>


                     <div class="form_row">
                            <input type="text"  placeholder="Proyecto, Empresa o Marca*"  required
                                       class="form_select" id="Empresa_Reconocimiento" name="Empresa_Reconocimiento"/>
                     </div>

                     <div class="form_row">
                    <select name="Locacion_Reconocimiento" id="Locacion_Reconocimiento" class="js-example-basic-single dinamico form_select" data-show-subtext="true" 
                     data-live-search="true" >
                                            <option value="0" >País* </option>    
                                            @foreach($paises as $pais)
                                                <option value="{{ $pais['id']}}"  <?php 

                                                if($currentuser->Locacion_Reconocimiento == $pais['id']) { ?>
                                                selected
                                                <?php } ?>>{{ $pais['name']}}</option>
                                                @endforeach
                                            </select>
                </div>
             
                     <div class="form_row">
                           <select name="DesdeDia_Reconocimiento" id="DesdeDia_Reconocimiento" class="form_select">
                                                       <?php
                                                        for($i = 1; $i <= 12; $i++){
                                                        echo "<option  @if($currentuser->month == $i) selected @endif>" . $i . "</option>";
                                                        }
                                                        ?>
                                                        </select>
                     </div>


                     <div class="form_row">
                          <select name="DesdeMes_Reconocimiento" id="DesdeMes_Reconocimiento" class="form_select">
                                                     <?php
                                                                for($i = date("Y")-100; $i <= date("Y"); $i++){
                                                                echo "<option  @if($currentuser->year == $i) selected @endif>" . $i . "</option>";
                                                                }
                                                                ?>
                                                        </select>
                     </div>

                        <div class="form_row">
							<textarea class="form_select" placeholder="Descripción de tu reconocimiento" name="Texto_Reconocimiento" cols="50" rows="10" id="Texto_Reconocimiento"></textarea>

                       </div>

                          <div class="form_row">
                                  <img src="/images/fotos.png" style="cursor:pointer"  width="100%"  id="output6" ></h4>
                          </div>

                <div class="form_row">
                      <input type="file" accept="image/*" multiple style="display:none"  required name="imagereconocimiento[]" id="imagereconocimiento"  onchange="loadFile1(event)">
                </div>


                    <br /><br />
                    <input type="submit" class="form_submit"  value="INGRESAR RECONOCIMIENTO" />


                </form>
                  <script>
              var loadFile1 = function(event) {
                var reader = new FileReader();
                reader.onload = function(){
                  var output = document.getElementById('output6');
                  output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
              };

        $("#output6").click(function () {
            $("#imagereconocimiento").trigger('click');
        });
    $('#imagereconocimiento').on('touchstart', function() { $(this).click();});

        </script>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
  


    <!-- Experiencia Popup -->
    <div class="popup popup-experiencias" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>INGRESAR EXPERIENCIA</h4>
            <br>
            <div class="loginform">
                <form id="ExperienciaForm" method="post" action="{{ route('subirexperiencia') }}" enctype="multipart/form-data">
                {{csrf_field()}}
                    
                    <div class="form_row">
                          <input type="text" placeholder="Rol o Personaje Desempeñado*" class="form_select" id="Titulo_Experiencia" name="Titulo_Experiencia/>
                     </div>


                     <div class="form_row">
                            <input type="text"  placeholder="Proyecto, Empresa o Marca*"  required
                                       class="form_select" id="Empresa_Experiencia" name="Empresa_Experiencia"/>
                     </div>


                        <div class="form_row">
                    <select name="Locacion_Experiencia" id="Locacion_Experiencia" class="js-example-basic-single dinamico form_select" data-show-subtext="true" 
                     data-live-search="true" >
                                            <option value="0" >País* </option>    
                                            @foreach($paises as $pais)
                                                <option value="{{ $pais['id']}}"  <?php 

                                                if($currentuser->Locacion_Experiencia == $pais['id']) { ?>
                                                selected
                                                <?php } ?>>{{ $pais['name']}}</option>
                                                @endforeach
                                            </select>
                </div>


                     <div class="form_row">
                           <select name="DesdeDia_Experiencia" id="DesdeDia_Experiencia" class="form_select">
                                                       <?php
                                                        for($i = 1; $i <= 12; $i++){
                                                        echo "<option  @if($currentuser->month == $i) selected @endif>" . $i . "</option>";
                                                        }
                                                        ?>
                                                        </select>
                     </div>


                     <div class="form_row">
                          <select name="DesdeMes_Experiencia" id="DesdeMes_Experiencia" class="form_select">
                                                     <?php
                                                                for($i = date("Y")-100; $i <= date("Y"); $i++){
                                                                echo "<option  @if($currentuser->year == $i) selected @endif>" . $i . "</option>";
                                                                }
                                                                ?>
                                                        </select>
                     </div>


                      <div class="form_row">
							<textarea class="form_select" style="font:Source Sans Pro; bold;" placeholder="Experiencia o papel desempeñado." name="Texto_Experiencia" cols="50" rows="10" id="Texto_Experiencia"></textarea>

                       </div>

                          <div class="form_row">
                                  <img src="/images/fotos.png" style="cursor:pointer"  width="100%"  id="output7" ></h4>
                          </div>

                <div class="form_row">
                      <input type="file" accept="image/*" multiple style="display:none"  required name="imagenexperiencia[]" id="imagenexperiencia"  onchange="loadFile2(event)">
                </div>


                    <br /><br />
                    <input type="submit" class="form_submit"  value="INGRESAR EXPERIENCIA" />

                  </form>
                    <script>
              var loadFile2 = function(event) {
                var reader = new FileReader();
                reader.onload = function(){
                  var output = document.getElementById('output7');
                  output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
              };

        $("#output7").click(function () {
            $("#imagenexperiencia").trigger('click');
        });
    $('#imagenexperiencia').on('touchstart', function() { $(this).click();});
</script>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
  


<!-- Educacion Popup -->
<div class="popup popup-educacion" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>INGRESAR EDUCACIÓN</h4>

            <br>
            <div class="loginform">
                <form id="EducacionForm" method="post" action="{{ route('subireducacion') }}" enctype="multipart/form-data">

                {{csrf_field()}}
                    
                    <div class="form_row">
                          <input type="text" placeholder="Título*" class="form_select" id="Titulo_Educacion" name="Titulo_Educacion"/>
                     </div>


                     <div class="form_row">
                            <input type="text"  placeholder="Institución*"  required
                                       class="form_select" id="Empresa_Educacion" name="Empresa_Educacion"/>
                     </div>

					  <div class="form_row">
                            <input type="text"  placeholder="Disciplina*"  required
                                       class="form_select" id="Disciplina_Educacion" name="Disciplina_Educacion"/>
                     </div>

                        <div class="form_row">
                    <select name="Locacion_Educacion" id="Locacion_Educacion" class="js-example-basic-single dinamico form_select" data-show-subtext="true" 
                     data-live-search="true" >
                                            <option value="0" >País* </option>    
                                            @foreach($paises as $pais)
                                                <option value="{{ $pais['id']}}"  <?php 

                                                if($currentuser->Locacion_Educacion == $pais['id']) { ?>
                                                selected
                                                <?php } ?>>{{ $pais['name']}}</option>
                                                @endforeach
                                            </select>
                    </div>


                     <div class="form_row">
                           <select name="DesdeDia_Educacion" id="DesdeDia_Educacion" class="form_select">
                                                       <?php
                                                        for($i = 1; $i <= 12; $i++){
                                                        echo "<option  @if($currentuser->month == $i) selected @endif>" . $i . "</option>";
                                                        }
                                                        ?>
                                                        </select>
                     </div>


                     <div class="form_row">
                          <select name="DesdeMes_Educacion" id="DesdeMes_Educacion" class="form_select">
                                                     <?php
                                                                for($i = date("Y")-100; $i <= date("Y"); $i++){
                                                                echo "<option  @if($currentuser->year == $i) selected @endif>" . $i . "</option>";
                                                                }
                                                                ?>
                                                        </select>
                     </div>
                                  <div class="form_row">

							<textarea class="form_select" placeholder="Curso o especialización ." name="Texto_Educacion" cols="50" rows="10" id="Texto_Educacion"></textarea>
                       </div>

                          <div class="form_row">
                                  <img src="/images/fotos.png" style="cursor:pointer"  width="100%"  id="output8" ></h4>
                          </div>

                <div class="form_row">
                      <input type="file" accept="image/*" multiple style="display:none"  required name="imageneducacion[]" id="imageneducacion"  onchange="loadFile3(event)">
                </div>


                    <br /><br />
                    <input type="submit" class="form_submit"  value="INGRESAR EDUCACIÓN" />
                     </form>

                    <script>
              var loadFile3 = function(event) {
                var reader = new FileReader();
                reader.onload = function(){
                  var output = document.getElementById('output8');
                  output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
              };

        $("#output8").click(function () {
            $("#imageneducacion").trigger('click');
        });
    $('#imageneducacion').on('touchstart', function() { $(this).click();});
</script>

            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
  


<!-- Represent Popup -->
     <div class="popup popup-represent" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>EDITAR/CREAR REPRESENTANTE</h4>
            <br>
            <div class="loginform">
                <form id="ManagerForm" method="post" action="{{ route('cambiarrepresentante') }}">
                   {{csrf_field()}}
                <div class="form_row">

                <input type="text" value="@if($currentuser_represent){{$currentuser_represent->represent_name}}@endif"  placeholder="Nombre*" class="form_select" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    " id="represent_name" name="represent_name"/>
                </div>
                <div class="form_row">
                <input type="text" value="@if($currentuser_represent){{$currentuser_represent->represent_lastname}} @endif"  placeholder="Apellido*" class="form_select" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    " id="manager_lastname" name="represent_lastname"/>
                </div>
                <div class="form_row">
                <input type="text" value="@if($currentuser_represent){{$currentuser_represent->represent_phone}} @endif"  placeholder="Teléfono*" class="form_select" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    " id="represent_phone" name="represent_phone"/>
                </div>
                <div class="form_row">
                <input type="text" value="@if($currentuser_represent){{$currentuser_represent->parentesco}} @endif"  placeholder="Parentesco*" class="form_select" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    " id="parentesco" name="parentesco"/>
                </div>

                <div class="form_row">
                <input type="text" value="@if($currentuser_represent){{$currentuser_represent->represent_email}} @endif"  placeholder="Email*" class="form_select" 
                            style=" background: rgba(0, 0, 0, 0);
                                    border: none;
                                    border-radius: 0px;
                                    border-bottom: 1px solid gray;
                                    outline: none;
                                    color: gray;
                                    " id="represent_email" name="represent_email"/>
                </div>       <br /><br />
                    <input type="submit"   class="form_submit"   value="ACEPTAR" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>


     <!-- Perfil Popup -->
     <div class="popup popup-nacimiento" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>FECHA NACIMIENTO</h4>
            <br>
            <div class="loginform">
       <form id="perfilForm" method="post" action="{{ route('cambiarnac') }}">
  {{csrf_field()}}
                    <div class="form_row">
                           <select name="dia_nacimiento" id="dia_nacimiento" class="form_select">
                                                       <?php
                                                        for($i = 1; $i <= 31; $i++){
                                                        echo "<option  @if($currentuser->month == $i) selected @endif>" . $i . "</option>";
                                                        }
                                                        ?>
                                                        </select>
                     </div>

                     <div class="form_row">
                           <select name="mes_nacimiento" id="mes_nacimiento" class="form_select">
                                                       <?php
                                                        for($i = 1; $i <= 12; $i++){
                                                        echo "<option  @if($currentuser->month == $i) selected @endif>" . $i . "</option>";
                                                        }
                                                        ?>
                                                        </select>
                     </div>


                     <div class="form_row">
                          <select name="anio_nacimiento" id="anio_nacimiento" class="form_select">
                                                     <?php
                                                                for($i = date("Y")-100; $i <= date("Y"); $i++){
                                                                echo "<option  @if($currentuser->year == $i) selected @endif>" . $i . "</option>";
                                                                }
                                                                ?>
                                                        </select>
                     </div>

                    <input type="submit"   class="form_submit"   value="ACEPTAR" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
            <script>
$('#dia_nacimiento').on('touchstart', function() { $(this).focus();});
$('#mes_nacimiento').on('touchstart', function() { $(this).focus();});
$('#anio_nacimiento').on('touchstart', function() { $(this).focus();});
</script>
        </div>
    </div>


 <!-- FIN SECCION POPUPS -->
@endif


 <!-- SECCION SCRIPTS Cargar en las paginas necesarias mediante partial-->
<script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/framework7.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/email.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/circlemenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/audio.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/my-app.js') }}"></script>
 <!-- FIN SECCION SCRIPTS -->




<!-- SECCION SCRIPTS PARA SELECTS (Quitar y dejar solo en Perfil) -->
<script type="text/javascript">



$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


$(document).ready(function(){
 $('.dinamico').change(function(){
    var paiselegido = $("#country_id option:selected").val();
    var select = $(this).attr("id");
    var value = $(this).val();
    var dependent = $(this).data('dependent');
    var _token = '{{csrf_token()}}';
    $.ajax({
           url: "{{ route('fletch')}}",
           method: "POST",
           data:{ select: select, value:value, _token:_token, depedent:dependent, paiselegido:paiselegido },
           success:function(result)
             {
               $('#'+dependent).html(result);
             }
          })
    });   
});




</script>
<script type="text/javascript">
$(document).ready(function(){
 $('.dynamic').change(function(){

    var idtalento1 = $("#principalTalent option:selected").val();
    var idtalento2 = $("#secondaryTalent option:selected").val();
    var idtalento3 = $("#terciaryTalent option:selected").val();
    var select = $(this).attr("id");
    var value = $(this).val();
    var dependent = $(this).data('dependent');
    var _token = $('input[name="_token"]').val();

    $.ajax({
           url: "{{ route('fetch')}}",
           method: "POST",
           data:{ select: select, value:value, _token:_token, depedent:dependent,idtalento1:idtalento1,idtalento2:idtalento2,idtalento3:idtalento3},
           success:function(result)
             {
               $('#'+dependent).html(result);
             }
          })
    });   
});

</script>
<!-- FIN SECCION SCRIPTS PARA SELECTS -->

<!-- MENSAJES DE ERROR -->
@if($errors->any())
<script type="text/javascript">
  var app = new Framework7();

  app.popup('.popup-login');

</script>
@endif
 <!-- FIN MENSAJES DE ERROR -->  

 <!-- MENSAJES DE CONFIRMACION -->
 @if (Session::has('success'))
   <script>
         var myApp = new Framework7();
 
            var $$ = Dom7;
 myApp.alert('<?php echo Session::get("success"); ?>', 'Ivotalents');


</script>
@endif
 <!--FIN MENSAJES DE CONFIRMACION -->   

</body>

</html>
