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
									<h3 class="mb-4">Registro</h3>									
									<form method="POST" action="{{route('register')}}" id="contactForm" class="contactForm">
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
										                    @if ($errors->has('name'))
										                    <div class="alert alert-danger success-alert" id='success-alert' role="alert">
										                        <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
										                        <p>Comprueba el campo nombre</p>
										                    </div>
										                    @endif
										                    <label for="name" class="mat-label">Nombre</label>
										                    <input type="hidden" value="CLIENTE" name="tipo_user">
										                    <input type="text" maxlength="60" class="mat-input" name="name" id="name" value="{{old('name')}}">
										                </div>
													</div>													
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<div class="mat-div">
										                    @if ($errors->has('email'))
										                        <div class="alert alert-danger success-alert" id='success-alert' role="alert">
										                            <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
										                            <p>{{$errors->first('email') }}</p>
										                        </div>
										                    @endif                            
										                    <label for="mailR" class="mat-label">Correo</label>
										                    <input type="email" maxlength="45" class="mat-input" name="email" id="mailR" value="{{old('email')}}">
										                </div>
													</div>
												</div>

												<div class="col-md-12">
													<div class="form-group">
														<div class="mat-div">
										                    @if ($errors->has('mail2'))
										                        <div class="alert alert-danger success-alert" id='success-alert' role="alert">
										                            <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
										                            <p>Confirma correctamente el correo</p>
										                        </div>
										                    @endif
										                    <label for="mail2" class="mat-label">Confirmar correo</label>
										                    <input type="email" maxlength="45" class="mat-input" name="mail2" id="mail2" value="{{old('mail2')}}">
										                </div>
													</div>
												</div>

												<div class="col-md-12">
													<div class="form-group">
														<div class="mat-div">
										                    @if ($errors->has('password'))
										                        <div class="alert alert-danger success-alert" id='success-alert' role="alert">
										                            <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
										                            <p>La contraseña es obligatoria</p>
										                        </div>
										                    @endif 
										                    <label for="password" class="mat-label">Contraseña</label>
										                    <input type="password"  class="mat-input" name="password" id="password">
										                </div>
													</div>
												</div>

												<div class="col-md-12">
													<div class="form-group">
														<div class="mat-div">
										                    @if ($errors->has('password_confirmation'))
										                        <div class="alert alert-danger success-alert" id='success-alert' role="alert">
										                            <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
										                            <p>Confirma correctamente la contraseña</p>
										                        </div>
										                    @endif 
										                    <label for="password2" class="mat-label">Confirmar contraseña</label>
										                    <input type="password" class="mat-input" name="password_confirmation" id="password2">
										                </div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Registrar" id="registro" class="btn btn-primary">
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