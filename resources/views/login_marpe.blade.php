@extends('base.base_head_contenido_marpe')


@section('content')
	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-12 d-flex">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Ingresar</h3>									
									<form method="POST" action="{{route('login')}}" id="contactForm" class="contactForm">
            							{{ csrf_field() }}  
										<div class="row">
											<div class="wrapip">
												@if(isset($exito))
                    								{!!$exito!!}
                    								@unset($exito)
                								@endif

								                @if(\Session::has('exito'))
								                    {!!\Session::get('exito')!!}                       
								                @endif   

												<div class="col-md-12">													
													<div class="form-group">
														<div class="mat-div">
								                            <label for="correo" class="mat-label">Correo</label>
								                            <input type="email" class="mat-input" name="email" id="email" value="{{old('email')}}">
					                        			</div>
													</div>													
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<div class="mat-div">
								                            <label for="password" class="mat-label">Contraseña</label>
								                            <input type="password" class="mat-input" name="password" id="password">
					                        			</div>
													</div>
												</div>

												<div class="col-md-12">
													<div class="form-group">
														<div class="mat-div">
							                                <div class="checkbox">
							                                    <label class="mat-label">
							                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
							                                    </label>
							                                </div>
					                            		</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Iniciar sesion" id="registro" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop