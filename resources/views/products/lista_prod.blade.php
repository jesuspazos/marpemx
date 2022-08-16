@if(isset($data))
	
	<table class='productos' class="table">
		<thead>
			<th><div align="center">No de Registro</div></th>
			<th><div align="center">Nombre</div></th>
			<th><div align="center">Precio</div></th>
			<th><div align="center">Seccion</div></th>
		</thead>
	
	@foreach($data as $campo)
		<tr>
			<td><div align="center"><a href="{{url('detalle',$campo->idProducto)}}">{{$campo->idProducto}}</a></div></td>
			<td><div align="left">{{$campo->nombre}}</div> </td>
			<td><div align="right">${{number_format($campo->precio,2)}}</div></td>
			<td><div align="center">{{$campo->seccion}}</div></td>
		</tr>
	@endforeach
	</table>
@endif