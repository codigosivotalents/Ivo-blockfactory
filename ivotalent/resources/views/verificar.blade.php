<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
            <li><a href="javascript:window.location.replace('<?php echo URL::route('welcome'); ?>');" class="close-panel" data-view=".view-main"><img src="images/icons/black/home.png" alt="" title="" /><span>Principal</span></a></li>
            <li><a href="javascript:window.location.replace('/#!/home');" class="close-panel" data-view=".view-main"><img src="images/icons/black/user.png" alt="" title="" /><span>Perfil</span></a></li>

            <li><a href="javascript:window.location.replace('/#!/fotos');" class="close-panel" data-view=".view-main"><img src="images/icons/black/photos.png" alt="" title="" /><span>Fotos</span></a></li>
      <li><a href="javascript:window.location.replace('/#!/videos');" class="close-panel" data-view=".view-main"><img src="images/icons/black/video.png" alt="" title="" /><span>Videos</span></a></li>
            <li><a href="javascript:window.location.replace('/#!/audios');" class="close-panel" data-view=".view-main"><img src="images/icons/black/audio.png" alt="" title="" /><span>Audios</span></a></li>
            
      <li><a href="javascript:window.location.replace('/#!/reconocimiento');" class="close-panel" data-view=".view-main"><img src="images/icons/black/trophy.png" alt="" title="" /><span>Premios</span></a></li>
      <li><a href="javascript:window.location.replace('/#!/experiencia');" class="close-panel" data-view=".view-main"><img src="images/icons/black/star.png" alt="" title="" /><span>Experiencias</span></a></li>
            <li><a href="javascript:window.location.replace('/#!/educacion');" class="close-panel" data-view=".view-main"><img src="images/icons/black/study.png" alt="" title="" /><span>Educacion</span></a></li>  
            @if($currentuser_manager)
                @if($currentuser_manager->manager_name)
                <li><a href="javascript:window.location.replace('/#!/manager');" class="close-panel" data-view=".view-main"><img src="images/icons/black/manager.png" alt="" title="" /><span>Manager</span></a></li>
                @endif
            @endif
            <!-- <li><a href="#" data-popup=".popup-login" class="open-popup close-panel"><img src="images/icons/black/lock.png" alt="" title="" /><span>Login</span></a></li>
             -->
      <li><a href="javascript:window.location.replace('/#!/acercademi');" class="close-panel" data-view=".view-main"><img src="images/icons/black/acerca.png" alt="" title="" /><span>Sobre Mi</span></a></li>
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
                  <div class="user_avatar"><img src="{{$currentuser->avatar}}" alt="" title="" /></div>       

                  @else
                  <div class="user_avatar"><img src="images/avatar.png" alt="" title="" /></div>       
                  @endif
                   @endif
                </div>
        
                  <nav class="user-nav">
                    <ul>
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
    <div class="logo_text"><a href=""><img src="{{ asset('images/logo.svg') }}"
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
                           @if (Auth::check())  
                            <a href="javascript:window.location.replace('<?php echo URL::route('welcome'); ?>');" data-panel="left" class="open-panel" >
                                <div class="navbar_right graybg"><img src="images/icons/black/back.png" alt="" title="" /></div>
                            </a>
                            @endif  
                        </div>





  <!-- Slider -->
  <div class="swiper-container swiper-init" data-effect="slide" data-parallax="true" data-pagination=".swiper-pagination" data-paginationClickable="true">
                    <div class="swiper-wrapper">
                    
                      <div class="swiper-slide" style="background-image:url(images/photos/ivo1.jpeg);">
                        <div class="slider_trans">
                            <div class="slider-caption">
                                 <h2 data-swiper-parallax="-100%">Únete a la plataforma con la mayor variedad de castings online</h2>
                               <span class="subtitle" data-swiper-parallax="-60%">Contactamos los mejores artistas con los mejores proyctos.</span>
                 
                                  @if (Auth::check()) 
                                      @else
                                       <a href="#" data-popup=".popup-signup" class="open-popup" style="width: 100%;  padding-left: 5%;  padding-right: 5%;  text-align: center; cursor: pointer; font-size: 3em;font-weight: 300; color: #222222; border: none;  cursor: pointer; -webkit-appearance: none; background-color: #f7941e;"><b>REGÍSTRATE YA</b><a/>
                                    @endif
                                   </div>
                                                        </div> 
                                                       </div>
                                                      <div class="swiper-slide" style="background-image:url(images/photos/ivo2.jpeg);">
                                                        <div class="slider_trans">      
                                                            <div class="slider-caption">
                                                              <h2 data-swiper-parallax="-100%">Únete a la plataforma con la mayor variedad de talentos artísticos online</h2>
                        <span class="subtitle" data-swiper-parallax="-60%">Conectamos los mejores talentos para tu proyecto</span>
            @if (Auth::check()) 
                                      @else
                                                               <a href="#" data-popup=".popup-signup" class="open-popup" style="width: 100%;  padding-left: 5%;  padding-right: 5%;  text-align: center; cursor: pointer; font-size: 3em;font-weight: 300; color: #222222; border: none;  cursor: pointer; -webkit-appearance: none; background-color: #f7941e;"><b>REGÍSTRATE YA</b><a/>
                                 @endif
                                 </div> 
                        </div>  
                      </div>
             
                     </div>        
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

  
    
    @if($currentuser)   
   
  
     <!-- Perfil Popup -->
     <div class="popup popup-profile" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>CAMBIAR PERFIL</h4>
            <br>
            <div class="loginform">
              <div class="form_row">
                <form id="perfilForm" method="post" action="{{ route('cambiarperfil') }}">
                {{csrf_field()}}
                <select name="profiler" id="profiler" class="form_select" style="width: 100%; height: 55px; z-index: 1000;">

                    <option value="0"> Seleccionar Perfil*</option>
                    <option value="1"> Talento </option>
                    <option value="2"> Empresa </option>
                    <option value="3"> Freelance </option>


                  </select>       <br /><br />
                   </div>

                  

                    <input type="submit"   class="form_submit"   value="CAMBIAR PERFIL" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
            <script>
