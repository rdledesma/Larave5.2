@extends ('layouts.admin')
@section ( 'contenido')

@if(session()->has('msj'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Exito!</strong> {{session('msj')}}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


    <h1>Usuarios <a href="usuario/create" class="btn btn-primary"> Nuevo Usuario</a></h1>
    <table>
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Accion</th>
	</thead>
				@foreach ($usuarios as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>
                    <a href="{{URL::action('UserController@edit',$user->id)}}"><button class="btn btn-info">Editar</button></a>
                    <a href="" data-target="#modal-delete-{{$user->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('usuario.delete')
				@endforeach
	</table>
	{{ $usuarios->links() }}
@endsection()