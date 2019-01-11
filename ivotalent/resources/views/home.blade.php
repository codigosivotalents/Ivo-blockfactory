
<div class="pages">
  <div data-page="features" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages graybg">
		<div class="navbar_left">
    <div class="logo_text"><a href="javascript:window.location.replace('/#!/home');"><img src="{{ asset('images/logo.svg') }}"
       style="width: 7em;" class="brand-image"></a></div>       
		</div>			
    <a href="#" data-panel="right" class="open-panel">
      <div class="navbar_right whitebg"><img src="images/icons/black/user.png" alt="" title="" /></div>
    </a>  

    <a href="#" data-panel="left" class="open-panel" >
      <div class="navbar_right" style="background: #f7941e; !important;"><img src="images/icons/black/menu.png" alt="" title="" /></div>
    </a>

	</div>
     
     <div id="pages_maincontent">
      
       <div class="page_single layout_fullwidth_padding" style="border-bottom: 1px #f7941e solid;">  

        <div style="width: auto; padding: 15px; float: left;">
           @if ($currentuser)
                  @if ($currentuser->avatar)
          <img src=" {{$currentuser->avatar}}" style="width: 12em;height: 12em;
                border-radius: 50%;
                margin: auto;
                border-radius: 50%;
                margin: auto;" alt="" title="">
                            @else
                               <img src="images/avatar.png" style="width: 12em;height: 12em;
                border-radius: 50%;
                margin: auto;
                border-radius: 50%;
                margin: auto;" alt="" title="">
                @endif
            @endif
        </div>

        <div style="padding: 15px; padding-top: 2em; float: left; align-items: center; height: : 100%">
              <h4 style="font-weight: 700; font-size: 25px; padding: 0 0 5px 0; margin: 0px;">{{$currentuser->name ? $currentuser->name : "Nombre Apellido*"}}</h4>
              <h4 style="  font-size: 20px; padding: 0 0 5px 0; margin: 0px;">{{$currentuser->artisticName ? $currentuser->artisticName : "Nombre Artistico"}}</h4>
              <h4 style="  font-size: 20px; padding: 0 0 5px 0; margin: 0px;">{{$currentuser_Talento1->talentos ? $currentuser_Talento1->talentos : "Talento"}}</a></h4>
              <h4 style="  font-size: 20px; padding: 0 0 5px 0; margin: 0px;">{{$currentuser_country ? $currentuser_country->name : "País de Residencia*"}}</h4>


        </div>
    </div>

                         <h2 class="page_title" style="color: #f7941e; !important;"><b>INFORMACIÓN DEL TALENTO</b></h2>

    <div class="page_single layout_fullwidth_padding">  

    @if($currentuser)    
    <ul class="features_list_detailed">

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/user.png" alt="" title="" style="width:70%; height:70%;" /></div>
          <div class="feat_small_details">
          <h4><a href="perfil">Perfil de Talento</a></h4>
          <a href="perfil"><b>Nombre y apellido</b></a>
          </div>
          </li> 
          
          <!-- CREAR TABLA DE CARACTERISTICAS POR TALENTO Y ASIGNARLE VALORES -->
          @if(($currentuser->principalTalent == 2)||($currentuser->principalTalent == 8)||($currentuser->principalTalent == 3)||($currentuser->principalTalent == 12)||($currentuser->secondaryTalent == 2)||($currentuser->secondaryTalent == 8)||($currentuser->secondaryTalent == 3)||($currentuser->PrincipalTalent == 12)||($currentuser->terciaryTalent == 2)||($currentuser->terciaryTalent == 8)||($currentuser->terciaryTalent == 3)||($currentuser->terciaryTalent == 12))
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/adn.png" alt="" title="" style="width:80%; height:80%;" /></div>
          <div class="feat_small_details">
          <h4><a href="fenotipo">Caracteristicas Físicas</a></h4>
          <a href="fenotipo"><b>Talla y características</b></a>
          </div>
          </li> 
          @endif	 

          <!-- CREAR TABLA DE CARACTERISTICAS POR TALENTO Y ASIGNARLE VALORES -->
           @if(($currentuser->principalTalent == 4)||($currentuser->principalTalent == 6)||($currentuser->principalTalent == 11)||($currentuser->secondaryTalent == 4)||($currentuser->secondaryTalent == 6)||($currentuser->secondaryTalent == 11)||($currentuser->terciaryTalent == 4)||($currentuser->terciaryTalent == 6)||($currentuser->terciaryTalent == 11)) 
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/photos.png" alt="" title="" style="width:80%; height:80%;" /></div>
          <div class="feat_small_details">
          <h4><a href="#">Mis Indicadores</a></h4>
          <a href="#"><b>Información cargada </b></span></a>
          </div>
          </li>
          @endif  
		      <li>
          <div class="feat_small_icon"><img src="images/icons/black/photos.png" alt="" title="" style="width:70%; height:70%;" /></div>
          <div class="feat_small_details">
          <h4><a href="fotos">Galería de Fotos</a></h4>
          <a href="fotos"><b>Galería cargada</b></span></a>
          </div>
          </li> 
		  
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/video.png" alt="" title="" style="width:70%; height:70%;"/></div>
          <div class="feat_small_details">
          <h4><a href="videos">Galería de Vídeos</a></h4>
          <a href="videos"><b>Vídeos subidos</b></a>
          </div>
          </li> 	

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/acerca.png" alt="" title="" style="width:70%; height:70%;"/></div>
          <div class="feat_small_details">
          <h4> <a href="acercademi">Acerca de Mí</a></h4>
          <a href="acercademi"><b>Información extra</b></span></a>
          </div>
          </li>
           <!-- CREAR TABLA DE CARACTERISTICAS POR TALENTO Y ASIGNARLE VALORES -->
          @if(($currentuser->principalTalent == 9)||($currentuser->principalTalent == 7)||($currentuser->principalTalent == 5)||($currentuser->principalTalent == 10)||($currentuser->secondaryTalent == 9)||($currentuser->secondaryTalent == 7)||($currentuser->secondaryTalent == 5)||($currentuser->principalTalent == 10)||($currentuser->terciaryTalent == 9)||($currentuser->terciaryTalent == 7)||($currentuser->terciaryTalent == 5)||($currentuser->terciaryTalent == 10))
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/audio.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a  href="audios">Galería de Audios</a></h4>
          <a  href="audios"><b>Audios</b></a>
          </div>
          </li>
          @endif  
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/trophy.png" alt="" title="" style="width:70%; height:70%;"/></div>
          <div class="feat_small_details">
          <h4> <a  href="reconocimiento">Reconocimientos</a></h4>
          <a href="reconocimiento"><b>Logros conseguidos </b> </a>
          </div>
          </li>
          
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/study.png" alt="" title="" style="width:65%; height:65%;"/></div>
          <div class="feat_small_details">
          <h4><a  href="educacion">Educación</a></h4>
          <a  href="educacion"><b>Educación</b></a>
          </div>
          </li>

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/star.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4> <a  href="experiencia">Experiencia</a></h4>
          <a  href="experiencia"><b>Trabajos anteriores</b></a>
          </div>
          </li>

         
      </ul>
      @endif
       </div>
	   
        
      </div>
        
      
    </div>


  </div>
  
</div>

