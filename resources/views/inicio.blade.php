@extends('base.base_head_contenido_marpe')


@section('content')
	
	<section class="ftco-section ftco-no-pt ftco-no-pb bg-light ftco-appointment">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="row justify-content-start py-5 pr-md-4">
		          		<div class="col-md-12 heading-section ftco-animate py-md-4">
		            		<h2 class="mb-4">{!! (isset($Contenido['TituloPrincipal'])) ? $Contenido['TituloPrincipal'] : "Este es mi titulo default"!!}</h2>
		            		<p style="word-wrap:break-word;">{!! (isset($Contenido['DescripcionPrincipal'])) ? $Contenido['DescripcionPrincipal'] : "Este es mi descripcion default"!!}</p>
		            	
			            	<div class="tabulation-2 mt-4">
								<ul class="nav nav-pills nav-fill d-md-flex d-block">
									<li class="nav-item mb-md-0 mb-2">
										<a class="nav-link active py-3" data-toggle="tab" href="#home1">{!! (isset($Contenido['TituloContenido1'])) ? $Contenido['TituloContenido1'] : "Este es mi TITULO default"!!}</a>
									</li>
									<li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-3" data-toggle="tab" href="#home2">{!! (isset($Contenido['TituloContenido2'])) ? $Contenido['TituloContenido2'] : "Este es mi TITULO default"!!}</a>
									</li>
									<li class="nav-item">
									    <a class="nav-link py-3 mb-md-0 mb-2" data-toggle="tab" href="#home3">{!! (isset($Contenido['TituloContenido3'])) ? $Contenido['TituloContenido3'] : "Este es mi TITULO default"!!}</a>
									</li>
								</ul>
								
								<div class="tab-content rounded mt-2">
									<div class="tab-pane container p-0 active" id="home1">
									  	<p>{!! (isset($Contenido['DescripcionContenido1'])) ? $Contenido['DescripcionContenido1'] : "Este es mi descripcion default"!!}</p>
									</div>
									
									<div class="tab-pane container p-0 fade" id="home2">
									  	<p>{!! (isset($Contenido['DescripcionContenido2'])) ? $Contenido['DescripcionContenido2'] : "Este es mi descripcion default"!!}</p>
									</div>
									<div class="tab-pane container p-0 fade" id="home3">
										<p>{!! (isset($Contenido['DescripcionContenido3'])) ? $Contenido['DescripcionContenido3'] : "Este es mi descripcion default"!!}</p>
									</div>
								</div>
							</div>
		          		</div>
		        	</div>
	        	</div>
        	</div>        		
    	</div>
    </section>

	<section class="ftco-section ftco-no-pb ftco-no-pt">				
		<div class="container-fluid px-md-0">
			<div class="row no-gutters"><!--inicio-->
  				<div class="container">
				  <h2>Nuestras Marcas/ Nuestros Clientes</h2>
				   <section class="customer-logos slider">
				   		@foreach($Marcas as $UnaMarca)				   			
				   			<div class="slide"><img src="{{asset($UnaMarca['descripcion'])}}"></div>
				   		@endforeach
				      <!--<div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
				      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>-->
				   </section>				   				
				   <br>
				   <br>
				   <br>
				</div>
			</div><!--fin no-gutters-->
		</div>
	</section>

@stop