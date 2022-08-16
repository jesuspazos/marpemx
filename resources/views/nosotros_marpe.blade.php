@extends('base.base_head_contenido_marpe')


@section('content')

<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url('{{$Contenido['UrlImagen']}}');">
    					<!--<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="fa fa-play"></span>
    					</a>-->
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Marpe</span>
		            <h2 class="mb-4">{{ isset($Contenido['TituloNosotros']) ? $Contenido['TituloNosotros'] : "Titulo Default"}}</h2>
		            <p>
		            	{{ (isset($Contenido['HistoriaNosotros'])) ? $Contenido['HistoriaNosotros'] : "Contenido Default"}}
					</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">{{(isset($Contenido['TituloMision']) ? $Contenido['TituloMision'] : '')}}</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">{{(isset($Contenido['TituloVision']) ? $Contenido['TituloVision'] : '')}}</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">{{(isset($Contenido['TituloValores']) ? $Contenido['TituloValores'] : '')}}</a>
									  </li>
									</ul>
									<div class="tab-content rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>{{ (isset($Contenido['Mision'])) ? $Contenido['Mision'] : '' }}</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>{{(isset($Contenido['Vision'])) ? $Contenido['Vision'] : '' }}</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>{{(isset($Contenido['Valores'])) ? $Contenido['Valores'] : '' }}</p>
									  </div>
									</div>
								</div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

@stop