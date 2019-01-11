<div class="pages">

<script >
.circular-progress {
&,
&:before {
width: 12rem;  --REM no es variable como EM
height: 12rem;
border-radius: 50%;
}
margin: auto;
--pseudo elementos
position: relative;
&:before {
position: absolute;
top: 0;
left: 0;
padding: .5em;
box-sizing: border-box;
font-siza: 2rem;
text-aling: center;
line-height: 10rem;
 }
}

@function progress($percent){
$deg: $percent/100 * 100;
@return #($deg)deg;
}

-- USAR la funcion de porcentaje
ejemplo:
 h1 {
 transform: rotate(progress(20))
 }
 ---------------------
 
 @mixin circular-progress($percent,  $color, $bgcolor){
 $progreso: progress($percent);
 transform: rotate($progreso);
 background: linear-gradient(
0deg,   --para que el color tenue esté arriba
$color 50%,
rgba($color,.2)50%
);
&:before {
color: $color;
content: "#($Porcent)%" --"Prueba 100%"
background: $bgcolor content-box;
transform: rotate(-#{$progreso});
}
.html {
@include circular-progress(
70, 
orange,
#fff
)
}
}

</script>

  <div data-page="features" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages graybg">
		<div class="navbar_left">
    <div class="logo_text"><a href="javascript:window.location.replace('/#!/home');"><img src="{{ asset('images/logo.svg') }}"
       style="width: 7em;" class="brand-image"></a></div>       		</div>			
    <a href="#" data-panel="right" class="open-panel">
      <div class="navbar_right whitebg"><img src="images/icons/black/user.png" alt="" title="" /></div>
    </a>  

    <a href="#" data-panel="left" class="open-panel">
      <div class="navbar_right" style="background: #f7941e; !important;"><img src="images/icons/black/menu.png" alt="" title="" /></div>
    </a>
        @if (Auth::check())  
                           <!-- <a href="javascript:window.location.replace('/#!/home');" data-panel="left" class="open-panel" >
                                <div class="navbar_right graybg"><img src="images/icons/black/back.png" alt="" title="" /></div>
                            </a>-->
                            @endif   		
	</div>
     
     <div id="pages_maincontent">
      <br>
                         <h2 class="page_title ivoColor" style="color: #f7941e; !important;"><b>DATOS PERSONALES</b></h2>
	  
    <div class="page_single layout_fullwidth_padding">  

    @if($currentuser)    
    <ul class="features_list_detailed">

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/user.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a href="#"  data-popup=".popup-name" class="open-popup">{{$currentuser->name ? $currentuser->name : "Nombre y Apellido*"}}</a><a  href="#" data-popup=".popup-name" class="open-popup"><i class="far fa-edit" style="margin-left: 1em"></i></a></h4>
          <a href="#" data-popup=".popup-name" class="open-popup"><b>Nombre y apellido</b></a>
          <div style="float: right;">
            @if($currentuser->name)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
          </div>

          </li> 

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/firma.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a href="#"  data-popup=".popup-artisticname" class="open-popup">{{$currentuser->artisticName ? $currentuser->artisticName : "Nombre Artístico*"}}</a><a  href="#" data-popup=".popup-artisticname" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a><span  style="color:  @if($currentuser ->artisticName) 
          #f04d24
            @else    
            red
            @endif"></span></h4>
          <a href="#" data-popup=".popup-artisticname" class="open-popup"><b>Nombre Artístico</b></a> 
          <div style="float: right;">
            @if($currentuser->artisticName)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
          </div>
          </li> 


          <li>
          <div class="feat_small_icon"><img src="images/icons/black/blog.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a href="#"  data-popup=".popup-nacimiento" class="open-popup">{{$currentuser->day ? $currentuser->day : "Día"}} / {{$currentuser->month ? $currentuser->month : "Mes"}} / {{$currentuser->year ? $currentuser->year : "Año"}}  </a></h4>
          <a href="#" data-popup=".popup-nacimiento" class="open-popup"><b>Fecha de Nacimiento</b></a> 
            <div style="float: right;">
            @if($currentuser->day)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
		  </div>
          </li> 
         
          
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/sexo.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a href="#"  data-popup=".popup-gender" class="open-popup">{{$currentuser_gender->name ? $currentuser_gender->name : "Género*"}}</a><a  href="#" data-popup=".popup-gender" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h4>
          <a href="#" data-popup=".popup-gender" class="open-popup"><b>Género</b></a>
            <div style="float: right;">
            @if($currentuser_gender)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
		  </div>
          </li> 

		  
          	  
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/map.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
            <h4><a href="#" data-popup=".popup-country" class="open-popup">{{$currentuser_country ? $currentuser_country->name : "Pais*"}}, 
            {{$currentuser_province ? $currentuser_province->name : "Provincia*"}} , 
            {{$currentuser_city ? $currentuser_city->name : "Ciudad*"}}</a><a  href="#" data-popup=".popup-country" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h4>
			<a href="#" data-popup=".popup-country" class="open-popup"><b>País, Provincia y Ciudad</b> de Nacimiento</a>
            <div style="float: right;">
            @if($currentuser_country)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
		  </div>
          </li> 	

		  
		
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/idioma.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4> <a href="#" data-popup=".popup-idioma" class="open-popup">{{$currentuser_Idioma1->idioma}}, {{$currentuser_Idioma2->idioma}}, {{$currentuser_Idioma3->idioma}}</a><a  href="#" data-popup=".popup-idioma" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h4>
          <a href="#" data-popup=".popup-idioma" class="open-popup"><b>Idiomas</b> (Puede seleccionar hasta 3).</a>
            <div style="float: right;">
            @if($currentuser_Idioma1->idioma)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
		  </div>
          </li>
          
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/pasaporte.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a  href="#" data-popup=".popup-nacionalidad" class="open-popup">{{$currentuser->nacionalidad ? $currentuser->nacionalidad : "Nacionalidad*"}}</a><a  href="#" data-popup=".popup-nacionalidad" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h4>
          <a  href="#" data-popup=".popup-nacionalidad" class="open-popup"><b>Nacionalidad</b></a>
            <div style="float: right;">
            @if($currentuser->nacionalidad)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
		  </div>
          </li>


           <li>
          <div class="feat_small_icon"><img src="images/icons/black/contact.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4> <a  href="#">{{$currentuser->email ? $currentuser->email : "correo@dominio.com*"}}</a></h4>
          <a href="#"><b>Email principal</b></a>
  <div style="float: right;">
            @if($currentuser->email)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>         
		 </div>
          </li>
                    


          <li>
          <div class="feat_small_icon"><img src="images/icons/black/contact.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4> <a  href="#"  data-popup=".popup-email" class="open-popup">{{$currentuser->email2 ? $currentuser->email2 : "correo@dominio.com*"}}</a><a  href="#" data-popup=".popup-email" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h4>
          <a href="#"><b>Email Secundario</b></a>
            <div style="float: right;">
            @if($currentuser->email2)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
		  </div>
          </li>        

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/mobile.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a  href="#">{{$currentuser->phone_number ? $currentuser->dialcode." ".$currentuser->phone_number : " +507 0000.0000"}}</a></h4>
          <a  href="#"><b>Número de Teléfono</b></a>
            <div style="float: right;">
            @if($currentuser->dialcode)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
		  </div>
          </li>

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/facebook.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4> <a  href="#" data-popup=".popup-redes" class="open-popup">facebook.com/{{$currentuser->facebook ? $currentuser->facebook : "Facebook*"}}</a><a  href="#" data-popup=".popup-redes" class="open-popup"><i class="far fa-edit" style="margin-left: 1.5em"></i></a></h4>
          <a  href="#" data-popup=".popup-redes" class="open-popup"><b>Facebook</b></a>
            <div style="float: right;">
            @if($currentuser->facebook)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
		  </div>
          </li>

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/insta.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a  href="#" data-popup=".popup-redes" class="open-popup">instagram.com/{{$currentuser->instagram ? $currentuser->instagram : "Instagram*"}}</a><a  href="#" data-popup=".popup-redes" class="open-popup"><i class="far fa-edit" style="margin-left: 1.5em"></i></a></h4>
          <a  href="#" data-popup=".popup-redes" class="open-popup"><b>Instagram</b></a>
  <div style="float: right;">
            @if($currentuser->instagram)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>         
		 </div>
          </li>

            
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/twitter.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a  href="#" data-popup=".popup-redes" class="open-popup">@ {{$currentuser->twitter ? $currentuser->twitter : "Twitter*"}}</a><a  href="#" data-popup=".popup-redes" class="open-popup"><i class="far fa-edit" style="margin-left: 1.5em"></i></a></h4>
          <a  href="#" data-popup=".popup-redes" class="open-popup"><b>Twitter</b></a>
            <div style="float: right;">
            @if($currentuser->twitter)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/unChecked.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>
		  </div>
          </li>
          
      </ul>
      @endif
       </div>
	   
	   
	   <?php 
 $dife = date("Y") - $currentuser->year;

if($dife < 18){
?>

        <form id="frmEliminarrep" method="post" action="{{ route('eliminarrepresentante') }}">
            {{csrf_field()}}
             <br>
       <h2 class="page_title">REPRESENTANTE<a  href="#" data-popup=".popup-represent" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a>
        
         @if($currentuser_represent)          
        <a href="javascript:document.getElementById('frmEliminarrep').submit();" style="margin-left: 2em" onclick = "if (! confirm('Desea eliminar al Representante?')) { return false; }"><i class="far fa-trash-alt"></i></a>
         @endif

</h2>

       </form>



    <div class="page_single layout_fullwidth_padding">  
    
    <ul class="features_list_detailed">
    @if(!$currentuser_represent)
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/manager.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>No Posee Representante siendo Menor de Edad*</h4>
          <a  href="#" data-popup=".popup-represent" class="open-popup"><b>Si desea incluir uno haga click</b> <span style="color:#f04d24"><b>Aquí.</b></span></a></div>
<div style="float: right;">
            @if($currentuser_represent)
            <img src="images/icons/black/ok.png" alt="" title="" style="width:35px; height:35px;"/>
             @else
            <img src="images/icons/black/alert.png" alt="" title="" style="width:35px; height:35px;"/>
             @endif
          </div>         
		 </li> 
    @endif

    @if($currentuser_represent)
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/pencil.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_represent->represent_name ? $currentuser_represent->represent_name : "Nombre del Representante"}} {{$currentuser_represent->represent_lastname ? $currentuser_represent->represent_lastname : "Apellido del Representante"}}</h4>
          <b>Nombre del Manager</b></div>
          </li> 
    @endif
    @if($currentuser_represent)
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/contact.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_represent->represent_email ? $currentuser_represent->represent_email : "correo@dominio.com"}}</h4>
          <b>Mail del Representante</b></div>
          </li> 
    @endif
    @if($currentuser_represent)
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/mobile.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_represent->represent_phone ? $currentuser_represent->represent_phone : "+507 0000.0000"}}</h4>
          <b>Telefono del Representante</b></div>
          </li> 
    @endif
      </ul>
    </div>

