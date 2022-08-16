@extends('base')


@section('content')
<div class="container" style="height: 400px; border:10">
		<div class="col col-lg-12"><br><br>
			<div class="card bg-faded" style="text-align:center; height: 350px;">
				<div class="card-block"><br><br>
					<img data-imagetype="External" src="{{asset('img/gracias.jpg')}}" align="center" alt="Congrats" width="250" height="150"> 
					<br>
					<span style="font-family:Arial; font-size:20px; color:#DC0330; font-weight:normal">¡Verificación completa!</span>
					<!--<p>Se envió un correo con el detalle de la compra</p>-->
					<br>
					<a href="{{url('login')}} ">Inicia sesión...</a>	
     			</div>
			</div>
		</div>
	</div>
</div>
@stop