@extends('base2')

@section('content')
<!--layouts.app-->
<div class="cuerpoacerca">
    <div class="contenedor">
        <div class="medio">
            <div class="row">
                <div class="col-lg-12 formulario">
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
