<div class="pages">
  <div data-page="music" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages graybg">
		<div class="navbar_left">
	<div class="logo_text"><a href="javascript:window.location.replace('/#!/home');"><img src="{{ asset('images/logo.svg') }}"
       style="width: 7em;" class="brand-image"></a></div>     	</div>			
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
          <h2 class="page_title" style="color: #f7941e; !important;"><b>AUDIOS</b> - {{strtoupper($currentuser->name) }}<a  href="#" data-popup=".popup-audios" class="open-popup"><i class="fas fa-plus-circle"  style="margin-left: 2em"></i></a></h2>
	  
	<div class="page_single layout_fullwidth_padding">	
	 
	 <ul class="music_list">
	 @foreach($audios as $audio)
	 <form method="post" id="frmEliminar{{$audio->id_audio}}" action="{{ route('eliminaraudio', ['id' => $audio->id_audio]) }}">
            {{csrf_field()}}
	 <li>
	 <h4>{{$audio->nombre}} <span>{{$audio->nombre}}</span><a href="javascript:document.getElementById('frmEliminar{{$audio->id_audio}}').submit();" style="margin-left: 2em" onclick = "if (! confirm('Desea eliminar el audio?')) { return false; }"><i class="far fa-trash-alt"></i></a></h4> 
	 <audio src="https://s3.us-east-2.amazonaws.com/ivotalents{{$audio->nombre_fisico}}" preload="auto"></audio>
	 </li>
	</form>
	 @endforeach
	 
         </div>
      
      </div>
      
      
    </div>
  </div>
</div>