$('#profiler').on('touchstart', function() { $(this).focus();});
</script>
        </div>
    </div>





     <!-- Perfil Popup -->
     <div class="popup popup-terms" style="opacity: 0.95;">
        <div class="content-block">
            <h4><img src="images/photos/ivo-logo-rectangular-color.jpg" style="width:65%; height:35%;"/></h4>

            <h4>TÉRMINOS Y CONDICIONES</h4>
            <br>
            <div class="loginform">
              <div class="form_row">
                <form id="perfilForm" method="post" action="{{ route('aceptarterminos') }}">
                {{csrf_field()}}
                <div class="form_select" style="width: 100%; z-index: 1000;  height: 200px;
    overflow-y: scroll;">
                  <p>
               @foreach($currentuserTerminos as $ciudad)
                   {{ $ciudad['termino']}}
                  @endforeach
                  </p>
 
                  </div>       <br /><br />
                   </div>

                  

                    <input type="submit"   class="form_submit"   value="ACEPTO LOS TÉRMINOS Y CONDICIONES" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
            <script>
</script>
        </div>
    </div>




@endif




<script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/framework7.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/email.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/circlemenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/audio.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/my-app.js') }}"></script>


<script type="text/javascript">

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

</script>

  @if(!$currentuser->profile)
         
         <script type="text/javascript">
  var app = new Framework7();

  app.popup('.popup-profile');
</script>

  @endif


  @if((!$currentuser->termino_accept)&&($currentuser->profile))
 <script type="text/javascript">
  var app = new Framework7();

  app.popup('.popup-terms');

</script>
         
 @endif
         
 
</body>


</html>
