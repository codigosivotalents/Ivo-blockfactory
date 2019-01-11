<div class="pages">
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
                            <a href="javascript:window.location.replace('/#!/home');" data-panel="left" class="open-panel" >
                                <div class="navbar_right graybg"><img src="images/icons/black/back.png" alt="" title="" /></div>
                            </a>
                            @endif   			
	</div>
     
     <div id="pages_maincontent">
        <h2 class="page_title" style="color: #f7941e; !important;"><b>CARACTERISTICAS FÍSICAS</b></h2>

       <h2 class="page_title" style="color: #f7941e; !important;">FENOTIPO <a  href="#" data-popup=".popup-fenotipo" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h2>
	  
    <div class="page_single layout_fullwidth_padding">  
	  
    <ul class="features_list_detailed">

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/color.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_piel->tono}}</h4>
          <b>Tono de Piel</b></span>.
          </div>
          </li> 
	

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/cuerpo.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_Contextura->contextura}}</h4>
          <b>Contextura Física</b></span>.
          </div>
          </li> 

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/eye.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_Ojos->ojos}}</h4>
          <b>Color de Ojos</b></span>.
          </div>
          </li> 
          

		  
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/map.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_Etnia->etnia}}</h4>
          <b>Etnia</b></a>
          </div>
          </li> 	  
          
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/anteojos.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_Look->look}}</h4>
         <b>Look</b></span>.
          </div>
          </li>
          
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/anchor.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_Tatuajes}}</h4>
         <b>Tatuajes </b> (Indique Si o No).
          </div>
          </li>
           
          
      </ul>
       </div>
     


       <h2 class="page_title" style="color: #f7941e; !important;">TALLAS <a  href="#" data-popup=".popup-tallas" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h2>
	  
    <div class="page_single layout_fullwidth_padding">  
	  
    <ul class="features_list_detailed">

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/orders.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_Camisa->nombre}} {{$currentuser_Tipo_Camisa->camisa}}</h4>
          <b>Talla de Camisa</b>
          </div>
          </li> 
	
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/pantalon.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_Pantalon->nombre}} {{$currentuser_Tipo_Pantalon->pantalon}}</h4>
          <b>Talla de Pantalón</b>
          </div>
          </li> 
          
          <li>
          <div class="feat_small_icon"><img src="images/icons/black/zapato.png" alt="" title="" style="width:80%; height:80%;"/></div>
          <div class="feat_small_details">
          <h4>{{$currentuser_Zapatos->nombre}} {{$currentuser_Tipo_Zapatos->zapatos}}</h4>
          <b>Talla de Zapatos</b>
          </div>
          </li> 
		  
      </ul>
       </div>
     


       <h2 class="page_title" style="color: #f7941e; !important;">MEDIDAS<a  href="#" data-popup=".popup-medidas" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h2>
	  
    <div class="page_single layout_fullwidth_padding">  
	  <ul class="features_list_detailed">

          <li>
          <div class="feat_small_details">
		      <h4>{{$currentuser->altura ? $currentuser->altura : " Altura"}} {{strtoupper($currentuser_Tipo_Altura->altura)}}</h4>
          <b>Altura</b>
          </div>
          </li> 
	
          <li>
          <div class="feat_small_details">
		  		    <h4>{{$currentuser->busto ? $currentuser->busto : " Busto"}} {{strtoupper($currentuser_Tipo_Busto->busto)}}</h4>
          <b>Medida del busto</b>
          </div>
          </li> 
          
          <li>
          <div class="feat_small_details">
		    <h4>{{$currentuser->cintura ? $currentuser->cintura : " Cintura"}} {{strtoupper($currentuser_Tipo_Cintura->cintura)}}</h4>
          <b>Medida de la Cintura</b>
          </div>
          </li> 
		  
          <li>
          <div class="feat_small_details">
		            <h4>{{$currentuser->cadera ? $currentuser->cadera : " Cadera"}} {{strtoupper($currentuser_Tipo_Cadera->cadera)}}</h4>
          <b>Medida de la Cadera</b>
          </div>
          </li> 	  
          
      </ul>
 
       </div>
     
       
      </div>
      
      
    </div>


    
 


  </div>
  
</div>

