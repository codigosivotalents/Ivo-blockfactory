@extends('layouts.principal')

@section('content')

  <!-- Slider -->
  <div class="swiper-container swiper-init" data-effect="slide" data-parallax="true" data-pagination=".swiper-pagination" data-paginationClickable="true">
                    <div class="swiper-wrapper">
                    
                      <div class="swiper-slide" style="background-image:url(images/photos/ivo1.jpeg);">
                        <div class="slider_trans">
                            <div class="slider-caption">
                                <h2 data-swiper-parallax="-100%">Creemos en el talento no en la suerte</h2>
                               <span class="subtitle" data-swiper-parallax="-60%">Conectamos los mejores artístas con los mejores proyectos</span>
							   
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
                            <h2 data-swiper-parallax="-100%">Buscas el talento perfecto</h2>
                        <span class="subtitle" data-swiper-parallax="-60%">Descubre una manera más rápida, eficiente y segura de conseguirlo</span>
						@if (Auth::check())	
      @else
                               <a href="#" data-popup=".popup-signup" class="open-popup" style="width: 100%;  padding-left: 5%;  padding-right: 5%;  text-align: center; cursor: pointer; font-size: 3em;font-weight: 300; color: #222222; border: none;  cursor: pointer; -webkit-appearance: none; background-color: #f7941e;"><b>REGÍSTRATE YA</b><a/>
 @endif
 </div>	
                        </div>	
                      </div>
             
	                   </div> 		   
                    </div>


@if($errors->any())
<script type="text/javascript">
  var app = new Framework7();

  

</script>
@endif

@endsection