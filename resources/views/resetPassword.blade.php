@extends('base2')

@section('content')
		<div class="cuerpoacerca">
			<div class="contenedor">
				<div class="medio">
				    <div class="row">
				        <div class="col-lg-12 formulario">
				    		<form role="form" method="post" action="{{url('password/email')}}" class="sign_up_form"><br><br>
				    			{{csrf_field()}}
				    			<div class="wrap">
				    			<h2 class="sign_up_title">Reestablecer la contraseña</h2>
				    			<p>Ingrese su dirección de correo electrónico, le enviaremos el enlace para restablecer la contraseña.</p>
				    			<div class="mat-div">
					    			<div class="form-group">
					    				<input type="email" name="email" id="email" class="form-control mat-input" placeholder="Direccion de correo" tabindex="4">
					    			</div>
					    		</div>
				    			<div class="row">
				    				<div class="col-xs-12 col-md-12">
				    					<button id="send" class="form-control btn btn-outline-dange btn-block btn-lg">
				    						Reestablecer
				    					</button>
				    				</div>
				    			</div>
				    		</div><br><br>
				    		</form>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
@stop