<?php } ?>

        <br>
     <h2 class="page_title">TALENTOS</h2>
    
    <div class="page_single layout_fullwidth_padding">  
    
    <ul class="features_list_detailed">

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/star.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a  href="#" data-popup=".popup-talenta" class="open-popup">{{$currentuser_Talento1->talentos}} </a><a  href="#" data-popup=".popup-talenta" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h4>
          <a  href="#" data-popup=".popup-talenta" class="open-popup"><b>{{$currentuser_Talento_Genero1->nombre}}</b>  | <b>{{$currentuser_Talento_Categoria1->nombre}}</b> | <b>{{$currentuser_Talento_Especialidad1->nombre}}</b></a>
     
		  </div>
          </li> 
  
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/star.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a  href="#" data-popup=".popup-talentb" class="open-popup">{{$currentuser_Talento2->talentos}} </a><a  href="#" data-popup=".popup-talentb" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h4>
          <a  href="#" data-popup=".popup-talentb" class="open-popup"><b>{{$currentuser_Talento_Genero2->nombre}}</b>  | <b>{{$currentuser_Talento_Categoria2->nombre}}</b> | <b>{{$currentuser_Talento_Especialidad2->nombre}}</b></a>
          </div>
          </li> 
          
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/star.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4><a  href="#" data-popup=".popup-talentc" class="open-popup">{{$currentuser_Talento3->talentos}} </a><a  href="#" data-popup=".popup-talentc" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h4>
          <a  href="#" data-popup=".popup-talentc" class="open-popup"><b>{{$currentuser_Talento_Genero3->nombre}}</b>  | <b>{{$currentuser_Talento_Categoria3->nombre}}</b> | <b>{{$currentuser_Talento_Especialidad3->nombre}}</b></a>
          </div>
          </li> 
      
      </ul>
    </div>




        <form id="frmEliminar" method="post" action="{{ route('eliminarmanager') }}">
            {{csrf_field()}}
             <br>
       <h2 class="page_title">MANAGER<a  href="#" data-popup=".popup-manager" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a>
        
         @if($currentuser_manager)          
        <a href="javascript:document.getElementById('frmEliminar').submit();" style="margin-left: 2em" onclick = "if (! confirm('Desea eliminar al Manager?')) { return false; }"><i class="far fa-trash-alt"></i></a>
         @endif

