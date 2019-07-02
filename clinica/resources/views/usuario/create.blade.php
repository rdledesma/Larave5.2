@extends('layouts.admin')
@section ( 'contenido')
@if(session()->has('msjerror'))
	<div class="alert alert-danger" role="alert">
 {{session('msjerror')}}</div>
@endif
@if ($errors->any())            
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
    @endforeach
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

    <h2>Crear Usuario</h2>

        <form method="post" action="{{route('usuario.store')}}">
        @csrf
        <label>Nombre</label>
        <input type="name" name="name" required placeholder="Nombre ..." value="{{old('name')}}">

        <label>email</label>
        <input type="tex" name="email" required placeholder="Email" value="{{old('email')}}">

        <label>pass</label>
        <input type="password" name="pass" required placeholder="Contraseña">

        <div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-default " type="reset">Limpiar</button>
				<a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
		</div>
        
        </form>
@endsection()