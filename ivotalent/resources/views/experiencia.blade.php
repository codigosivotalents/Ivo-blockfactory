<div class="pages">
  <div data-page="blog" class="page no-toolbar no-navbar">
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
                            <!--<a href="javascript:window.location.replace('/#!/home');" data-panel="left" class="open-panel" >
                                <div class="navbar_right graybg"><img src="images/icons/black/back.png" alt="" title="" /></div>
                            </a>-->
                            @endif  			
	</div>
	
     <div id="pages_maincontent">
      <h2 class="page_title" style="color: #f7941e; !important;"><b>EXPERIENCIAS</b> - {{strtoupper($currentuser->name) }}<a  href="#" data-popup=".popup-experiencias" class="open-popup"><i class="fas fa-plus-circle"  style="margin-left: 2em"></i></a></h2>
     <div class="page_single layout_fullwidth_padding">  
   
            <div class="list-block">
              <ul class="posts">

        @foreach ($currentExperiencias as $ed)
         <form method="post" id="frmEliminarExp{{$ed->id}}" action="{{ route('eliminarexperiencia', ['id' => $ed->id]) }}">
            {{csrf_field()}}
                <li class="swipeout" style="margin-bottom: 10px">
                  <div class="swipeout-content item-content">
                    <div class="post_entry">
                        <div class="post_thumb">

                               @if ($ed->Imagen)
                                 <img src="{{$ed->Imagen}}"
                                    style="width: 15em; "   alt="" title="" />  
                                @else
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4NWO61pCCzLTe6L0FXeVgkdT3bsHjnOVAAqo-0TA6UeG-eoLg"
                                    style="width: 15em;"  alt="" title="" />  
                                @endif
                        </div>
                        <div class="post_details">
                  <div class="post_category">
                          <h3 style="font-weight:bold;" href="#">{{strtoupper($ed->Titulo)}}</h3></div>	
                          <h4><a href="#">{{$ed->Empresa}}</a></h4>
                          <h4><a href="#">{{$ed->Rol}}</a></h4>			
                          <h4><a href="#">{{$ed->Locacion}}</a></h4> 
                          <h4><a href="#">{{$ed->Desde}}</a></h4> 
                          <div style="word-wrap: break-word;">
                          <h2><a href="#"> {{str_limit($ed->Texto , $limit = 100, $end = '...') }}</a></h2>
                          </div>
                        </div>
                        <div class="post_swipe"><img src="images/swipe_more.png" alt="" title="" /></div>
                    </div>
                  </div>
                  <div class="swipeout-actions-right">
                    <a href="#" class="action1"><img src="images/icons/black/message.png" alt="" title="" /></a>
                    <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="images/icons/black/like.png" alt="" title="" /></a>
                    <a style="color: red" href="javascript:document.getElementById('frmEliminarEd{{$ed->id}}').submit();" onclick = "if (! confirm('Desea eliminar la educacion?')) { return false; }" class="action1 open-popup" data-popup=".popup-social"><img src="images/icons/black/trash.png" alt="" title="" /></a>
                  </div>
                </li>
                    </form>
                @endforeach

              </ul>
              
           <!-- <div id="loadMore">Cargar Mas</div> -->
            <div id="showLess">Fin</div> 
            </div>
			
       </div>		
      
      </div>
      
      
    </div>
  </div>
</div>