</h2>
	     </form>



    <div class="page_single layout_fullwidth_padding">  
	  
    <ul class="features_list_detailed">
    @if(!$currentuser_manager)
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/manager.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>No Posee Manager*</h4>
          <a  href="#" data-popup=".popup-manager" class="open-popup"><b>Si desea incluir uno haga click</b> <span style="color:#f04d24"><b>Aquí.</b></span></a></div>
          </li> 
    @endif

    @if($currentuser_manager)
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/pencil.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_manager->manager_name ? $currentuser_manager->manager_name : "Nombre del Manager"}} {{$currentuser_manager->manager_lastname ? $currentuser_manager->manager_lastname : "Apellido del Manager"}}</h4>
          <b>Nombre del Manager</b></div>
          </li> 
    @endif
    @if($currentuser_manager)
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/contact.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_manager->manager_email ? $currentuser_manager->manager_email : "correo@dominio.com"}}</h4>
          <b>Mail del Manager</b></div>
          </li> 
    @endif
    @if($currentuser_manager)
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/mobile.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_manager->manager_phone ? $currentuser_manager->manager_phone : "+507 0000.0000"}}</h4>
          <b>Teléfono del Manager</b></div>
          </li> 
    @endif
      </ul>
    </div>







      </div>
      
      
    </div>



  </div>
  
</div>

