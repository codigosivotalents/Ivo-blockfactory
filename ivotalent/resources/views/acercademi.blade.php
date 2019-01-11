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
          <h2 class="page_title" style="color: #f7941e; !important;"></h2>	  
    <div class="page_single layout_fullwidth_padding">  

    @if($currentuser)    
    <ul class="features_list_detailed">

          <li>
          <div class="feat_small_icon"><img src="images/icons/black/acerca.png" alt="" title="" /></div>
          <div class="feat_small_details">
          <h4><a href="#"  data-popup=".popup-acercademi" class="open-popup">ACERCA DE MÍ</a><a  href="#" data-popup=".popup-acercademi" class="open-popup"><i class="far fa-edit" style="margin-left: 2em"></i></a></h4>
          <a href="#" data-popup=".popup-acercademi" class="open-popup">{{$currentuser->AcercaDeMi ? $currentuser->AcercaDeMi : "Acerca de mí *"}}</a>
          </div>
          </li> 

          
      </ul>
      @endif
       </div>
	   

      </div>
      
      
    </div>



  </div>
  
</div>

