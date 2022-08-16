@extends('base2')

@section('content')

		<div class="cuerpoacerca" style="height: 350px;">
			<div class="contenedor">
				<div class="medio">
				    <div class="row">
				        <div class="col-lg-12 formulario">
				    		<form role="form" method="post" action="{{url('restablecer')}}" class="sign_up_form"><br><br>
				    			{{csrf_field()}}
				    			<div class="wrap">
				    				<div class="mat-div">
				    			<h2 class="sign_up_title">Ouch!</h2>
				    			<p>Aún no hemos verificado tu cuenta. Te enviamos un correo para confirmar la cuenta. Revisa la carpeta de Spam</p>
				    			</div>
				    		</div><br><br><br>
				    		</form>
				    	</div>
				    </div>
				</div>
			</div>
		</div>

@stop