<div class="pages">
  <div data-page="videos" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages graybg">
		<div class="navbar_left">
    <div class="logo_text"><a href="javascript:window.location.replace('/#!/home');"><img src="{{ asset('images/logo.svg') }}"
       style="width: 7em;" class="brand-image"></a></div>       </div>			
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
          <h2 class="page_title" style="color: #f7941e; !important;"><b>MIS VIDEOS</b> - {{strtoupper($currentuser->name) }}<a  href="#" data-popup=".popup-videos" class="open-popup"><i class="fas fa-plus-circle"  style="margin-left: 2em"></i></a></h2>
          
          @foreach($videos as $video)
          <form method="post" id="frmEliminarVideo{{$video->id_audio}}" action="{{ route('eliminarvideo', ['id' => $video->id_audio]) }}">
            {{csrf_field()}}
              <div class="page_single layout_fullwidth_padding">
                   
                    <div class="videocontainer"  style="align-content: center">

                            <video height="250" src="https://s3.us-east-2.amazonaws.com/ivotalents{{$video->nombre_fisico}}" width="100%" controls>
                            </video>

                    <!-- <iframe width="100%" height="250" src="https://s3.us-east-2.amazonaws.com/ivotalents{{$video->nombre_fisico}}" frameborder="0"></iframe>  -->
                    </div>
                <h3 class="page_subtitle"><b>{{$video->nombre}}</b> <a href="javascript:document.getElementById('frmEliminarVideo{{$video->id_audio}}').submit();" style="margin-left: 2em" onclick = "if (! confirm('Desea eliminar el video?')) { return false; }"><i class="far fa-trash-alt"></i></a></h3>
                
              </div>
            </form>
           @endforeach
      </div>
    </div>
  </div>
</div>