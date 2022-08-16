<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Marpe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/marpe/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/marpe/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/marpe/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/marpe/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/marpe/datatable_1.10.16.css')}}">
    <link rel="stylesheet" href="{{asset('css/marpe/datatable_resposive_2_2_1.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="{{asset('js/marpe/summernote-0.8.18-dist/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('css/marpe/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/marpe/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/marpe/fonts/flaticon/font/flaticon.css')}}">    
    <link rel="stylesheet" href="{{asset('css/marpe/style_marpe.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}"/>
  </head>
  <body>
		<div class="wrap">
	    <div class="container">
				<div class="row justify-content-between">
					<div class="col-3 d-flex align-items-center">
						<a class="navbar-brand d-flex" href="{{url('/')}}">
							<div class="icon d-flex align-items-center justify-content-center">
							</div>
						</a>
					</div>
					<div class="col-3 d-flex justify-content-end align-items-center">
						<div class="social-media">							
			    		<p class="mb-0 d-flex">			    			
			    			@if(isset($RRSS['fbInput']))
			    				<a href="{{$RRSS['fbInput']}}" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			@endif

			    			@if(isset($RRSS['twInput']))
			    				<a href="{{$RRSS['twInput']}}" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			@endif

			    			@if(isset($RRSS['igInput']))
			    				<a href="{{$RRSS['igInput']}}" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>			    			
			    			@endif
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
		
		<section class="menu-wrap flex-md-column-reverse d-md-flex">
			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		    
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      	<!--<div class="req-button order-lg-last">
		      		<a href="#">Request A Quote</a>
	        	</div>-->
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav mr-auto">		        
		        	<li class="nav-item {{ ($Contenido['section'] == 'Inicio') ? 'active' : '' }}"><a href="{{url('/')}}" class="nav-link">Inicio</a></li>
		        	<li class="nav-item {{ ($Contenido['section'] == 'Nosotros') ? 'active' : '' }}"><a href="{{url('nosotros')}}" class="nav-link">Nosotros</a></li>
		        	<li class="nav-item {{($Contenido['section'] == 'Productos') ? 'active' : '' }}"><a href="{{url('catalogo')}}" class="nav-link">Productos</a></li>
		        	<!--<li class="nav-item"><a href="project.html" class="nav-link">Project</a></li>
		        	<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>-->
		          	<li class="nav-item {{($Contenido['section'] == 'Contacto') ? 'active' : '' }}""><a href="{{url('contacto')}}" class="nav-link">Contacto</a></li>
		        </ul>
		      </div>
		    </div>
		  </nav>
	    <!-- END nav -->
	    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/mmrpe.png'); background-position: 50% 50%;" >    
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-end">
	          <div class="col-md-9 ftco-animate pb-5">
	          	<p class="breadcrumbs mb-2">
	          		<span class="mr-2">
	          			<a href="{{url('/')}}">Inicio 
	          				<i class="fa fa-chevron-right"></i>
	          			</a>
	          		</span> 
	          		
	          		@if($Contenido['section'] != 'Inicio')
	          		<span> {{$Contenido['section']}}
	          			<i class="fa fa-chevron-right"></i>
	          		</span>
	          		@endif
	          	</p>
	            <h1 class="mb-0 bread">{{$Contenido['section']}}</h1>
	          </div>
	        </div>
	      </div>
	    </div>
		</section>
				@yield('content')
	    <footer class="footer ftco-section">
      		<div class="container">
        		<div class="row mb-5">
          			<div class="col-md-6 col-lg">
            			<div class="ftco-footer-widget mb-4">
              				<h2 class="logo"><a href="#"><span class="flaticon-roof-2 mr-2"></span>Marpe</a></h2>
              				
				            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
				            	@if(isset($RRSS['twInput']))
				                <li class="ftco-animate"><a href="{{$RRSS['twInput']}}" target="_blank"><span class="fa fa-twitter"></span></a></li>
				                @endif

				                @if(isset($RRSS['fbInput'])) 

				                <li class="ftco-animate"><a href="{{$RRSS['fbInput']}}" target="_blank"><span class="fa fa-facebook"></span></a></li>
				                @endif

				                @if(isset($RRSS['igInput']))
				                <li class="ftco-animate"><a href="{{$RRSS['igInput']}}" target="_blank"><span class="fa fa-instagram"></span></a></li>
				                @endif
				            </ul>
            			</div>
          			</div>
          			
          			<div class="col-md-6 col-lg">
             			<div class="ftco-footer-widget mb-4">
	              			<h2 class="ftco-heading-2">Horario de oficina</h2>
		              		<div class="opening-hours">
		              			<h4>Horario:</h4>
		              			<p class="pl-3">

		              				<span>{{isset($RRSS['DiasSemana']) ? $RRSS['DiasSemana'] : ''}} : {{isset($RRSS['HorariosSemana']) ? explode('@',$RRSS['HorariosSemana'])[0] : '' }} a {{isset($RRSS['HorariosSemana']) ? explode('@',$RRSS['HorariosSemana'])[1] : '' }}</span><br>
		              				<span>{{isset($RRSS['diasFin']) ? $RRSS['diasFin'] : ''}} {{(isset($RRSS['HorariosFinSemana']) && $RRSS['HorariosFinSemana'] != '@') ? ':'. explode('@',$RRSS['HorariosFinSemana'])[0] : '' }} {{ (isset($RRSS['HorariosFinSemana']) && $RRSS['HorariosFinSemana'] != '@') ? 'a'. explode('@',$RRSS['HorariosFinSemana'])[1] : '' }}</span>
		              			</p>		              			
		              		</div>
            			</div>
          			</div>
          			<div class="col-md-6 col-lg">
            			<div class="ftco-footer-widget mb-4">
            				<h2 class="ftco-heading-2">Información de contacto</h2>
            					<div class="block-23 mb-3">
				            <ul>
				                <li><span class="icon fa fa-map-marker"></span><span class="text">{{isset($RRSS['DireccionInfo']) ? $RRSS['DireccionInfo'] : '' }}</span></li>
				                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">{{isset($RRSS['TelefonoInfo']) ? $RRSS['TelefonoInfo'] : ''}}</span></a></li>
				                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">{{isset($RRSS['CorreoInfo']) ? $RRSS['CorreoInfo'] : ''}}</span></a></li>
				            </ul>
	            		</div>
            		</div>
          		</div>
        	</div>
      	</div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
  	<svg class="circular" width="48px" height="48px">
  		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
  		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
  	</svg>
  </div>

  @yield('script')
  <script src="{{asset('js/marpe/jquery.min.js')}}"></script>
  <script src="{{asset('js/marpe/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/marpe/popper.min.js')}}"></script>
  <script src="{{asset('js/marpe/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/marpe/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/marpe/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/marpe/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/marpe/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('js/marpe/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('js/marpe/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('js/marpe/summernote-0.8.18-dist/summernote-bs4.js')}}"></script>
  <script src="{{asset('js/marpe/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/marpe/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/marpe/scrollax.min.js')}}"></script> 
  <script src="{{asset('js/marpe/slick-1.6.0/slick/slick.js')}}"></script>  
  <script src="{{asset('js/marpe/datatable_1_10_6.js')}}"></script>
    <script src="{{asset('js/marpe/datatable_responsive_2_2_1.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>    
  <script>var url_global = '{{url("/")}}'</script>
  <script src="{{asset('js/funciones.js')}}"></script>
  <script src="{{asset('js/marpe/main.js')}}"></script>
  <script src="{{asset('js/marpe/multiple-select-1.5.2/dist/multiple-select.min.js')}}"></script>      
  </body>
</html>