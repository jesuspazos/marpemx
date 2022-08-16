@if(count($errors))

<div class="alert alert-danger" id='success-alert' role="alert">
    <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
    	<ul style="list-style: none; margin: 0 -40px;">
	    	@foreach($errors->all() as $error)
				<li>{{$error}}</li>
	    	@endforeach
    	</ul>
</div>

@endif