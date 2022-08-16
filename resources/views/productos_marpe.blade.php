	@extends('base.base_head_contenido_marpe')


	@section('content')

	<!--<section class="ftco-section">
    	<div class="container">    		
        	<div class="row">-->
        		<div class="col-lg-12">
		  			<div class="row tabulation mt-4 ftco-animate">
	  					<div class="col-md-3" id="accordion">
							<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
							  @foreach($Categorias as $Indice => $valor)
							  
							  	<li class="nav-item text-left">							  								        							        
							        @if(!empty($valor['subcategorias']))
							        	<a class="nav-link border-bottom py-4" data-toggle="collapse" data-target="#collapse-{{ $Indice }}" aria-expanded="true" aria-controls="collapse-{{ $Indice }}">
							        		<span class="flaticon-roof-4 mr-2"></span> {{$valor['nombreCate']}}
							        	</a>

									    @foreach($valor['subcategorias'] as $Index => $balor)
									        <div id="collapse-{{ $Indice }}" class="collapse mx-5" aria-labelledby="headingOne" data-parent="#accordion">
									      		<a class="nav-link border-bottom py-7" data-toggle="tab" href="#services-sub{{ $Index }}">
									      			<span class="flaticon-roof-4 mr-2"></span> {{$balor['cNombre']}}
									      		</a>
									    	</div>
							    		@endforeach
							    	@else
							    		<!--<a class="nav-link border-bottom py-4" data-toggle="collapse" data-target="#collapse-{{ $Indice }}" aria-expanded="true" aria-controls="collapse-{{ $Indice }}">
							        		<span class="flaticon-roof-4 mr-2"></span> {{$valor['nombreCate']}}
							        	</a>-->
							        	<a class="nav-link {{ ($Indice == 0) ? 'active' : '' }} border-bottom py-4" data-toggle="tab" href="#services-{{ $Indice }}">
							        		<span class="flaticon-roof-4 mr-2"></span> {{$valor['nombreCate']}}
							        	</a>
							    	@endif
							  	</li>
							  @endforeach
							</ul>
						</div>
						<div class="col-md-9 pl-md-4">
							<div class="tab-content">																						
								@foreach($Categorias as $Indice => $valor1)																
								<div class="tab-pane container p-0 {{ ($Indice == 0) ? 'active' : '' }}" id="services-{{ $Indice }}">									
									<div class="row">																				   	
										@if(!empty($valor1['categoria_productos']))   		
	          								@foreach($valor1['categoria_productos'] as $index => $ValorD)         										
	          									<div class="col-md-6 services ftco-animate">	          											          											          									  
	      											<div class="d-block d-flex">
		              									<div class="icon d-flex justify-content-center align-items-center" style="background-image: url('{{$ValorD['descripcion']}}')">	            										
		              									</div>
		              									
		              									<div class="media-body pl-3">                							
		                									<h3 class="heading">{{$ValorD['nombreProd']}}</h3>	                									
		              									</div>
		            								</div> 
	            								</div>       												            									            								
											@endforeach																				
										@endif				
        							</div>									
								</div>
								@endforeach																								
									
								@foreach($Categorias as $IndiceSub => $valor1)
									
									@if(isset($valor1['subcategorias_productos']))
										@foreach($valor1['subcategorias_productos'] as $IndiceSubCate => $valorSub)
											<div class="tab-pane container p-0" id="services-sub{{ $IndiceSubCate }}">									
												<div class="row">
													@foreach($valorSub as $valoresSub)														
			          									<div class="col-md-6 services ftco-animate">	          											          											          									  
			      											<div class="d-block d-flex">
				              									<div class="icon d-flex justify-content-center align-items-center" style="background-image: url('{{$valoresSub['descripcion']}}')">	            										
				              									</div>
				              									
				              									<div class="media-body pl-3">                							
				                									<h3 class="heading">{{$valoresSub['nombreProd']}}</h3>	                									
				              									</div>
				            								</div>
			            								</div>															
													@endforeach
												</div>
											</div>
										@endforeach
									@endif
								@endforeach
									
							</div>
						</div>
					</div>				
				<!--</div>
    		</div>
    </section>-->
    @stop