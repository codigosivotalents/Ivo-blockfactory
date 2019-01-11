<div class="pages">
  <div data-page="photos" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages graybg">
		<div class="navbar_left">
    <div class="logo_text"><a href="javascript:window.location.replace('/#!/home');"><img src="{{ asset('images/logo.svg') }}"
       style="width: 7em;" class="brand-image"></a></div>       	</div>			
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
     
   <div class="bottombarpages">
       <div class="gallery_switch">        
        <a href="#" id="view13" class="switcher active"><img src="images/switch_13_active.png" alt="Grid"></a>
        <a href="#" id="view12" class="switcher"><img src="images/switch_12.png" alt="Grid"></a>
        <a href="#" id="view11" class="switcher"><img src="images/switch_11.png" alt="List"></a>
      </div>
     </div> 
 
    
    <div id="pages_maincontent">
                     
      <h2 class="page_title" style="color: #f7941e; !important;"><b>FOTOS</b> - {{strtoupper($currentuser->name) }}<a  href="#" data-popup=".popup-fotos" class="open-popup"><i class="fas fa-plus-circle"  style="margin-left: 2em"></i></a></h2>
			  
<div class="page_single layout_fullwidth">	  

              <div class="photo-categories">
              <?php $numeral = 0; ?>
                @foreach($galerias as $galeria)
                 <form method="post" id="frmEliminarGaleria{{str_replace(' ', '-', $galeria->galeria).$numeral}}" action="{{ route('eliminarfoto', ['id' => $galeria->galeria]) }}">
                   {{csrf_field()}}
                      <a href="#{{str_replace(' ', '-', $galeria->galeria).$numeral}}" class="tab-link active category-link">{{$galeria->galeria}} <i onclick = "if (! confirm('Desea eliminar la galeria?')) { return false; }else{document.getElementById('frmEliminarGaleria{{str_replace(' ', '-', $galeria->galeria).$numeral}}').submit()}"class="far fa-trash-alt" style="float:right; padding-right: 15px"></i></a>
                      <?php $numeral = $numeral + 1; ?>
                    </form>
                @endforeach
              </div>
              <div class="tabs-animated-wrap photos_tabs">
                    <div class="tabs">
                    <?php $numeral = 0; ?>
                    @foreach($galerias as $galeria)
                      <div id="{{str_replace(' ', '-', $galeria->galeria).$numeral}}" class="tab <?php if($numeral == 0){?> active <?php } ?>">                       
                             <ul id="photoslist" class="photo_gallery_13">
                             @foreach($fotos as $foto)
                               @if($foto->galeria == $galeria->galeria)
                                <li  style="margin: 1px"><a rel="gallery-3" href="https://s3.us-east-2.amazonaws.com/ivotalents/files/images/{{$foto->usuario_id}}/{{$foto->nombre_fisico}}" title="Photo title" class="swipebox">
                                <img src="https://s3.us-east-2.amazonaws.com/ivotalents/files/images/{{$foto->usuario_id}}/{{$foto->nombre_fisico}}" alt="image" /></a></li>
                                @endif
                              @endforeach
                               <div class="clearleft" style="background: #fb9800; !important;"></div>
                              </ul>   
                          </div>
                          <?php $numeral = $numeral + 1; ?>
                          @endforeach
                         
                    </div>
              </div> 

   </div>                       
     <div class="clearleft"></div> 
      </div>
      
      
    </div>
  </div>
</div>
