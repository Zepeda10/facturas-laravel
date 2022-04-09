<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h2>Productos index</h2>

<a href="{{ url('/admin/productos/create') }}">Agregar</a>

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Producto</th>
			<th>Precio</th>
			<th>Impuesto</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($productos as $producto)
			<tr>
				<td>{{$producto->id}}</td>
				<td>{{$producto->nombre}}</td>
				<td>{{$producto->precio}}</td>
				<td>{{$producto->impuesto}}</td>							
	
				<td>
					<a href="{{route('productos.edit', $producto->id)}}">
						Editar
					</a>
				</td>
				<td>
					<form class="form-eliminar" action="{{route('productos.destroy',$producto)}}" method="post" accept-charset="utf-8">
						@csrf
						@method('delete')
						<button type="submit">
							Eliminar
						</button>
					</form>
				</td>
			</tr>
		@endforeach	        
	</tbody>
</table>
