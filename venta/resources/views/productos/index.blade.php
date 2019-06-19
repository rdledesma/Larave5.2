@extends ('layouts.admin')
@section ( 'contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Articulos <a href="productos/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-resposive text-center">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Accion</th>
				</thead>
				@foreach ($productos as $prod)
				<tr>
					<td>{{$prod->idProducto}}</td>
					<td>{{$prod->nombreProducto}}</td>
					<td>{{$prod->precioProducto}}</td>
				
					<td>
                    <a href="{{URL::action('ProductoController@edit',$prod->idProducto)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		
	</div>

</div>

@endsection