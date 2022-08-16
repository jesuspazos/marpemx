<div class="row">
@php $i = 0; @endphp
@foreach($idImagen as $routeOne)	
	@if($routeOne['srcImg'])

        <div class="col-md-4 srs" style="margin: 10px 0;">
              <img src="{{asset($routeOne['srcImg'])}}" alt="Rounded Image" class="rounded img-fluid">
              <a style="margin: 5px 0;" href="{{url('remove',['iden_img' => $routeOne['IdImg'], 'iden_prod' => $idProd])}}" class="btn btn-danger">Eliminar</a>
        </div>
	@endif
@php $i++; @endphp
@endforeach
</div>
